@extends('layouts.loginLayout')
@section('content')
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
						<form class="row g-1 p-3 p-md-4" method="POST" action="{{ route('auth.login') }}">
							@csrf
							<div class="col-12 text-center mb-5">
								<h1>Đăng nhập</h1>
								<span>Truy cập miễn phí vào bảng điều khiển của chúng tôi.</span>
							</div>
							<div class="col-12 text-center mb-4">
								<div>
									<a class="btn btn-lg btn-light btn-block mb-2" href="{{ route('auth.google') }}">
										<span class="d-flex justify-content-center align-items-center">
											<img class="avatar xs me-2" src="assets/servers/images/google.svg"
												alt="Image Description">
											Đăng nhập bằng Google
										</span>
									</a>
									<a class="btn btn-lg btn-light btn-block" href="{{ route('auth.google') }}">
										<span class="d-flex justify-content-center align-items-center">
											<img class="avatar xs me-2" src="assets/servers/images/icons8-facebook.svg"
												alt="Image Description">
											Đăng nhập bằng Facebook
										</span>
									</a>
								</div>
								<span class="dividers text-muted mt-4">OR</span>
							</div>
							<div class="col-12">
								<div class="mb-2">
									<label class="form-label">Địa chỉ email</label>
									<input type="email" name="email" value="{{ old('email') }}"
										class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}"
										placeholder="name@example.com">
									@error('email')
									<div class="invalid-feedback">{{$message}}</div>
									@enderror
								</div>
							</div>
							<div class="col-12">
								<div class="mb-2">
									<div class="form-label">
										<span class="d-flex justify-content-between align-items-center">
											Mật khẩu
											<a class="text-secondary" href="{{ route('auth.forgot') }}">Quên mật
												khẩu?</a>
										</span>
									</div>
									<input type="password" name="password" value="{{ old('password') }}"
										class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}"
										placeholder="***************">
									@error('password')
									<div class="invalid-feedback">{{$message}}</div>
									@enderror
								</div>
							</div>

							<div class="col-12 text-center mt-4">
								<button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase"
									atl="signin">Đăng nhập</a>
							</div>
							<div class="col-12 text-center mt-4">
								<span>Bạn chưa có tài khoản? <a href="{{ route('auth.signup') }}"
										class="text-secondary">Đăng ký
										tại đây</a>
								</span>
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