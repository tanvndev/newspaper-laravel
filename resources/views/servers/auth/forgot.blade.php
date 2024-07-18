@extends('layouts.loginLayout')
@section('content')
<!-- main body area -->
<div class="main p-2 py-3 p-xl-5 ">

    <!-- Body: Body -->
    <div class="body d-flex p-0 p-xl-5">
        <div class="container-xxl">

            <div class="row g-0">
                <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                    <div style="max-width: 25rem;">
                        <div class="text-center mb-5">
                            <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                        </div>
                        <div class="mb-5">
                            <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                        </div>
                        <!-- Image block -->
                        <div class="">
                            <img src="assets/servers/images/login-img.svg" alt="login-img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                    <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                        <!-- Form -->
                        <form class="row g-1 p-3 p-md-4" method="POST" action="{{ route('auth.reset') }}">
                            @csrf
                            <div class="col-12 text-center mb-5">
                                <img src="assets/servers/images/forgot-password.svg" class="w240 mb-4" alt="" />
                                <h1>Quên mật khẩu?</h1>
                                <span>Nhập địa chỉ email bạn đã sử dụng khi tham gia và chúng tôi sẽ gửi cho bạn hướng
                                    dẫn để đặt lại mật khẩu.</span>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">Địa chỉ email</label>
                                    <input type="email"
                                        class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        name="email" placeholder="name@example.com">
                                    @error('email')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" title="Gửi ngay"
                                    class="btn btn-lg btn-block btn-light lift text-uppercase">Gửi ngay</button>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <span class="text-muted"><a href="{{ route('auth.login') }}" class="text-secondary">Quay
                                        lại đăng
                                        nhập</a></span>
                            </div>
                        </form>
                        <!-- End Form -->

                    </div>
                </div>
            </div> <!-- End Row -->

        </div>
    </div>

</div>
@endsection