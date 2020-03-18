@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Danh sách người dùng</h2>
        </div>
    </div>
@endsection
@section("main_content")
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Create at</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $c)
                <tr class="tr-shadow">
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->created_at}}</td>
                    <td>{{$c->role}}</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{url("admin/user/edit",['id'=>$c->id])}}"class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
            @empty
                <p>Không có danh mục nào</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
