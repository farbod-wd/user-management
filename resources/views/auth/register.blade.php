@extends('layouts.app')

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">ماجراجویی اینجا شروع می‌شود</h4>
                        <p class="mb-4">مدیریت برنامه خود را آسان و جذاب کنید!</p>

                        <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">نام کاربری</label>
                                <input type="text" class="form-control text-start" dir="ltr" id="username"
                                    name="username" placeholder="نام کاربری خود را وارد کنید" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">ایمیل</label>
                                <input type="email" class="form-control text-start" dir="ltr" id="email"
                                    name="email" placeholder="ایمیل خود را وارد کنید">
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">رمز عبور</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control text-start" dir="ltr"
                                        name="password" placeholder="············" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                                    <label class="form-check-label" for="terms-conditions">
                                        من موافقم با
                                        <a href="javascript:void(0);">سیاست حریم خصوصی و قوانین</a>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">عضویت</button>
                        </form>

                        <p class="text-center">
                            <span>حساب کاربری دارید؟</span>
                            <a href="/">
                                <span>وارد شوید</span>
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        @endsection
