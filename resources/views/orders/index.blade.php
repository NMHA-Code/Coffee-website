@extends('layouts.LayoutDefault')
@section('content')
    <div class="orders">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã đơn</th>
      <th scope="col">Thanh toán (lọc theo paid)</th>
      <th scope="col">Hủy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><button class="btn btn-primary">Paid</button></td>
      <td><button class="btn btn-danger">Hủy</button></td>
    </tr>
  </tbody>
</table>
    </div>
@endsection