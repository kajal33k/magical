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
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $orderRequest = OrderRequest::query();

        if (!empty($keyword)) {
            $orderRequest->where('title', 'like', "%$keyword%");
        }
        $orderRequestData = $orderRequest->paginate(5);

        return view('orderrequest.index',compact('orderRequestData'));
    }


    public function store(OrderRequestValidation $request)
    {
        // dd($request);
        // Save order to database
        $order = OrderRequest::create($request->validated());

        try {
            // Check if user provided an email
            if (!empty($order->email)) {
                Mail::to($order->email)->send(new UserOrderConfirmationMail($order));
            }

            // Notify admin
            Mail::to('admin@example.com')->send(new AdminNewOrderNotificationMail($order));
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Email sending failed: ' . $e->getMessage());
        }
        return redirect()->route('thank-you');
        // return redirect()->back()->with('success', 'Order placed successfully!');
    }

}
