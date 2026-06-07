<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;

class ProductsServicesContentController extends Controller
{
    public function index()
    {
        $records = PageContent::where('page', 'products_services')->get();

        $content = [];
        foreach ($records as $record) {
            $content[$record->section][$record->key] = $record;
        }

        return view('admin.contents.products-services', compact('content'));
    }

    public function update(Request $request)
    {
        $imageRules = 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096';

        $request->validate([
            'villa_main_image'     => $imageRules,
            'villa_image_1'        => $imageRules,
            'villa_image_2'        => $imageRules,
            'villa_image_3'        => $imageRules,
            'hotel_main_image'     => $imageRules,
            'hotel_image_1'        => $imageRules,
            'hotel_image_2'        => $imageRules,
            'hotel_image_3'        => $imageRules,
            'apartment_main_image' => $imageRules,
            'apartment_image_1'    => $imageRules,
            'apartment_image_2'    => $imageRules,
            'apartment_image_3'    => $imageRules,
            'rental_main_image'    => $imageRules,
            'rental_image_1'       => $imageRules,
            'rental_image_2'       => $imageRules,
            'rental_image_3'       => $imageRules,
        ]);

        // Page Header
        foreach (['label', 'title', 'description', 'note'] as $key) {
            $this->saveText('page_header', $key, $request->input('page_header_' . $key));
        }

        // Service sections
        foreach (['villa', 'hotel', 'apartment', 'rental'] as $section) {
            foreach (['label', 'title', 'paragraph_1', 'paragraph_2',
                      'benefit_1', 'benefit_2', 'benefit_3', 'benefit_4',
                      'button_text', 'button_link', 'location_badge'] as $key) {
                $this->saveText($section, $key, $request->input($section . '_' . $key));
            }
            $this->saveImage($request, $section . '_main_image', $section, 'main_image');
            $this->saveImage($request, $section . '_image_1',    $section, 'image_1');
            $this->saveImage($request, $section . '_image_2',    $section, 'image_2');
            $this->saveImage($request, $section . '_image_3',    $section, 'image_3');
        }

        // CTA
        foreach (['label', 'title', 'description', 'button_text', 'button_link'] as $key) {
            $this->saveText('cta', $key, $request->input('cta_' . $key));
        }

        return redirect()->back()->with('success', 'Konten halaman Produk & Layanan berhasil diperbarui.');
    }

    private function saveText(string $section, string $key, ?string $value): void
    {
        PageContent::updateOrCreate(
            ['page' => 'products_services', 'section' => $section, 'key' => $key],
            ['type' => 'text', 'value' => $value, 'is_active' => true]
        );
    }

    private function saveImage(Request $request, string $inputName, string $section, string $key): void
    {
        if ($request->hasFile($inputName)) {
            $path = $request->file($inputName)->store('uploads/products-services', 'public');
            PageContent::updateOrCreate(
                ['page' => 'products_services', 'section' => $section, 'key' => $key],
                ['type' => 'image', 'image_path' => $path, 'is_active' => true]
            );
        }
    }
}
