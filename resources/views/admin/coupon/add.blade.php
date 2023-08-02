@extends('admin.layouts.main')
@section('title','Thêm thể loại')
@section('admin.content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <ol class="breadcrumb text-muted fs-6 fw-bold">
                <li class="breadcrumb-item pe-3">
                    <a href="{{route('admin.coupon.show')}}" class="pe-3">
                        Danh sách mã giảm giá
                    </a>
                </li>
                <li class="breadcrumb-item px-3 text-muted">Thêm mới mã giảm giá</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                <form id="formRecruitment" action="{{route('admin.coupon.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Mã code</label>
                                <input type="text" name="code" value="{{ old('code') }}"
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
                                    <option value="0">Theo số tiền nhất định</option>
                                    <option value="1">Theo phần trăm</option>
                                </select>
                                @error('type')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Số tiền giảm / Số phần trăm giảm </label>
                                <input min="0" type="number" name="value" value="{{ old('value') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('value')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Số tiền giảm tối đa </label>
                                <input min="0" type="number" name="discount_max" value="{{ old('discount_max') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('discount_max')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Số lượng </label>
                                <input min="0" type="number" name="quantity" value="{{ old('quantity') }}"
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
                                          rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Thời gian bắt đầu</label>
                                <input id="begin" max="" type="datetime-local" value="{{ old('start_date') }}"
                                       name="start_date" class="form-control " placeholder="">
                                @error('start_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="form-group mb-10">

                                <label class="form-label" for="">Thời gian kết thúc</label>
                                <input id="end" min="" type="datetime-local" name="end_date"
                                       value="{{ old('end_date') }}" class="form-control  " placeholder="Pick date rage" />
                                @error('end_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-10">
                                <label class="form-label" for="">Trạng thái</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="status">
                                    <option selected>Trạng thái</option>
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                                @error('status')
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

