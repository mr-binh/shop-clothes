@extends('admin.layouts.main')
@section('title', 'Quản lý đơn hàng') ')
@section('admin.page-title', 'Quản lý đơn hàng')
@section('admin.content')
    <div class="card card-flush p-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex justify-content-start">
                    <h1>
                        Danh sách đơn hàng
                    </h1>
                    <a class="mx-2" href="{{ route('admin.order.show',['type'=>request('type')]) }}">
                        <span data-bs-toggle="tooltip" title="Tải lại trang " role="button"
                              class="refresh-btn svg-icon svg-icon-primary svg-icon-2x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/General/Update.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path
                                        d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z"
                                        fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>

                    <a class="mx-2"
                       href="#">

                        <span data-bs-toggle="tooltip" title="Kho lưu trữ bản xóa "
                              class=" svg-icon svg-icon-primary svg-icon-2x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Files/Deleted-folder.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path
                                        d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                        fill="#000000" opacity="0.3"/>
                                    <path
                                        d="M10.5857864,14 L9.17157288,12.5857864 C8.78104858,12.1952621 8.78104858,11.5620972 9.17157288,11.1715729 C9.56209717,10.7810486 10.1952621,10.7810486 10.5857864,11.1715729 L12,12.5857864 L13.4142136,11.1715729 C13.8047379,10.7810486 14.4379028,10.7810486 14.8284271,11.1715729 C15.2189514,11.5620972 15.2189514,12.1952621 14.8284271,12.5857864 L13.4142136,14 L14.8284271,15.4142136 C15.2189514,15.8047379 15.2189514,16.4379028 14.8284271,16.8284271 C14.4379028,17.2189514 13.8047379,17.2189514 13.4142136,16.8284271 L12,15.4142136 L10.5857864,16.8284271 C10.1952621,17.2189514 9.56209717,17.2189514 9.17157288,16.8284271 C8.78104858,16.4379028 8.78104858,15.8047379 9.17157288,15.4142136 L10.5857864,14 Z"
                                        fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>

                </div>

            </div>
            <div class=" col-lg-6">
{{--                <div class=" d-flex flex-row-reverse bd-highlight">--}}

{{--                    <a href="{{ route('admin.product.create') }}" class=" btn btn-primary">Tạo mới sản phẩm--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="table-responsive p-4 card card-flush ">
            @if (count($orders) > 0)
                <table class=" table table-hover table-responsive-md text-center">
                    <thead>
                    <tr class="text-capitalize">
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Tên người nhận</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Trạng thái đơn hàng</th>
                        <th scope="col">Trạng thái thanh toán</th>
                        <th scope="col">Ngày tạo</th>
                        <th class="text-center" colspan="2">
                        </th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($orders as $index => $key)
                        <tr class="py-2" id="order-id-{{$key->id}}">
                            <td>
                                {{ $key->order_code }}
                            </td>
                            <td>
                                {{ $key->name}}
                            </td>
                            <td>
                                {{ $key->note??'Không có ghi chú'}}
                            </td>
                            <td>{{number_format($key->total)}} đ</td>
                            <td>
                                <div data-bs-toggle="tooltip" title="Cập nhật trạng thái "
                                     class="form-check form-switch">
                                    <select class="form-select-status form-select form-select-sm"
                                            aria-label="Small select" name="status" data-id="{{$key->id}}">
                                        <option value="1" {{$key->status==1?'selected':''}}>Chờ giao hàng</option>
                                        <option value="2" {{$key->status==2?'selected':''}}>Đang giao hàng</option>
                                        <option value="3" {{$key->status==3?'selected':''}}>Đã giao hàng</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <span>{{$key->payment_status==0?"Đã thanh toán":"Chưa thanh toán"}}</span>
                            </td>
                            <td>
                                {{ date('d-m-Y', strtotime($key->created_at)) }}
                            </td>
                            <td>
                                <div data-bs-toggle="tooltip" title="Thao tác " class="btn-group dropstart">
                                    <button type="button" class="btn   btn-sm dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/General/Settings-2.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                              height="24"/>
                                                        <path
                                                            d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                            fill="#000000"/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                    </button>
                                    <ul class="dropdown-menu  px-4 ">
                                        {{--                                        <li class="my-3">--}}
                                        {{--                                            <a href="{{ route('admin.product.edit', $key->id) }}">--}}
                                        {{--                                                    <span role="button" class="svg-icon svg-icon-success svg-icon-2x">--}}
                                        {{--                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Design/Edit.svg--><svg--}}
                                        {{--                                                            xmlns="http://www.w3.org/2000/svg"--}}
                                        {{--                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"--}}
                                        {{--                                                            height="24px" viewBox="0 0 24 24" version="1.1">--}}
                                        {{--                                                            <g stroke="none" stroke-width="1" fill="none"--}}
                                        {{--                                                               fill-rule="evenodd">--}}
                                        {{--                                                                <rect x="0" y="0" width="24"--}}
                                        {{--                                                                      height="24"/>--}}
                                        {{--                                                                <path--}}
                                        {{--                                                                    d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"--}}
                                        {{--                                                                    fill="#000000" fill-rule="nonzero"--}}
                                        {{--                                                                    transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>--}}
                                        {{--                                                                <rect fill="#000000" opacity="0.3" x="5"--}}
                                        {{--                                                                      y="20" width="15" height="2"--}}
                                        {{--                                                                      rx="1"/>--}}
                                        {{--                                                            </g>--}}
                                        {{--                                                        </svg>--}}
                                        {{--                                                    </span>--}}
                                        {{--                                                Chỉnh sửa--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </li>--}}
                                        <li class="my-3">
                                            <a data-bs-toggle="modal" data-bs-target="#orderinfo"
                                               data-id="{{$key->id}}">
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x ">
                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Text/Redo.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24"
                                                                      height="24"/>
                                                                <path
                                                                    d="M21.4451171,17.7910156 C21.4451171,16.9707031 21.6208984,13.7333984 19.0671874,11.1650391 C17.3484374,9.43652344 14.7761718,9.13671875 11.6999999,9 L11.6999999,4.69307548 C11.6999999,4.27886191 11.3642135,3.94307548 10.9499999,3.94307548 C10.7636897,3.94307548 10.584049,4.01242035 10.4460626,4.13760526 L3.30599678,10.6152626 C2.99921905,10.8935795 2.976147,11.3678924 3.2544639,11.6746702 C3.26907199,11.6907721 3.28437331,11.7062312 3.30032452,11.7210037 L10.4403903,18.333467 C10.7442966,18.6149166 11.2188212,18.596712 11.5002708,18.2928057 C11.628669,18.1541628 11.6999999,17.9721616 11.6999999,17.7831961 L11.6999999,13.5 C13.6531249,13.5537109 15.0443703,13.6779456 16.3083984,14.0800781 C18.1284272,14.6590944 19.5349747,16.3018455 20.5280411,19.0083314 L20.5280247,19.0083374 C20.6363903,19.3036749 20.9175496,19.5 21.2321404,19.5 L21.4499999,19.5 C21.4499999,19.0068359 21.4451171,18.2255859 21.4451171,17.7910156 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(12.254964, 11.721538) scale(-1, 1) translate(-12.254964, -11.721538) "/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                Chi tiết
                                            </a>
                                        </li>
                                        @if($status==1)
                                            <li class="my-3">
                                                @hasrole('super admin')
                                                {{--                                            @if ($key->recruitmentEnterprise->count() == 0 &&--}}
                                                {{--                                                $key->contest->count() == 0 &&--}}
                                                {{--                                                $key->enterprise->count() == 0 &&--}}
                                                {{--                                                $key->posts->count() == 0)--}}
                                                <form action="{{ route('admin.order.destroy', $key->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="return confirm('Bạn có chắc muốn xóa không !')"
                                                            style=" background: none ; border: none ; list-style : none"
                                                            type="submit">
                                                                <span role="button"
                                                                      class="svg-icon svg-icon-danger svg-icon-2x">
                                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
                                                                            <rect x="0" y="0"
                                                                                  width="24" height="24"/>
                                                                            <path
                                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                                fill="#000000" fill-rule="nonzero"/>
                                                                            <path
                                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3"/>
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                        Huỷ đơn
                                                    </button>
                                                </form>
                                                {{--                                            @endif--}}
                                                {{--                                            @else--}}
                                                {{--                                                <div style="cursor: not-allowed; user-select: none">--}}

                                                {{--                                                        <span class="svg-icon svg-icon-danger svg-icon-2x">--}}
                                                {{--                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Code/Lock-circle.svg--><svg--}}
                                                {{--                                                                xmlns="http://www.w3.org/2000/svg"--}}
                                                {{--                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"--}}
                                                {{--                                                                height="24px" viewBox="0 0 24 24" version="1.1">--}}
                                                {{--                                                                <g stroke="none" stroke-width="1" fill="none"--}}
                                                {{--                                                                   fill-rule="evenodd">--}}
                                                {{--                                                                    <rect x="0" y="0" width="24"--}}
                                                {{--                                                                          height="24" />--}}
                                                {{--                                                                    <circle fill="#000000" opacity="0.3" cx="12"--}}
                                                {{--                                                                            cy="12" r="10" />--}}
                                                {{--                                                                    <path--}}
                                                {{--                                                                        d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z"--}}
                                                {{--                                                                        fill="#000000" />--}}
                                                {{--                                                                </g>--}}
                                                {{--                                                            </svg>--}}
                                                {{--                                                            <!--end::Svg Icon-->--}}
                                                {{--                                                        </span>--}}
                                                {{--                                                    Xóa bỏ--}}
                                                {{--                                                </div>--}}
                                                @endhasrole

                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="modal fade" id="orderinfo" tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Order detail
                                                    #{{$key->order_code}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="info-order">
                                                Loading data ...
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $orders->links('pagination::bootstrap-4') }}
            @else
                <h2>Không tìm thấy thông tin đơn hàng !!!</h2>
            @endif

        </div>
    </div>
@endsection
@section('admin.page-script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    {{--    <script src="assets/js/system/recruitment/recruitment.js"></script>--}}

    {{--    <script src="assets/js/system/formatlist/formatlis.js"></script>--}}
    <script>
        const _token = "{{ csrf_token() }}";
    </script>
    <script>
        const pageRecruitmentForm = {
            selectChangeStatus: function () {
                $(".form-select-status").on("change", function () {
                    let id = $(this).data("id");
                    // let status = $(this).val();
                    $.ajax({
                        url: `admin/order/status/${id}`,
                        method: "PUT",
                        data: {
                            _token: _token,
                            status: $(this).val(),
                        },
                        success: function (data) {
                            // console.log(data);
                            if (!data.status) return alert(data.payload);
                            toastr.success('Cập nhật thành công', {timeOut: 500})
                            $('#order-id-' + id).css('display', 'none');
                        },
                    });
                });
            },
        };

        pageRecruitmentForm.selectChangeStatus();
    </script>
    <script>
        $(document).ready(function () {
            $('#orderinfo').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget)
                let id = button.data('id')
                $.ajax({
                    url: "{{route('admin.attribute.detail')}}",
                    method: "POST",
                    data: {
                        _token: "{{csrf_token()}}",
                        id: id
                    },
                    success: function (data) {
                        $('#info-order').html("");
                        $('#info-order').append(`
                        <table class="table border-1">
                              <thead>
                                    <tr class="text-center">
                                          <th scope="col" class="col-1">STT</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Color</th>
                                          <th scope="col">Size</th>
                                          <th scope="col">Qty</th>
                                          <th scope="col">Price</th>
                                    </tr>
                              </thead>
                              <tbody class="info-order-body">
                              </tbody>
                              <tfoot>
                                    <tr class="text-center">
                                          <th scope="col" class="col-1">STT</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Color</th>
                                          <th scope="col">Size</th>
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
                                          <th scope="row">${index + 1}</th>
                                          <td>${value.name}</td>
                                          <td>${value.color}</td>
                                          <td>${value.size}</td>
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

