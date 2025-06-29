@extends('admin.layouts.main')
@section('content')
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">لیست کاربران</h5>
            <div class="text-center mt-4 me-3">
                <a href="{{ route('users.create') }}" target="_blank" class="btn btn-primary">افزودن کاربر جدید</a>
            </div>
        </div>
        @if (Illuminate\Support\Facades\Session::has('info'))
            <div class="alert alert-info">{{ session('info') }}</div>
        @elseif (Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>نام کاربری</th>
                        <th>ایمیل</th>
                        <th>عمل‌ها</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $count++ }}
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            ویرایش</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="sumit"><i class="bx bx-trash me-1"></i>
                                                حذف</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="text-center mx-4">
                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection
