<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequestValidation;
use App\Mail\AdminNewOrderNotificationMail;
use App\Mail\UserOrderConfirmationMail;
use App\Models\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderRequestController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $orderRequest = OrderRequest::query();

        // Apply search filter if keyword is provided
        if (!empty($keyword)) {
            $orderRequest->where('title', 'like', "%$keyword%");
        }

        // Order by created_at column in descending order to show latest orders first
        $orderRequestData = $orderRequest->orderBy('created_at', 'desc')->paginate(15);

        return view('orderrequest.index', compact('orderRequestData'));
    }



    public function store(OrderRequestValidation $request)
    {
        // If validation fails, it will automatically redirect to the form with errors
        // in case of an AJAX request, we need to return errors as JSON.

        try {
            // Save order to database
            $order = OrderRequest::create($request->validated());

            // Check if user provided an email
            if (!empty($order->email)) {
                Mail::to($order->email)->send(new UserOrderConfirmationMail($order));
            }

            // Notify admin
            Mail::to('mmenterprises33@gmail.com')->send(new AdminNewOrderNotificationMail($order));

            // Return success response
            return response()->json([
                'status' => 'success',
                'redirect_url' => route('thank-you')
            ]);
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Email sending failed: ' . $e->getMessage());

            // Return an error response in case of failure
            return response()->json([
                'status' => 'error',
                'message' => 'There was an issue placing your order. Please try again.'
            ], 500);
        }
    }



}
