@extends('admin.layouts.main')
@section('title','Thêm người dùng')
@section('admin.content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <ol class="breadcrumb text-muted fs-6 fw-bold">
                <li class="breadcrumb-item pe-3">
                    <a href="{{route('admin.coupon.show')}}" class="pe-3">
                        Danh sách người dùng
                    </a>
                </li>
                <li class="breadcrumb-item px-3 text-muted">Thêm mới người dùng</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                <form id="formRecruitment" action="{{route('admin.user.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Họ và tên</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                       class=" form-control"
                                       placeholder="">
                                @error('name')
                                <p id="checkname" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('email')
                                <p id="checkemail" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Mật khẩu </label>
                                <input type="text" name="password" value="{{ old('password') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('password')
                                <p id="checkpassword" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Quyền người dùng </label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"
                                        name="role">
                                    <option>Chọn quyền người dùng</option>
                                    @foreach($role as $item)
                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group ">
                                <label for="" class="form-label">Ảnh người dùng</label>
                                <input name="image" type='file' id="file-input"
                                       accept="image/*"
                                       class="form-control"/>
                                <img class="w-100 mt-4 border rounded-3" id="image-preview"
                                     src="https://vanhoadoanhnghiepvn.vn/wp-content/uploads/2020/08/112815953-stock-vector-no-image-available-icon-flat-vector.jpg"/>
                            </div>
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-10 ">
                        <button type="submit" name="" id=""
                                class="btn btn-success btn-lg btn-block">Lưu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--hiển thị file name-->
@endsection
@section('admin.page-script')
    <script>
        $(function () {
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#file-input").change(function () {
                readURL(this, '#image-preview');
            });
        });
    </script>
@endsection
