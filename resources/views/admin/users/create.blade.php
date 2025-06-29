@extends('admin.layouts.main')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">افزودن کاربر</span>  
        </h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="username">نام کاربری</label>
                                <input type="text" class="form-control" id="username"
                                    placeholder="نام کاربری خود را وارد نمایید" name="username">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">ایمیل</label>
                                <div class="input-group input-group-merge">
                                    <input type="email" id="email" class="form-control text-start"
                                        dir="ltr"
                                        aria-describedby="email" name="email" placeholder="ایمیل خود را وارد نمایید">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password">رمز عبور</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control text-start"
                                        dir="ltr"
                                        aria-describedby="password" name="password" placeholder="رمز عبور خود را وارد نمایید">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">ثبت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
