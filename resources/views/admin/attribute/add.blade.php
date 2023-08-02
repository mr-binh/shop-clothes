@extends('admin.layouts.main')
@section('title','Thêm thành phần')
@section('admin.content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <ol class="breadcrumb text-muted fs-6 fw-bold">
                <li class="breadcrumb-item pe-3">
                    <a href="#" class="pe-3">
                        Danh sách thành phần
                    </a>
                </li>
                <li class="breadcrumb-item px-3 text-muted">Thêm mới thành phần</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                <form id="formRecruitment" action="{{url('admin/attribute').'/'.$type}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Tên {{$type}}</label>
                                <input type="text" name="attribute_name" value="{{ old('attribute_name') }}"
                                       class=" form-control"
                                       placeholder="">
                                @error('attribute_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Trạng thái</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"
                                        name="status">
                                    <option selected>Trạng thái</option>
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                                @error('status')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            @if($type!='banner')
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Giá trị {{$type}}</label>
                                <input type="text" name="attribute_value" value="{{ old('attribute_value') }}"
                                       class=" form-control"
                                       placeholder="">
                                @error('attribute_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            @endif
                        </div>
                        @if($type=='banner')
                            <div class="col-4">
                                <div class="form-group ">
                                    <label for="" class="form-label">Ảnh banner</label>
                                    <input name="image" type='file' id="file-input"
                                           accept=".png, .jpg, .jpeg"
                                           class="form-control"/>
                                    <img class="w-100 mt-4 border rounded-3" id="image-preview"
                                         src="https://vanhoadoanhnghiepvn.vn/wp-content/uploads/2020/08/112815953-stock-vector-no-image-available-icon-flat-vector.jpg"/>
                                </div>
                                @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif
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
        $(function(){
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
