@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Thương hiệu sản phẩm</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="{{url('admin/brand/create')}}">
                <i class="zmdi zmdi-plus"></i>Thêm thương hiệu</a>
        </div>
    </div>
@endsection
@section("main_content")
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>created at</th>
                <th>updated at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($brand as $c)
                <tr class="tr-shadow">
                    <td>{{$c->id}}</td>
                    <td>{{$c->brand_name}}</td>
                    <td>{{$c->created_at}}</td>
                    <td>{{$c->updated_at}}</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{url("admin/brand/edit",['id'=>$c->id])}}"class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
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
