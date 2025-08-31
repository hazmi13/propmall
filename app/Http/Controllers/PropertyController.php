<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Location;
use App\Models\PropertyPrice;
use App\Models\PropertyPhoto;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $query = Property::with(['location', 'price', 'photos']);
    
        if ($request->filled('location')) {
            $query->whereHas('location', function ($q) use ($request) {
                $q->where('location_name', $request->location);
            });
        }
    
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('property_title', 'like', "%$search%")
                  ->orWhere('property_description', 'like', "%$search%");
            });
        }
    
        if ($request->filled('year') && $request->year != 'all') {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
            
        $query->whereHas('price', function ($q) use ($year) {
            $q->where('price_year', $year);
        });
        
        return response()->json($query->get());
    }

    public function show($id)
    {
        $property = Property::with(['location', 'price', 'photos'])->findOrFail($id);
        return response()->json($property);
    }

    public function store(Request $request)
    {
        $property = Property::create($request->only([
            'property_title',
            'property_description',
            'property_location_id',
            'property_built_size',
            'property_land_size',
            'property_room',
            'property_bathroom',
            'property_date'
        ]));

        if ($request->price) {
            foreach ($request->input('price') as $p) {
                $property->price()->create([
                    'price_year' => $p['price_year'],
                    'price_amount' => $p['price_amount']
                ]);
            }
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $index => $photo) {
                $filename = time() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('uploads'), $filename);

                $property->photos()->create([
                    'photo_file_name' => $filename,
                    'photo_cover' => $index == 0 ? 'YES' : 'NO'
                ]);
            }
        }

        return response()->json($property->load('location', 'price', 'photos'), 201);
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $property->update($request->only([
            'property_title',
            'property_description',
            'property_location_id',
            'property_built_size',
            'property_land_size',
            'property_room',
            'property_bathroom',
            'property_date'
        ]));

        if ($request->has('price')) {
            PropertyPrice::where('property_id', $property->property_id)->delete();
            foreach ($request->input('price') as $p) {
                $property->price()->create([
                    'price_year' => $p['price_year'],
                    'price_amount' => $p['price_amount']
                ]);
            }
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $index => $photo) {
                $filename = time() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('uploads'), $filename);

                $property->photos()->create([
                    'photo_file_name' => $filename,
                    'photo_cover' => $index == 0 ? 'YES' : 'NO'
                ]);
            }
        }

        return response()->json($property->load('location', 'price', 'photos'));
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        PropertyPrice::where('property_id', $property->property_id)->delete();
        PropertyPhoto::where('property_id', $property->property_id)->delete();

        $property->delete();

        return response()->json(['message' => 'Property deleted successfully']);
    }
}
