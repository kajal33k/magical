<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay with PhonePe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">PhonePe Payment</h2>
        <form action="{{ route('phonepe.initiate') }}" method="POST" class="card p-4">
            @csrf
            <div class="mb-3">
                <label for="amount" class="form-label">Enter Amount (INR)</label>
                <input type="number" class="form-control" name="amount" id="amount" required min="1" placeholder="Enter amount">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input type="tel" class="form-control" name="mobile" id="mobile" required pattern="[0-9]{10}" placeholder="Enter mobile number">
            </div>
            <button type="submit" class="btn btn-primary w-100">Proceed to Pay</button>
        </form>
    </div>
</body>
</html>
