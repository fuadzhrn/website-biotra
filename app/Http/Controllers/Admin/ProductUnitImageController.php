<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductUnit;
use App\Models\ProductUnitImage;
use Illuminate\Http\Request;

class ProductUnitImageController extends Controller
{
    public function store(Request $request, ProductUnit $unit)
    {
        $request->validate([
            'images'   => 'required|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:4096',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $nextOrder = ($unit->images()->max('sort_order') ?? 0) + 1;
        $altText   = $request->input('alt_text', $unit->name);

        foreach ($request->file('images') as $file) {
            $path = $file->store('uploads/product-gallery', 'public');
            ProductUnitImage::create([
                'product_unit_id' => $unit->id,
                'image_path'      => $path,
                'alt_text'        => $altText,
                'sort_order'      => $nextOrder++,
            ]);
        }

        return redirect()->back()->with('success', 'Foto berhasil diunggah.');
    }

    public function update(Request $request, ProductUnitImage $image)
    {
        $request->validate([
            'alt_text'   => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $image->update([
            'alt_text'   => $request->alt_text,
            'sort_order' => $request->sort_order ?? $image->sort_order,
        ]);

        return redirect()->back()->with('success', 'Foto berhasil diperbarui.');
    }

    public function destroy(ProductUnitImage $image)
    {
        $unitId = $image->product_unit_id;
        $image->delete();

        return redirect()->route('admin.products.units.edit', $unitId)
            ->with('success', 'Foto berhasil dihapus.');
    }
}
