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
                            <tr>
                                <td class="order-id">#56986</td>
                                <td class="order-date">21 August 2021</td>
                                <td class="order-status">Pending</td>
                                <td class="order-amount">$ 985.23 for 85 Items</td>
                                <td class="order-active"><a href="#"><i class="flaticon-visibility"></i></a></td>
                            </tr>
                            <tr>
                                <td class="order-id">#56987</td>
                                <td class="order-date">25 April 2021</td>
                                <td class="order-status"> Picked</td>
                                <td class="order-amount"> $ 985.23 for 85 Items</td>
                                <td class="order-active"><a href="#"><i class="flaticon-visibility"></i></a></td>
                            </tr>
                            <tr>
                                <td class="order-id">#56988</td>
                                <td class="order-date">3rd June 2021</td>
                                <td class="order-status">Completed</td>
                                <td class="order-amount">$ 985.23 for 85 Items</td>
                                <td class="order-active"><a href="#"><i class="flaticon-visibility"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
