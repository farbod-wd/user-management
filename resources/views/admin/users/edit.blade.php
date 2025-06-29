@extends('admin.layouts.main')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">ویرایش اطلاعات کاربر</span>  
        </h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{route('users.update' , $user->id)}}" method="POST">
                            @csrf
                           @method('PATCH') 
                            <div class="mb-3">
                                <label class="form-label" for="username">نام کاربری</label>
                                <input type="text" class="form-control" id="username"
                                    placeholder="نام کاربری خود را وارد نمایید" name="username" value="{{$user->username}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-email">ایمیل</label>
                                <div class="input-group input-group-merge">
                                    <input type="email" id="basic-default-email" class="form-control text-start"
                                        dir="ltr"
                                        aria-describedby="email" name="email" value="{{$user->email}}" placeholder="ایمیل خود را وارد نمایید">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">ویرایش</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
