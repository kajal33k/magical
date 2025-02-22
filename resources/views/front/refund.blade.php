@extends('components.main')
@section('content')

<div class="container py-10 px-6 mx-auto max-w-4xl">
 <!-- Refund & Cancellation Policy -->
 <section class="mb-5 p-6 bg-gray-100 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Refund & Cancellation Policy</h2>
    <p class="text-gray-700 leading-relaxed">
        You may cancel an order within <span class="font-medium">1 day</span> of placing it. However, cancellations are not possible once 
        the item is shipped. Perishable goods (e.g., food items) are non-refundable.
    </p>

    <div class="p-4 mt-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded">
        <p class="font-medium">⚠ Important:</p>
        <p class="text-sm">Damaged or defective items must be reported within <span class="font-medium">1 day</span> of receipt for replacement or refund.</p>
    </div>

    <p class="text-gray-700 mt-4">
        Refunds (if approved) will be processed within <span class="font-medium">7 days</span>.
    </p>
</section>


</div>
@endsection