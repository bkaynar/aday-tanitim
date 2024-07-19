<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle1' => 'required',
            'subtitle2' => 'nullable',
            'subtitle3' => 'nullable',
            'sirasi' => 'required|integer',
            'foto_yol' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
        ]);
        if ($request->hasFile('foto_yol')) {
            $image = $request->file('foto_yol');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images');

            // Klasör mevcut değilse oluştur
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // Dosyayı public/images klasörüne taşı
            $image->move($path, $filename);

            $storedPath = 'images/' . $filename;
        } else {
            $storedPath = null;
        }
        // Seçilen sirasi değerinin benzersiz olmasını sağla
        $selectedSirasi = $request->sirasi;
        $existingSlider = Slider::where('sirasi', $selectedSirasi)->first();

        if ($existingSlider) {
            // Eğer seçilen sirasi mevcutsa, diğer öğelerin sırasını kaydır
            Slider::where('sirasi', '>=', $selectedSirasi)
                ->increment('sirasi');
        }
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->subtitle1 = $request->subtitle1;
        $slider->subtitle2 = $request->subtitle2;
        $slider->subtitle3 = $request->subtitle3;
        $slider->sirasi = $selectedSirasi;
        $slider->foto_yol = $storedPath;
        $slider->save();
        return response()->json(['success' => true, 'message' => 'Slider başarıyla eklendi.']);

    }
    public function index()
    {
        $sliderlar=Slider::orderBy('sirasi', 'ASC')->where('silindi', 0)->get();
        return view('slider.index', compact('sliderlar'));
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('slider.edit', compact('slider'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subtitle1' => 'required',
            'subtitle2' => 'nullable',
            'subtitle3' => 'nullable',
            'sirasi' => 'required|integer',
            'foto_yol' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
        ]);

        $slider = Slider::find($id);
        if (!$slider) {
            return response()->json(['success' => false, 'message' => 'Slider bulunamadı.'], 404);
        }

        $selectedSirasi = $request->sirasi;

        // Eğer slider sırası değiştiriliyorsa
        if ($slider->sirasi != $selectedSirasi) {
            // Önce mevcut slider'ın sırasını geçici değere ayarla
            $tempSirasi = Slider::max('sirasi') + 1;
            $slider->sirasi = $tempSirasi;
            $slider->save();

            // Seçilen sirasi değerini kaydır
            Slider::where('sirasi', '>=', $selectedSirasi)
                ->increment('sirasi');

            // Geçici değer olan slider'ın sirasi değerini güncelle
            $slider->sirasi = $selectedSirasi;
        }

        $slider->title = $request->title;
        $slider->subtitle1 = $request->subtitle1;
        $slider->subtitle2 = $request->subtitle2;
        $slider->subtitle3 = $request->subtitle3;

        if ($request->hasFile('foto_yol')) {
            $image = $request->file('foto_yol');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images');

            // Klasör mevcut değilse oluştur
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // Dosyayı public/images klasörüne taşı
            $image->move($path, $filename);

            $storedPath = 'images/' . $filename;
            $slider->foto_yol = $storedPath;
        }

        $slider->save();
        return response()->json(['success' => true, 'message' => 'Slider başarıyla güncellendi.']);
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if ($slider) {
            $slider->silindi = 1;
            $slider->save();
            return response()->json(['success' => true, 'message' => 'Slider başarıyla silindi.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Slider bulunamadı.'], 404);
        }
    }
}
