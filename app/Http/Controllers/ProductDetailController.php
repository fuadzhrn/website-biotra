<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;

class ProductDetailController extends Controller
{
    private array $staticMap = [
        'villa-staycation' => 'pages.product-details.villa-staycation',
        'hotel-penginapan' => 'pages.product-details.hotel-penginapan',
        'apartemen'        => 'pages.product-details.apartemen',
        'rental-kendaraan' => 'pages.product-details.rental-kendaraan',
    ];

    private array $fallbackImages = [
        'villa-staycation' => [
            'main'    => 'assets/img/product-details/villa/jimbaran-main.jpg',
            'gallery' => [
                'assets/img/product-details/villa/jimbaran-1.jpg',
                'assets/img/product-details/villa/jimbaran-2.jpg',
                'assets/img/product-details/villa/jimbaran-3.jpg',
            ],
        ],
        'hotel-penginapan' => [
            'main'    => 'assets/img/product-details/hotel/hotel-1-main.jpg',
            'gallery' => [
                'assets/img/product-details/hotel/hotel-1-1.jpg',
                'assets/img/product-details/hotel/hotel-1-2.jpg',
                'assets/img/product-details/hotel/hotel-1-3.jpg',
            ],
        ],
        'apartemen' => [
            'main'    => 'assets/img/product-details/apartment/bekasi-main.jpg',
            'gallery' => [
                'assets/img/product-details/apartment/bekasi-1.jpg',
                'assets/img/product-details/apartment/bekasi-2.jpg',
                'assets/img/product-details/apartment/bekasi-3.jpg',
            ],
        ],
        'rental-kendaraan' => [
            'main'    => 'assets/img/product-details/rental/car-1-main.jpg',
            'gallery' => [
                'assets/img/product-details/rental/car-1-1.jpg',
                'assets/img/product-details/rental/car-1-2.jpg',
                'assets/img/product-details/rental/car-1-3.jpg',
            ],
        ],
    ];

    public function show(string $slug)
    {
        $category = ProductCategory::where('slug', $slug)->where('is_active', true)->first();

        if (!$category || $category->activeUnits()->count() === 0) {
            if (isset($this->staticMap[$slug])) {
                return view($this->staticMap[$slug]);
            }
            abort(404);
        }

        $units = $category->activeUnits()->with('images')->get();

        $fallbackMain    = $this->fallbackImages[$slug]['main']    ?? 'assets/img/placeholder.jpg';
        $fallbackGallery = $this->fallbackImages[$slug]['gallery'] ?? [];

        $unitsForView = $units->map(function ($unit) use ($fallbackMain, $fallbackGallery) {
            $mainImage = $unit->main_image
                ? 'storage/' . $unit->main_image
                : $fallbackMain;

            $galleryImages = $unit->images->isNotEmpty()
                ? $unit->images->map(fn($img) => 'storage/' . $img->image_path)->toArray()
                : ($fallbackGallery ?: [$mainImage]);

            return [
                'name'        => $unit->name,
                'location'    => $unit->location ?? '',
                'type'        => $unit->type ?? '',
                'description' => $unit->description ?? '',
                'features'    => $unit->features_array,
                'main_image'  => $mainImage,
                'images'      => $galleryImages,
            ];
        })->toArray();

        $categoryForView = [
            'label'       => $category->label ?? $category->name,
            'title'       => $category->name,
            'subtitle'    => $category->subtitle ?? '',
            'description' => $category->description ?? '',
            'badge'       => $category->badge ?? '',
            'breadcrumb'  => $category->breadcrumb ?? $category->name,
        ];

        return view('pages.product-details.show', [
            'category' => $categoryForView,
            'units'    => $unitsForView,
        ]);
    }
}
