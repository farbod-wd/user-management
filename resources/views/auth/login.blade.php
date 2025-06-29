@extends('layouts.app')
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <p class="mb-4">وارد شوید</p>
                        <form id="formAuthentication" class="mb-3" action="{{ route('signIn') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">ایمیل یا نام کاربری</label>
                                <input type="text" class="form-control text-start" dir="ltr" id="email"
                                    name="login" placeholder="ایمیل یا نام کاربری خود را وارد کنید" autofocus>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">رمز عبور</label>
                                    <a href="/">
                                        <small>رمز عبور را فراموش کردید؟</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control text-start" dir="ltr"
                                        name="password" placeholder="············" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me"> به خاطر سپاری </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">ورود</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>کاربر جدید هستید؟</span>
                            <a href="{{ route('register.index') }}">
                                <span>یک حساب بسازید</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
   Swal.fire({
            icon: 'error',
            title: 'همچین کاربری یافت نشد!',
            timer:1500,
        })
</script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'ثبت نام با موفقیت انجام شد',
            timer:1500,
        })
    </script>
@endsection
