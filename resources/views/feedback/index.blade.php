<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 25px;
        }
    </style>
</head>
<body>
<div class="example">
    <div class="container">
        <form class="form-group" action="#" method="post">
            @csrf
            <label for="email">Name:</label>
            <input type="text" class="form-control" placeholder="Enter email" id="name" name="name">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
            <label for="pwd">Telephone:</label>
            <input type="text" class="form-control" placeholder="Enter telephone" id="telephone" name="telephone">
            <label for="pwd">Feedback:</label>
            <input type="text" class="form-control" placeholder="Enter feedback" id="feedback" name="feedback">
            <button id="loginBtn" type="button" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

</body>
<script type="text/javascript">
    $("#loginBtn").bind("click",function () {
        $.ajax({
            url: "{{url("postFeedback")}}",
            method: "POST",
            data: {
                _token: $("input[name=_token]").val(),
                name: $("input[name=name]").val(),
                email: $("input[name=email]").val(),
                telephone: $("input[name=telephone]").val(),
                feedback: $("input[name=feedback]").val()

            },
            success: function (res) {
                if(res.status){
                    location.reload();
                }else{
                    alert(res.message);
                }
            }
        });
    });
</script>
</html>
