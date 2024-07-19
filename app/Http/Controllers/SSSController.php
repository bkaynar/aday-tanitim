<?php

namespace App\Http\Controllers;

use App\Models\SSS;
use Illuminate\Http\Request;

class SSSController extends Controller
{
    public function index()
    {
        $sorular = SSS::orderBy('sirasi', 'ASC')->where('silindi', 0)->get();
        return view('sss.index', compact('sorular'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'soru' => 'required',
            'cevap' => 'required',
            'sirasi' => 'required|integer',
        ]);
        $sss = new SSS();
        $sss->soru = $request->soru;
        $sss->cevap = $request->cevap;
        $sss->sirasi = $request->sirasi;
        $sss->save();
        return response()->json(['success' => true, 'message' => 'SSS başarıyla eklendi.']);
    }

    public function edit($id)
    {
        $sss = SSS::find($id);
        return view('sss.edit', compact('sss'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'soru' => 'required',
            'cevap' => 'required',
            'sirasi' => 'required|integer',
        ]);
        $sss = SSS::find($id);
        $sss->soru = $request->soru;
        $sss->cevap = $request->cevap;
        $sss->sirasi = $request->sirasi;
        $sss->save();
        return response()->json(['success' => true, 'message' => 'SSS başarıyla güncellendi.']);
    }

    public function destroy($id)
    {
        $soru = SSS::findOrFail($id);
        $soru->delete();

        return response()->json(['success' => 'Soru silindi']);
    }
}
