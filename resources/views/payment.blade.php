<form action="{{ route('phonepe.initiate') }}" method="POST">
    @csrf
    <button type="submit">Pay with PhonePe</button>
</form>
