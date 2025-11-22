@extends('layouts.LayoutDefault')
@section('content')
    <div class="orders__item">
        <div class="container text-center">
            <div class="row">
                <div class="col-8">
                    <div class="orders__box">
                        <div class="orders__category">
                            <from action='/orders/"select-oreder" }}' method="post">
                                <select class="form-select" name="select-order" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </from>
                        </div>
                        <div class="orders__items">
                            <div class="container text-center">
                                <div class="row g-3">
                                    <div class="col-4">
                                        Column
                                    </div>
                                    <div class="col-4">
                                        Column
                                    </div>
                                    <div class="col-4">
                                        Column
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="orders__product">
                        <form method="POST" action="order/qr nếu là qr nếu là tiền mặt thì tính luôn">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Đơn hàng</th>
                                        <th scope="col">Đ.giá</th>
                                        <th scope="col">SL</th>
                                        <th scope="col">TT</th>
                                        <th>X</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Cafe mậu</th>
                                        <td>10.000d</td>
                                        <td>2</td>
                                        <td>20.000d</td>
                                        <td><button class="btn btn-danger">X</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <label>Phương thức thanh toán</label>
                            <select class="form-select" name="select-order" aria-label="Default select example">
                                    <option value="1" selected>Tiền mặt</option>
                                    <option value="2">QR</option>
                            </select>
                            
                            <button class="btn btn-primary text-center">In hóa đơn</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection