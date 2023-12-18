@extends('admin.layout')
@section('content')
<div class="card p-4">
    <form action="{{ route('paymentCreate') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="payment-url" class="form-label">Payment URL</label>
            <input type="text" name="url_payment" class="form-control" id="payment-url" placeholder="Masukkan payment url">
        </div>
        <button class="btn w-full py-2 text-white" style="background: orange;">Tambahkan</button>
    </form>
</div>
@endsection