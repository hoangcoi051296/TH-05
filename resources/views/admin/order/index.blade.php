@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Sản phẩm</h2>
        </div>
    </div>
@endsection
@section("main_content")
    <div class="table-responsive table-responsive-data2">
        <table class="table table-responsive  table-hover" >
            <thead>
            <tr>
                <th>Order ID</th>
                <th>User_ID</th>
                <th>Customer_name</th>
                <th>Shipping address</th>
                <th>Telephone</th>
                <th>Payment_method</th>
                <th>Grand_total</th>
                <th>Create_at</th>
            </tr>
            </thead>
            <tbody>
            @forelse($order as $p)
                <tr class="tr-shadow">
                    <td>{{$p->id}}</td>
                    <td>{{$p->user_id}}</td>
                    <td>{{$p->customer_name}}</td>
                    <td>{{$p->shipping_address}}</td>
                    <td>{{$p->telephone}}</td>
                    <td>{{$p->payment_method}}</td>
                    <td>{{$p->grand_total}}</td>
                    <td>{{$p->created_at}}</td>
                </tr>
                <tr class="spacer"></tr>
            @empty
                <p>Không có đơn hàng nào</p>
            @endforelse
            </tbody>
        </table>
        <div class="product_pagination">
            {!! $order->links() !!}
        </div>
    </div>
@endsection
