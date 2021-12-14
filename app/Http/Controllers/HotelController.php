<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\CreateHotelRequest;

class HotelController extends Controller
{
    function showHotel()
    {
        $hotels = Hotel::all();
        return view('hotels.list', compact('hotels'));
    }

    function createHotel()
    {
        $hotels = Hotel::all();
        return view('hotels.create', compact('hotels'));
    }


    function store(CreateHotelRequest $request)
    {   
    
        $hotel = new Hotel();
       
        $hotel->group = $request->group;
        $hotel->name = $request->name;
        $hotel->birthday = $request->birthday;
        $hotel->sex = $request->sex;
        $hotel->phone = $request->phone;
        $hotel->people_id = $request->people_id;
        $hotel->email = $request->email;
        $hotel->address = $request->address;
        $hotel->save();
        toastr()->success('Thêm mới thành công');
        return redirect()->route('show.hotel');
    }

    function updateHotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotels.update', compact('hotel'));
       
    }

    function editHotel(Request $request, $id) {
        $hotel = Hotel::findOrFail($id);
        $hotel->group = $request->group;
        $hotel->name = $request->name;
        $hotel->birthday = $request->birthday;
        $hotel->sex = $request->sex;
        $hotel->phone = $request->phone;
        $hotel->people_id = $request->people_id;
        $hotel->email = $request->email;
        $hotel->address = $request->address;
        $hotel->save();
        toastr()->success(' sửa thành công');
        return redirect()->route('show.hotel');
    }

    function deleteHotel(Request $request, $id){
        
        $hotel = Hotel::findOrFail($id);
       
        $hotel->delete();
        toastr()->success(' xóa thành công');
        return redirect()->route('show.hotel');

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $hotelResult = Hotel::query()
            ->where('name', 'LIKE', "%{$keyword}%")
            ->get();
        return view('hotels.search', compact('hotelResult'));
    }
}
