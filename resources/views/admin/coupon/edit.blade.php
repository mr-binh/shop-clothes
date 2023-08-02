@extends('admin.layouts.main')
@section('title','Cập nhật mã giảm giá')
@section('admin.content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <ol class="breadcrumb text-muted fs-6 fw-bold">
                <li class="breadcrumb-item pe-3">
                    <a href="{{route('admin.coupon.show')}}" class="pe-3">
                        Danh sách mã giảm giá
                    </a>
                </li>
                <li class="breadcrumb-item px-3 text-muted">Cập nhật mã giảm giá</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                <form id="formRecruitment" action="{{route('admin.coupon.update',$coupon->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Mã code</label>
                                <input type="text" name="code" value="{{ $coupon->code }}"
                                       class=" form-control"
                                       placeholder="">
                                @error('code')
                                <p id="checkname" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Loại giảm giá</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="type">
                                    <option selected>Loại giảm giá</option>
                                    <option value="0" {{$coupon->type==0?"selected":""}}>Theo số tiền nhất định</option>
                                    <option value="1" {{$coupon->type==1?"selected":""}}>Theo phần trăm</option>
                                </select>
                                @error('type')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Số tiền giảm / Số phần trăm giảm </label>
                                <input min="0" type="number" name="value" value="{{ $coupon->value }}"
                                       class="form-control"
                                       placeholder="">
                                @error('value')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Số tiền giảm tối đa </label>
                                <input min="0" type="number" name="discount_max" value="{{ $coupon->discount_max }}"
                                       class="form-control"
                                       placeholder="">
                                @error('discount_max')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Số lượng </label>
                                <input min="0" type="number" name="quantity" value="{{ $coupon->quantity }}"
                                       class="form-control"
                                       placeholder="">
                                @error('quantity')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Mô tả mã giảm giá</label>
                                <textarea class="form-control" name="description"
                                          id="kt_docs_ckeditor_classic2"
                                          rows="3">{{ $coupon->description }}</textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Thời gian bắt đầu</label>
                                <input id="begin" max="" type="datetime-local" value="{{ $coupon->start_date }}"
                                       name="start_date" class="form-control " placeholder="">
                                @error('start_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="form-group mb-10">

                                <label class="form-label" for="">Thời gian kết thúc</label>
                                <input id="end" min="" type="datetime-local" name="end_date"
                                       value="{{ $coupon->end_date }}" class="form-control  " placeholder="Pick date rage" />
                                @error('end_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-10">
                                <label class="form-label" for="">Trạng thái</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="status">
                                    <option selected>Trạng thái</option>
                                    <option value="0" {{$coupon->type==0?"selected":""}}>Active</option>
                                    <option value="1" {{$coupon->type==1?"selected":""}}>Inactive</option>
                                </select>
                                @error('status')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

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

