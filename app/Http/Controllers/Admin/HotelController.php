<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HotelFormRequest;
use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('admin.hotels.index', [
            'hotels' => Hotels::orderBy('created_at', 'desc')->paginate(2)
    ]);
    }
    public function create()
    {
        $hotel = new Hotels();
        $hotel->fill([
            'address' => "123 Main St",
            'city' => "Cityville",
            'phone' => "123-456-789",
        ]);
        return view('admin.hotels.form', [
            'hotel' => $hotel
        ]);
    }

    public function store(HotelFormRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('hotels', 'public');

        }

        $hotel = Hotels::create($data);

        return redirect()->route('admin.hotel.index')->with('success', "L'hôtel a bien été créé");
    }

    public function edit(Hotels $hotel)
    {
        return view('admin.hotels.form', [
            'hotel' => $hotel
        ]);
    }

    public function update(HotelFormRequest $request, Hotels $hotel)
    {
        $data = $request->validated();
        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('hotels', 'public');

        }

        $hotel->update($data);

        return redirect()->route('admin.hotel.index')->with('success', "L'hôtel a bien été modifié");
    }

    public function destroy(Hotels $hotel)
    {
        $hotel->delete();
        return redirect()->route('admin.hotel.index')->with('success', "L'hôtel a bien été supprimé");
    }
}


