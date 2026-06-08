<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ProductUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProductUnitController extends Controller
{
    public function index(Request $request)
    {
        $categories = ProductCategory::orderBy('sort_order')->get();
        $query = ProductUnit::with('category')
            ->withCount('images')
            ->orderBy('product_category_id')
            ->orderBy('sort_order');

        if ($request->filled('category_id')) {
            $query->where('product_category_id', $request->category_id);
        }

        $units = $query->get();
        return view('admin.products.units.index', compact('units', 'categories'));
    }

    public function create()
    {
        $categories = ProductCategory::orderBy('sort_order')->get();
        return view('admin.products.units.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $categoryId = $request->product_category_id;
        $slug = $request->filled('slug')
            ? Str::slug($request->slug)
            : Str::slug($request->name);

        $request->validate([
            'product_category_id' => 'required|exists:product_categories,id',
            'name'        => 'required|string|max:255',
            'slug'        => [
                'nullable', 'string', 'max:255',
                Rule::unique('product_units')->where('product_category_id', $categoryId),
            ],
            'location'    => 'nullable|string|max:255',
            'type'        => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'features'    => 'nullable|string',
            'main_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->only(['product_category_id', 'name', 'location', 'type', 'description', 'features', 'sort_order']);
        $data['slug']       = $slug;
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->has('is_active');

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('uploads/product-units', 'public');
        }

        $unit = ProductUnit::create($data);

        return redirect()->route('admin.products.units.edit', $unit)
            ->with('success', 'Unit berhasil ditambahkan. Sekarang upload gallery foto unit.');
    }

    public function edit(ProductUnit $unit)
    {
        $unit->load('images', 'category');
        $categories = ProductCategory::orderBy('sort_order')->get();
        return view('admin.products.units.edit', compact('unit', 'categories'));
    }

    public function update(Request $request, ProductUnit $unit)
    {
        $categoryId = $request->product_category_id;
        $slug = $request->filled('slug')
            ? Str::slug($request->slug)
            : Str::slug($request->name);

        $request->validate([
            'product_category_id' => 'required|exists:product_categories,id',
            'name'        => 'required|string|max:255',
            'slug'        => [
                'nullable', 'string', 'max:255',
                Rule::unique('product_units')
                    ->where('product_category_id', $categoryId)
                    ->ignore($unit->id),
            ],
            'location'    => 'nullable|string|max:255',
            'type'        => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'features'    => 'nullable|string',
            'main_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->only(['product_category_id', 'name', 'location', 'type', 'description', 'features', 'sort_order']);
        $data['slug']       = $slug;
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->has('is_active');

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('uploads/product-units', 'public');
        }

        $unit->update($data);

        return redirect()->back()->with('success', 'Unit berhasil diperbarui.');
    }

    public function toggle(ProductUnit $unit)
    {
        $unit->update(['is_active' => !$unit->is_active]);
        $status = $unit->is_active ? 'diaktifkan' : 'dinonaktifkan';
        return redirect()->back()->with('success', "Unit \"{$unit->name}\" berhasil {$status}.");
    }

    public function destroy(ProductUnit $unit)
    {
        $unit->delete();
        return redirect()->route('admin.products.units.index')
            ->with('success', 'Unit berhasil dihapus.');
    }
}
