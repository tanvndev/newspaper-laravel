@extends('layouts.loginLayout')
@section('content')
<div id="ebazar-layout" class="theme-blue">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">

        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div
                        class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">Chỉ cần một vài cú nhấp chuột.</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="assets/servers/images/login-img.svg" alt="login-img">
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4" method="POST" action="{{ route('auth.store') }}">
                                @csrf
                                <div class="col-12 text-center mb-5">
                                    <h1>Tạo tài khoản của bạn</h1>
                                    <span>Truy cập miễn phí vào bảng điều khiển của chúng tôi.</span>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Họ và tên</label>
                                        <input type="text"
                                            class="form-control form-control-lg {{ $errors->has('fullname') ? 'is-invalid' : '' }}"
                                            name='fullname' placeholder="John">
                                        @error('fullname')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Địa chỉ email</label>
                                        <input type="email"
                                            class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            placeholder="name@example.com" name='email'>
                                        @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            placeholder="8+ characters required" name='password'>
                                        @error('password')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Tôi chấp nhận các <a href="#" title="điều khoản và điều kiện"
                                                class="text-secondary">điều khoản và điều kiện</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase"
                                        alt="SIGNUP">Đăng ký
                                        ngay</button>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span>Bạn đã có tài khoản? <a href="{{ route('auth.login') }}" title="Đăng nhập"
                                            class="text-secondary">Đăng nhập ở đây</a></span>
                                </div>
                            </form>
                            <!-- End Form -->

                        </div>
                    </div>
                </div> <!-- End Row -->

            </div>
        </div>

    </div>

</div>
@endsection