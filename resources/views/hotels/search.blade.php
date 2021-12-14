@extends('home')
@section('content')
    <div class="main-container">
        <div class="form-group">
            <form action="{{ route('search.hotel') }}" method="GET">
                <input class="form-control" type="text" name="keyword">
               
            </form>
        </div>
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="card mt-2">
                <a class="card-header" href="{{ route('show.hotel') }}">Trang chủ
                    
                </a>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã nhân viên</th>
                            <th>Nhóm nhân viên</th>
                            <th>Họ tên</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            <th>Số CMND</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Chức năng</th>
                        </tr>
                        @forelse($hotelResult as $key => $hotel)
                            <tr id="hotel-item-{{ $hotel->id }}">
                                <td>{{ $hotel->id }}</td>
                                <td>{{ $hotel->group }}</td>
                                <td>{{ $hotel->name }}</td>
                                <td>{{ $hotel->sex }}</td>
                                <td>{{ $hotel->phone }}</td>
                                <td>{{ $hotel->people_id }}</td>
                                <td>{{ $hotel->email }}</td>
                                <td>{{ $hotel->address }}</td>
                                <td>
                                    <a class="btn btn-outline-primary" href="{{ route('update.hotel', $hotel->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-pen" viewBox="0 0 16 16">
                                            <path
                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="btn btn-outline-danger" onclick="alert('Chắc chắn muốn xóa')"
                                        href=" {{ route('delete.hotel', $hotel->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5 ">No data</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
