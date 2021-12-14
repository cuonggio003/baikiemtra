@extends('home')
@section('content')
    <div class="main-container">
        <form>
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Mã nhân viên</label>
                    <input type="number" value="{{ $hotel->id }}" class="form-control">

                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="text-warning">Số điện thoại</label>
                    <textarea type="number" value="{{ $hotel->phone }}"
                        class="form-control @error('phone') is-invalid  @enderror" id="phone" name="phone"></textarea>
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Chọn nhóm nhân viên</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="group"
                        value="{{ $hotel->group }}">
                        <option>Quản trị hệ thống</option>
                        <option>Quản lí nhân sự</option>
                        <option>Lễ Tân</option>
                        <option>Quản lí Phòng</option>
                        <option>Quản lí dịch vụ</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="text-warning">Số CMND</label>
                    <textarea type="text" value="{{ $hotel->pepple_id }}" class="form-control"
                        name="people_id"></textarea>
                    @error('people_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Họ tên</label>
                    <textarea type="text" value="{{ $hotel->name}}" class="form-control"
                        name="name"></textarea>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Email</label>
                    <textarea type="text" value="{{ $hotel->email }}" class="form-control"
                        name="email"></textarea>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date" class="text-warning">Ngày sinh</label>
                    <input type="date" class="form-control" name="birthday" id="date" value="{{ $hotel->birthday }}">
                    @error('birthday')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="text-warning"> Địa chỉ</label>
                    <textarea type="text" value="{{ $hotel->address }}" class="form-control"
                        name="address"></textarea>
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="{{ $hotel->sex }}" >
                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="{{ $hotel->sex }}">
                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>


    </div>
@endsection
