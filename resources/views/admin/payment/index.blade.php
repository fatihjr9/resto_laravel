@extends('admin.layout')
@section('button')
  <a href="{{ route('paymentCreate') }}" class="btn btn-outline-primary">Create</a>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
          <table class="table table-striped" id="table1">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Payment URL</th>
                      <th width="20%">Action</th>
                  </tr>
              </thead>
              <tbody>
                    @foreach($payments as $key => $payment)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><a href="{{ $payment->url_payment }}" target="_blank">Link Pembayaran</a></td>
                            <td>
                                <form action="{{ route('paymentDestroy', $payment->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                <tbody>
          </table>
    </div>
  </div>
@endsection