<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;

class AboutContentController extends Controller
{
    public function index()
    {
        $records = PageContent::where('page', 'about')->get();

        $content = [];
        foreach ($records as $record) {
            $content[$record->section][$record->key] = $record;
        }

        return view('admin.contents.about', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile_slide_1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'profile_slide_2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'profile_slide_3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'area_1_image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'area_2_image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'area_3_image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'area_4_image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        // === Profile ===
        foreach (['label', 'title', 'paragraph_1', 'paragraph_2', 'sector_label',
                  'sector_1', 'sector_2', 'sector_3', 'sector_4', 'sector_5', 'sector_6',
                  'stat_1_title', 'stat_1_description', 'stat_2_title', 'stat_2_description'] as $key) {
            $this->saveText('profile', $key, $request->input('profile_' . $key));
        }
        $this->saveImage($request, 'profile_slide_1', 'profile', 'slide_1');
        $this->saveImage($request, 'profile_slide_2', 'profile', 'slide_2');
        $this->saveImage($request, 'profile_slide_3', 'profile', 'slide_3');

        // === Business Concept ===
        foreach (['label', 'title', 'paragraph_1', 'paragraph_2',
                  'card_1_title', 'card_1_description',
                  'card_2_title', 'card_2_description',
                  'card_3_title', 'card_3_description'] as $key) {
            $this->saveText('business_concept', $key, $request->input('business_' . $key));
        }

        // === Operational Area ===
        foreach (['label', 'title', 'description'] as $key) {
            $this->saveText('operational_area', $key, $request->input('area_' . $key));
        }
        foreach ([1, 2, 3, 4] as $i) {
            $this->saveText('operational_area', "area_{$i}_title",       $request->input("area_{$i}_title"));
            $this->saveText('operational_area', "area_{$i}_location",    $request->input("area_{$i}_location"));
            $this->saveText('operational_area', "area_{$i}_description", $request->input("area_{$i}_description"));
            $this->saveImage($request, "area_{$i}_image", 'operational_area', "area_{$i}_image");
        }

        // === Reason ===
        foreach (['label', 'title', 'description',
                  'problem_title', 'problem_description',
                  'problem_point_1', 'problem_point_2', 'problem_point_3', 'problem_point_4',
                  'solution_title', 'solution_description',
                  'solution_point_1', 'solution_point_2', 'solution_point_3', 'solution_point_4',
                  'cta_label', 'cta_title', 'cta_description',
                  'cta_button_text', 'cta_button_link'] as $key) {
            $this->saveText('reason', $key, $request->input('reason_' . $key));
        }

        return redirect()->back()->with('success', 'Konten halaman Tentang Kami berhasil diperbarui.');
    }

    private function saveText(string $section, string $key, ?string $value): void
    {
        PageContent::updateOrCreate(
            ['page' => 'about', 'section' => $section, 'key' => $key],
            ['type' => 'text', 'value' => $value, 'is_active' => true]
        );
    }

    private function saveImage(Request $request, string $inputName, string $section, string $key): void
    {
        if ($request->hasFile($inputName)) {
            $path = $request->file($inputName)->store('uploads/about', 'public');
            PageContent::updateOrCreate(
                ['page' => 'about', 'section' => $section, 'key' => $key],
                ['type' => 'image', 'image_path' => $path, 'is_active' => true]
            );
        }
    }
}
