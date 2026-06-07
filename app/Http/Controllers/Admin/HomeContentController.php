<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function index()
    {
        $records = PageContent::where('page', 'home')->get();

        $content = [];
        foreach ($records as $record) {
            $content[$record->section][$record->key] = $record;
        }

        return view('admin.contents.home', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'about_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $textFields = [
            'hero' => [
                'label', 'title', 'description',
                'primary_button_text', 'primary_button_link',
                'secondary_button_text', 'secondary_button_link',
            ],
            'about_short' => ['label', 'title', 'description'],
            'products'    => ['label', 'title', 'description'],
            'advantages'  => ['label', 'title', 'description'],
        ];

        foreach ($textFields as $section => $keys) {
            foreach ($keys as $key) {
                $fieldName = $section . '_' . $key;
                PageContent::updateOrCreate(
                    ['page' => 'home', 'section' => $section, 'key' => $key],
                    ['type' => 'text', 'value' => $request->input($fieldName, ''), 'is_active' => true]
                );
            }
        }

        $imageFields = [
            ['field' => 'hero_image',  'section' => 'hero',        'key' => 'image'],
            ['field' => 'about_image', 'section' => 'about_short', 'key' => 'image'],
        ];

        foreach ($imageFields as $img) {
            if ($request->hasFile($img['field'])) {
                $path = $request->file($img['field'])->store('uploads/home', 'public');
                PageContent::updateOrCreate(
                    ['page' => 'home', 'section' => $img['section'], 'key' => $img['key']],
                    ['type' => 'image', 'image_path' => $path, 'is_active' => true]
                );
            }
        }

        return redirect()->back()->with('success', 'Konten halaman Beranda berhasil diperbarui.');
    }
}
