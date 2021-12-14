@extends('home')
@section('content')
    <div class="main-container">
        <section class="get-in-touch">
            <h1 class="text-success">Thêm mới </h1>
            <form method="post" action="{{ route('store.hotel') }}" enctype="multipart/form-data" required>
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Mã nhân viên</label>
                        <input type="number" class="form-control" id="input" name="id">
                        @error('id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="text-warning">Số điện thoại</label>
                        <input type="text" class="form-control" id="inputPassword4" name="phone">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Chọn nhóm nhân viên</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="group">
                            <option>Quản trị hệ thống</option>
                            <option>Quản lí nhân sự</option>
                            <option>Lễ Tân</option>
                            <option>Quản lí Phòng</option>
                            <option>Quản lí dịch vụ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="text-warning">Số CMND</label>
                        <input type="number" class="form-control" id="inputPassword4" name="people_id">
                        @error('people_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Họ tên</label>
                        <input type="text" class="form-control" id="" name="name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Email</label>
                        <input type="email" class="form-control" id="inputPassword4" name="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date" class="text-warning">Ngày sinh</label>
                        <input type="date" class="form-control" id="date" name="birthday">
                        @error('birthday')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="text-warning"> Địa chỉ</label>
                        <input type="text" class="form-control" id="inputPassword4" name="address">
                        @error('address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Nam">
                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Nữ">
                        <label class="form-check-label" for="inlineRadio2">Nữ</label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Lưu</button>
                <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </section>

    </div>

@endsection
