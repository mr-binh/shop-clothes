@extends('client.layouts.main')
@section('title','My order')
@section('client.content')
    @include('client.dashboard.aside')
    <div class="col-xl-8 col-lg-8">
        <div class="order-details">
            <table class="table order-table mb-0">
                <thead>
                <tr>
                    <th scope="col" class="order-id">Order ID</th>
                    <th scope="col" class="order-date">Order Date</th>
                    <th scope="col" class="order-status">Status</th>
                    <th scope="col" class="order-amount">Total</th>
                    <th scope="col" class="order-active">Active</th>
                </tr>
                </thead>
                <tbody>
                @if($orders)
                    @foreach($orders as $order)
                        <tr>
                            <td class="order-id">{{$order->order_code}}</td>
                            <td class="order-date">{{date_format($order->created_at,"d-m-Y")}}</td>
                            <td class="order-status">{{$order->status}}</td>
                            <td class="order-amount">{{number_format($order->total-$order->discount)}} đ</td>
                            {{--                            <td class="order-active"><a href=""><i class="flaticon-visibility"></i></a></td>--}}
                            <td class="order-active">
                                <i class="flaticon-visibility order-info" data-bs-toggle="modal" data-bs-target="#orderinfo" data-id="{{$order->id}}"></i>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="order" rowspan="5">Chưa có đơn hàng</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="orderinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order detail #{{$order->order_code}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="info-order">
                        Loading data ...
                    </div>
                    <div class="modal-footer">
{{--                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
@endsection
@section('client.page-script')
    <script>
        $(document).ready(function () {
            $('#orderinfo').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget)
                let id = button.data('id')
                $.ajax({
                    url: "{{route('api.client.dashboard.orderDetail')}}",
                    method: "POST",
                    data: {
                        _token: "{{csrf_token()}}",
                        id: id
                    },
                    success: function (data) {
                        $('#info-order').html("");
                        $('#info-order').append(`
                        <table class="table">
                              <thead>
                                    <tr class="text-center">
                                          <th scope="col" class="col-1">#</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Description</th>
                                          <th scope="col">Qty</th>
                                          <th scope="col">Price</th>
                                    </tr>
                              </thead>
                              <tbody class="info-order-body">
                              </tbody>
                              <tfoot>
                                    <tr class="text-center">
                                          <th scope="col" class="col-1">#</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Description</th>
                                          <th scope="col">Qty</th>
                                          <th scope="col">Price</th>
                                    </tr>
                              </tfoot>
                        </table>
                        <div class="col-4 float-end">
                             <table class="table">
                                    <tr>
                                        <td>Subtotal :</td>
                                        <td>${data.total.toLocaleString()} đ</td>
                                    </tr>
                                    <tr>
                                        <td>Discount :</td>
                                        <td>${data.discount.toLocaleString()} đ</td>
                                    </tr>
                                    <tr>
                                        <td>Total :</td>
                                        <td>${(data.total - data.discount).toLocaleString()} đ</td>
                                    </tr>
                             </table>
                        </div>
                        `);
                        $.each(data.productDetail, function (index, value) {
                            $('.info-order-body').append(`
                                    <tr class="text-center">
                                          <th scope="row">${index+1}</th>
                                          <td>${value.name}</td>
                                          <td>${value.color} | ${value.size}</td>
                                          <td>${value.quantity}</td>
                                          <td>${value.price} đ</td>
                                    </tr>
                            `);
                        });
                    }
                });
            });
        });
    </script>
@endsection
