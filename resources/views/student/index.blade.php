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
<div class="col-md-12">
    <div class="overview-wrap">
        <h2 class="title-1">Danh sách học sinh</h2>
        <a class="au-btn au-btn-icon au-btn--blue" href="{{url('student/create')}}">
            <i class="zmdi zmdi-plus"></i>Thêm học sinh</a>
    </div>
</div>
<div class="example">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>age</th>
                    <th>address</th>
                    <th>telephone</th>
                </tr>
                </thead>
                <tbody>
                @forelse($student as $c)
                    <tr class="tr-shadow">
                        <td>{{$c->id}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->age}}</td>
                        <td>{{$c->address}}</td>
                        <td>{{$c->telephone}}</td>
                        <td>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                @empty
                    <p>Không có danh mục nào</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
