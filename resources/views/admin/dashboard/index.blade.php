@extends('admin.layouts.main')
@section('title', 'Bàn làm việc')
@section('page-title', 'Bàn làm việc')
@section('admin.content')

        <div class="alert alert-dismissible bg-info d-flex flex-column flex-sm-row w-100 p-5 mb-10">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
            <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3"
                        d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
                        fill="black"></path>
                    <path
                        d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
                        fill="black"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Content-->
            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                <h4 class="mb-2 text-light">Thông báo</h4>
{{--                <span>{{ $item->type == 1 ? 'Đánh giá năng lực ' : 'Cuộc thi ' }} {{ $item->name }} sẽ kết thúc vào hôm--}}
{{--                    nay--}}
{{--                    {{ $item->register_deadline }}</span>--}}
                <span>ahihi</span>
            </div>
            <!--end::Content-->
            <!--begin::Close-->
            <button type="button"
                class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                data-bs-dismiss="alert">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-2x svg-icon-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                            transform="rotate(-45 6 17.3137)" fill="black"></rect>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                            transform="rotate(45 7.41422 6)" fill="black"></rect>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Close-->
        </div>

    <div class="row">
        <div class="col-xl-4 mb-5 mb-xl-10">
            <div class="card card-flush h-xl-100">
                <!--begin::Heading-->
                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                    style="background-image:url('admin/assets/media/svg/shapes/top-green.png')">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                        <span class="fw-bolder fs-2x mb-3">Xin chào, {{ Auth::user()->name }}</span>
                        <div class="fs-4 text-white">
                            <span class="opacity-75">Thông tin tổng quan hệ thống</span>
                        </div>
                    </h3>
                </div>
                <div class="card-body mt-n20">
                    <div class="mt-n20 position-relative">
                        <div class="row g-3 g-lg-6">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
                                            <i class="las fs-2x text-primary la-tshirt"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span
                                            class="text-gray-700 fw-boldest d-block fs-2qx lh-1 mb-1">{{$productCount}}</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-bold fs-6">Sản phẩm</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                            <i class="las fs-2x text-success la-archive"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span
                                            class="text-gray-700 fw-boldest d-block fs-2qx lh-1 mb-1">{{$categoryCount}}</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-bold fs-6">Danh mục</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
                                           <i class="las fs-2x text-success la-shopping-cart"></i>
{{--                                            <i class="fa-solid fa-cart-shopping" style="color: #1fd175;"></i>--}}
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span
                                            class="text-gray-700 fw-boldest d-block fs-2qx lh-1 mb-1">{{$orderCount}}</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-bold fs-6">Đơn hàng</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <div class="col-md-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
                                            <i class="las fs-2x text-success la-users"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span
                                            class="text-gray-700 fw-boldest d-block fs-2qx lh-1 mb-1">{{$userCount}}</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-bold fs-6">Khách hàng</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>
{{--    <input type="hidden" id="url_chart_data" value="{{ route('dashboard.chart-competity') }}">--}}
@endsection
@section('admin.page-script')
    <script src="{{ asset('admin/assets/js/system/dashboard/chart-cuoc-thi.js') }}"></script>
    <script src="{{ asset('admin/assets/js/system/dashboard/dashboard.js') }}"></script>
    <link href="admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <script src="admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
{{--    <script>--}}
{{--        dashboardPage.initPage();--}}

{{--        var container = document.getElementById("kt_docs_vistimeline_style");--}}

{{--        // Generate HTML content--}}
{{--        const getContent = (title, img) => {--}}
{{--            const item = document.createElement('div');--}}
{{--            const name = document.createElement('div');--}}
{{--            const nameClasses = ['fw-bolder', 'mb-2'];--}}
{{--            name.classList.add(...nameClasses);--}}
{{--            name.innerHTML = title;--}}

{{--            const image = document.createElement('img');--}}
{{--            image.setAttribute('src', img);--}}

{{--            const symbol = document.createElement('div');--}}
{{--            const symbolClasses = ['symbol', 'symbol-circle', 'symbol-30'];--}}
{{--            symbol.classList.add(...symbolClasses);--}}
{{--            symbol.appendChild(image);--}}

{{--            item.appendChild(name);--}}
{{--            item.appendChild(symbol);--}}

{{--            return item;--}}
{{--        }--}}

{{--        // note that months are zero-based in the JavaScript Date object--}}
{{--        var items = new vis.DataSet(@json($contests));--}}

{{--        var options = {--}}
{{--            editable: false,--}}
{{--            margin: {--}}
{{--                item: 40,--}}
{{--                axis: 40,--}}
{{--            },--}}
{{--        };--}}

{{--        var timeline = new vis.Timeline(container, items, options);--}}
{{--    </script>--}}

{{--    <script>--}}
{{--        fetchConTestCapacity("{{ $timeNow }}");--}}

{{--        function fetchConTestCapacity(date) {--}}
{{--            $('#kt_schedule_day_1').html(`Đang chạy ...`);--}}
{{--            $.ajax({--}}
{{--                type: "GET",--}}
{{--                url: "admin/contest-capacity?date=" + date,--}}
{{--                success: function(response) {--}}
{{--                    var html = response.payload.map(function(data) {--}}
{{--                        return `--}}
{{--                                <div class="d-flex flex-stack position-relative mt-8">--}}
{{--                                    <!--begin::Bar-->--}}
{{--                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>--}}
{{--                                    <!--end::Bar-->--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="fw-bold ms-5 text-gray-600">--}}
{{--                                        <!--begin::Time-->--}}
{{--                                        <div class="fs-5">--}}
{{--                                            ${data.date_start} - ${data.register_deadline}--}}
{{--                                        </div>--}}
{{--                                        <!--end::Time-->--}}
{{--                                        <!--begin::Title-->--}}
{{--                                        <a href="${data.type == 1 ? '/admin/capacity/'+data.id : '/admin/contest/'+data.id+'/detail'}"--}}
{{--                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">--}}
{{--                                               ${data.type == 1 ? 'Đánh giá năng lực : ' : 'Cuộc thi : '} ${data.name}--}}
{{--                                        </a>--}}
{{--                                        <!--end::Title-->--}}
{{--                                        <!--begin::User-->--}}
{{--                                        <div class="text-gray-400">--}}
{{--                                            <a href="#">${data.type == 1 ? 'Đánh giá năng lực' : 'Cuộc thi'}</a>--}}
{{--                                        </div>--}}
{{--                                        <!--end::User-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::Action-->--}}
{{--                                    <a href="${data.type == 1 ? '/admin/capacity/'+data.id : '/admin/contests/'+data.id+'/detail'}" class="btn btn-bg-light btn-active-color-primary btn-sm">Xem chi tiết </a>--}}
{{--                                    <!--end::Action-->--}}
{{--                                </div>--}}

{{--                        `;--}}
{{--                    }).join(" ");--}}
{{--                    $('#kt_schedule_day_1').html(html);--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--        $('.click-showtab').on('click', function() {--}}

{{--            fetchConTestCapacity($(this).data('date'))--}}
{{--        })--}}
{{--    </script>--}}

@endsection
