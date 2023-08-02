@extends('admin.layouts.main')
@section('title','Thêm chi tiết sản phẩm')
@section('admin.content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <ol class="breadcrumb text-muted fs-6 fw-bold">
                <li class="breadcrumb-item pe-3">
                    <a href="{{route('admin.product.detail.show',['id'=>$productId])}}" class="pe-3">
                        Danh sách chi tiết sản phẩm
                    </a>
                </li>
                <li class="breadcrumb-item px-3 text-muted">Thêm mới thông tin chi tiết sản phẩm</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                <form id="formRecruitment" action="{{route('admin.product.detail.store',['id'=>$productId])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Tên sản phẩm</label>
                                <input type="button" name="" value="ABC"
                                       class="form-control text-start"
                                       placeholder="">
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Kích cỡ (size)</label>
                                <input type="text" name="size" value="{{ old('size') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('size')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Màu sắc (color)</label>
                                <input type="text" name="color" value="{{ old('color') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('color')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label class="form-label" for="">Số lượng (quantity)</label>
                                <input min="0" type="number" name="quantity" value="{{old('quantity') }}"
                                       class="form-control"
                                       placeholder="">
                                @error('quantity')
                                <p id="checkprice" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{--                            <div class="form-group mb-10">--}}
                            {{--                                <label class="form-label" for="">Danh mục</label>--}}
                            {{--                                <select placeholder="Chọn" multiple class="form-select mb-3 select2-hidden-accessible"--}}
                            {{--                                        data-control="select2" data-hide-search="false" tabindex="-1" aria-hidden="true"--}}
                            {{--                                        name="category_id[]" value="{{ serialize(old('category_id')) }}">--}}
                            {{--                                    @foreach ($categories as $item)--}}
                            {{--                                        <option value="{{ $item->id }} " {{$product->category_id==$item->id?'selected':''}}>--}}
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

