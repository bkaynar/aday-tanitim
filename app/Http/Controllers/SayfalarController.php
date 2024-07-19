<?php

namespace App\Http\Controllers;

use App\Models\Sayfalalar;
use Illuminate\Http\Request;

class SayfalarController extends Controller
{
    public function index()
    {
        $sayfalar = Sayfalalar::orderBy('created_at', 'desc')->where('silindi', 0)->get();
        return view('sayfalar.index', compact('sayfalar'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'baslik' => 'required',
                'icerik' => 'required',
                'anasayfa' => 'required',
                'sirasi' => 'nullable',
                'foto_yol' => 'required|image',
            ]
        );

        if ($request->hasFile('foto_yol')) {
            $image = $request->file('foto_yol');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $image->move($path, $filename);
            $storedPath = 'images/' . $filename;
        } else {
            $storedPath = null;
        }
        $sayfa = new Sayfalalar();
        $sayfa->baslik = $request->baslik;
        $sayfa->icerik = $request->icerik;
        $sayfa->sirasi = $request->sirasi;
        $sayfa->anasayfa = $request->anasayfa;
        $sayfa->foto_yol = $storedPath;
        $sayfa->save();

        return response()->json(['success' => true, 'message' => 'Sayfa başarıyla eklendi.']);
    }

    public function edit($id)
    {
        $sayfa = Sayfalalar::find($id);
        return view('sayfalar.edit', compact('sayfa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'baslik' => 'required',
                'icerik' => 'required',
                'sirasi' => 'nullable', // 'nullable' eklendi
                'anasayfa' => 'required',
                'foto_yol' => 'nullable|image',
            ]
        );

        $sayfa = Sayfalalar::find($id);
        $sayfa->baslik = $request->baslik;
        $sayfa->icerik = $request->icerik;
        $sayfa->anasayfa = $request->anasayfa;
        $sayfa->sirasi = $request->sirasi;
        if ($request->hasFile('foto_yol')) {
            $image = $request->file('foto_yol');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $image->move($path, $filename);
            $storedPath = 'images/' . $filename;
            $sayfa->foto_yol = $storedPath;
        }
        $sayfa->save();
        return response()->json(['success' => true, 'message' => 'Sayfa başarıyla güncellendi.']);
    }

    public function show($slug)
    {
        $sayfa = Sayfalalar::where('slug', $slug)->firstOrFail();
        return view('analayout.sayfa', compact('sayfa'));
    }

    public function destroy($id)
    {
        $slider = Sayfalalar::find($id);
        $slider->silindi = 1;
        $slider->save();
        return response()->json(['success' => true, 'message' => 'Slider başarıyla silindi.']);
    }
}
