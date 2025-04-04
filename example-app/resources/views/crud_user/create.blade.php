@extends('dashboard')

@section('content')

    <main class="signup-form d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow rounded-3 p-4" style="width: 600px;">
            <h3 class="text-center fw-bold">Đăng ký tài khoản</h3>
            <div class="card-body">
                <form action="{{ route('user.postUser') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Họ và tên</label>
                        <input type="text" id="name" class="form-control form-control-lg" name="name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" id="email_address" class="form-control form-control-lg" name="email" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mật khẩu</label>
                        <input type="password" id="password" class="form-control form-control-lg" name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Tạo tài khoản</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none text-primary">Quay lại đăng nhập</a>
                </div>
            </div>
        </div>
    </main>

    <div class="card-header text-center mt-3 text-muted fs-6">
        Lập trình web @012024
    </div>
@endsection
