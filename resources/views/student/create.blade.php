<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách học sinh</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 20px;
        }
    </style>
</head>
<body>
<div class="example">
    <div class="container">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{url("student/add")}}" method="post">
                            @csrf
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Tên </label>
                                <input id="cc-name" name="name" type="text" value="{{old("name")}}"
                                       class="form-control cc-name @if($errors->has("name"))is-invalid @endif" >
                                <span class="help-block field-validation-valid"></span>
                                @if($errors->has("name"))
                                    <p style="color:red">{{$errors->first("name")}}</p>
                                @endif
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Tuổi </label>
                                <input id="cc-name" name="age" type="text" value="{{old("age")}}"
                                       class="form-control cc-name @if($errors->has("age"))is-invalid @endif" >
                                <span class="help-block field-validation-valid"></span>
                                @if($errors->has("age"))
                                    <p style="color:red">{{$errors->first("age")}}</p>
                                @endif
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Địa chỉ </label>
                                <input id="cc-name" name="address" type="text" value="{{old("address")}}"
                                       class="form-control cc-name @if($errors->has("address"))is-invalid @endif" >
                                <span class="help-block field-validation-valid"></span>
                                @if($errors->has("address"))
                                    <p style="color:red">{{$errors->first("address")}}</p>
                                @endif
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Số điện thoại </label>
                                <input id="cc-name" name="telephone" type="text" value="{{old("telephone")}}"
                                       class="form-control cc-name @if($errors->has("telephone"))is-invalid @endif" >
                                <span class="help-block field-validation-valid"></span>
                                @if($errors->has("telephone"))
                                    <p style="color:red">{{$errors->first("telephone")}}</p>
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
    </div>

</div>
</body>
</html>
