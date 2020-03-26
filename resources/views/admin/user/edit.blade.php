@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Edit Users</h2>
        </div>
    </div>
@endsection
@section('main_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <form action="{{url("admin/user/update",['id'=>$users->id])}}" method="post">
                        @csrf
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Tên người dùng</label>
                            <input id="cc-name" name="name" type="text" value="{{$users->name}}"
                                   class="form-control cc-name @if($errors->has("name"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("name"))
                                <p style="color:red">{{$errors->first("name")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Email</label>
                            <input id="cc-name" name="email" type="text" value="{{$users->email}}"
                                   class="form-control cc-name @if($errors->has("email"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("email"))
                                <p style="color:red">{{$errors->first("email")}}</p>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Role</label>
                            <input id="cc-name" name="role" type="text" value="{{$users->role}}"
                                   class="form-control cc-name @if($errors->has("role"))is-invalid @endif" >
                            <span class="help-block field-validation-valid"></span>
                            @if($errors->has("role"))
                                <p style="color:red">{{$errors->first("role")}}</p>
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
