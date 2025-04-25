@extends('dashboard')

@section('content')
<div class="container mt-4">
    <h3>Danh sách đơn hàng của {{ $user->name }}</h3>

    @if($user->orders->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>
                                @if($order->products->count() > 0)
                                    <ul class="list-unstyled mb-0">
                                        @foreach($order->products as $product)
                                            <li>{{ $product->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="text-muted">Không có sản phẩm</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted">Người dùng chưa có đơn hàng nào.</p>
    @endif

    <a href="{{ route('user.list') }}" class="btn btn-secondary mt-3">← Quay lại</a>
</div>
@endsection
