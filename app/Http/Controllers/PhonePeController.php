<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PhonePeController extends Controller
{
    public function initiatePayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'mobile' => 'required|digits:10',
        ]);

        $merchantId = env('PHONEPE_MERCHANT_ID');
        $saltKey = env('PHONEPE_SALT_KEY');
        $saltIndex = env('PHONEPE_SALT_INDEX');
        
        // Switch between sandbox and production dynamically
        $environment = env('PHONEPE_ENVIRONMENT', 'sandbox');
        $baseUrl = $environment === 'production' ? env('PHONEPE_BASE_URL_PRODUCTION') : env('PHONEPE_BASE_URL_SANDBOX');

        $callbackUrl = route('phonepe.callback');

        // Convert INR to paise (1 INR = 100 paise)
        $amountInPaise = $request->amount * 100;

        // Payment request payload
        $payload = [
            "merchantId" => $merchantId,
            "merchantTransactionId" => uniqid(),
            "merchantUserId" => "USER123",
            "amount" => $amountInPaise,
            "redirectUrl" => $callbackUrl,
            "redirectMode" => "POST",
            "callbackUrl" => $callbackUrl,
            "mobileNumber" => $request->mobile,
            "paymentInstrument" => [
                "type" => "PAY_PAGE"
            ]
        ];

        $payloadJson = json_encode($payload);
        $checksum = hash('sha256', $payloadJson . $saltKey) . "###" . $saltIndex;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-VERIFY' => $checksum
        ])->post($baseUrl . "pg/v1/pay", [
            'request' => base64_encode($payloadJson)
        ]);

        $responseData = $response->json();
        
        if (isset($responseData['data']['instrumentResponse']['redirectInfo']['url'])) {
            return redirect($responseData['data']['instrumentResponse']['redirectInfo']['url']);
        }

        return response()->json($responseData);
    }

    public function handleCallback(Request $request)
    {
        $data = $request->all();
        return response()->json($data);
    }
}
