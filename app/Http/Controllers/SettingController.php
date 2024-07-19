<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'youtube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'logo' => 'nullable|file|image|max:2048',
            'favicon' => 'nullable|file|image|max:2048',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        $settings = Setting::first() ?? new Setting();

        $settings->fill($validatedData);

        if ($request->hasFile('logo')) {
            $settings->logo = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('favicon')) {
            $settings->favicon = $request->file('favicon')->store('favicons', 'public');
        }

        $settings->save();

        return response()->json([
            'success' => true,
            'message' => 'Genel bilgi başarıyla kaydedildi.',
        ]);
    }

    public function edit()
    {
        $settings = Setting::first();
        return view('genelbilgiler.createOredit', compact('settings'));
    }
}
