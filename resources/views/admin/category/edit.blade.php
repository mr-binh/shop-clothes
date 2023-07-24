@extends('admin.layouts.main')
@section('title','Cập nhật thể loại')
@section('admin.content')

    <div class="row mb-4">
        <div class="col-lg-12">
            <ol class="breadcrumb text-muted fs-6 fw-bold">
                <li class="breadcrumb-item pe-3">
                    <a href="#" class="pe-3">
                        Danh sách thể loại
                    </a>
                </li>
                <li class="breadcrumb-item px-3 text-muted">Cập nhật thể loại</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                <form id="formRecruitment" action="{{route('admin.category.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Tên thể loại</label>
                                <input type="text" name="name" value="{{ $category->name }}"
                                       class=" form-control"
                                       placeholder="">
                                @error('name')
                                <p id="checkname" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Mô tả thẻ loại</label>
                                <textarea class="form-control" name="description"
                                          id="kt_docs_ckeditor_classic2"
                                          rows="3">{{ $category->description }}</textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group ">
                                <label for="" class="form-label">Ảnh thể loại</label>
                                <input name="image" type='file' id="file-input"
                                       accept=".png, .jpg, .jpeg"
                                       class="form-control"/>
                                <img class="w-100 mt-4 border rounded-3" id="image-preview"
                                     src="{{$category->image ? $category->image :'https://vanhoadoanhnghiepvn.vn/wp-content/uploads/2020/08/112815953-stock-vector-no-image-available-icon-flat-vector.jpg'}}"/>
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
    </div>
    </div>
    <!--hiển thị file name-->
@endsection
@section('admin.page-script')
    <script src="assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
    <script src="assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
    <script src="assets/js/system/ckeditor/ckeditor.js"></script>
    <script src="assets/js/system/preview-file/previewImg.js"></script>
    <script>
        rules.image = {
            required: true,
        };
        messages.image = {
            required: 'Chưa nhập trường này !',
        };
        preview.showFile('#file-input', '#image-preview');
    </script>
    <script src="assets/js/system/validate/validate.js"></script>
@endsection
