@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Sản phẩm</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="{{url('admin/product/create')}}">
                <i class="zmdi zmdi-plus"></i>Thêm sản phẩm</a>
        </div>
    </div>
@endsection
@section("main_content")
    <div class="table-responsive table-responsive-data2">
        <table class="table table-responsive  table-hover" >
            <thead>
            <tr>
                <th>ID</th>
                <th>product_name</th>
                <th>product_desc</th>
                <th>thumnail</th>
                <th>gallery</th>
                <th>category_id</th>
                <th>brand_id</th>
                <th>price</th>
                <th>quantity</th>
                <th>create_at</th>
                <th>update_at</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $p)
                <tr class="tr-shadow">
                    <td>{{$p->id}}</td>
                    <td>{{$p->product_name}}</td>
                    <td>{{$p->product_desc}}</td>
                    <td>{{$p->thumnail}}</td>
                    <td>{{$p->gallery}}</td>
                    <td>{{$p->category_id}}</td>
                    <td>{{$p->brand_id}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->quantity}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->updated_at}}</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{url("admin/product/edit",['id'=>$p->id])}}"class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
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
