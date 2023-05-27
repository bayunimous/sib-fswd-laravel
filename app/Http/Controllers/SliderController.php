<?php

// app/Http/Controllers/SliderController.php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('path-to-save');
        $slider = Slider::create([
            'title' => $request->input('title'),
            'image' => $imagePath,
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully');
    }

    public function edit(Slider $slider)
    {
        return view('sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/slider_images');
            $slider->image = $imagePath;
        }

        $slider->title = $request->input('title');
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully');
    }
}
