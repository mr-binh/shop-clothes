<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <h3 class="page-title">My Account</h3>
                    <ul class="page-switcher">
                        <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="dashbord-switcher">
                    <a href="{{route('client.dashboard.index')}}" class="active"><i class="flaticon-dashboard"></i> Dashboard</a>
                    <a href="{{route('client.dashboard.profile')}}"><i class="flaticon-user"></i> My Profile</a>
                    <a href="{{route('client.dashboard.order')}}"><i class="flaticon-shopping-bag"></i> My Order</a>
                    {{--                        <a href="setting.html"><i class="flaticon-settings"></i> Account Setting</a>--}}
                    <a href="#"><i class="flaticon-logout"></i> Logout</a>
                </div>
            </div>
