@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Thêm sản phẩm</h2>
        </div>
    </div>
@endsection
@section('main_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <form action="{{url("admin/product/store")}}" method="post">
                        @csrf
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Tên sản phẩm</label>
                            <input id="cc-name" name="product_name" type="text" value="{{old("product_name")}}"
                                   class="form-control cc-name @if($errors->has("product_name"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("product_name"))
                                <p style="color:red">{{$errors->first("product_name")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Thông tin sản phẩm</label>
                            <input id="cc-name" name="product_desc" type="text" value="{{old("product_desc")}}"
                                   class="form-control cc-name @if($errors->has("product_desc"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("product_desc"))
                                <p style="color:red">{{$errors->first("product_desc")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Thumnail</label>
                            <input id="cc-name" name="thumnail" type="text" value="{{old("thumnail")}}"
                                   class="form-control cc-name @if($errors->has("thumnail"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("thumnail"))
                                <p style="color:red">{{$errors->first("thumnail")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Gallery</label>
                            <input id="cc-name" name="gallery" type="text" value="{{old("gallery")}}"
                                   class="form-control cc-name @if($errors->has("gallery"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("gallery"))
                                <p style="color:red">{{$errors->first("gallery")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Danh mục</label>
                            <input id="cc-name" name="category_id" type="text" value="{{old("category_id")}}"
                                   class="form-control cc-name @if($errors->has("category_id"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("category_id"))
                                <p style="color:red">{{$errors->first("category_id")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Thương hiệu</label>
                            <input id="cc-name" name="brand_id" type="text" value="{{old("brand_id")}}"
                                   class="form-control cc-name @if($errors->has("brand_id"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("brand_id"))
                                <p style="color:red">{{$errors->first("brand_id")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Giá</label>
                            <input id="cc-name" name="price" type="text" value="{{old("price")}}"
                                   class="form-control cc-name @if($errors->has("product_desc"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("price"))
                                <p style="color:red">{{$errors->first("price")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Số lượng</label>
                            <input id="cc-name" name="quantity" type="text" value="{{old("quantity")}}"
                                   class="form-control cc-name @if($errors->has("quantity"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("quantity"))
                                <p style="color:red">{{$errors->first("quantity")}}</p>
                            @endif
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Gửi đi</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
