@extends('admin.layouts.main')
@section('title','Thêm thể loại')
@section('admin.content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <ol class="breadcrumb text-muted fs-6 fw-bold">
                <li class="breadcrumb-item pe-3">
                    <a href="#" class="pe-3">
                        Danh sách sản phẩm
                    </a>
                </li>
                <li class="breadcrumb-item px-3 text-muted">Thêm mới thể loại</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                <form id="formRecruitment" action="{{route('admin.product.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Tên sản phẩm</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                       class=" form-control"
                                       placeholder="">
                                @error('name')
                                <p id="checkname" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="description"
                                          id="kt_docs_ckeditor_classic2"
                                          rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Giá sản phẩm</label>
                                <input min="0" type="number" name="price" value="{{ old('price') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('price')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Trạng thái sản phẩm</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="status">
                                    <option selected>Trạng thái</option>
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                                @error('status')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Sản phẩm nổi bật</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="hot">
                                    <option selected>Trạng thái</option>
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                                @error('hot')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Danh mục sản phẩm</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg " name="category_id">
                                    <option selected>Chọn danh mục sản phẩm</option>
                                    @foreach ($categories as $item)
                                        <option {{ collect(old('category_id'))->contains($item->id) ? 'selected' : '' }}
                                                value="{{ $item->id }} ">
                                            {{$item->name}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
{{--                            <div class="form-group mb-10">--}}
{{--                                <label class="form-label" for="">Danh mục</label>--}}
{{--                                <select placeholder="Chọn" multiple class="form-select mb-3 select2-hidden-accessible"--}}
{{--                                        data-control="select2" data-hide-search="false" tabindex="-1" aria-hidden="true"--}}
{{--                                        name="category_id[]" value="{{ serialize(old('contest_id')) }}">--}}
{{--                                    @foreach ($categories as $item)--}}
{{--                                        <option {{ collect(old('category_id'))->contains($item->id) ? 'selected' : '' }}--}}
{{--                                                value="{{ $item->id }} ">--}}
{{--                                            {{$item->name}}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                @error('category_id')--}}
{{--                                <p id="checkprice" class="text-danger">{{ $message }}</p>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                        </div>

                        <div class="col-4">
                            <div class="form-group ">
                                <label for="" class="form-label">Ảnh thể loại</label>
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
