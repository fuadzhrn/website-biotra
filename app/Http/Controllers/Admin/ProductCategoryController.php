<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::withCount('units')->orderBy('sort_order')->get();
        return view('admin.products.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.products.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:product_categories,slug',
            'label'      => 'nullable|string|max:255',
            'subtitle'   => 'nullable|string|max:500',
            'description'=> 'nullable|string',
            'badge'      => 'nullable|string|max:100',
            'breadcrumb' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $slug = $request->filled('slug')
            ? Str::slug($request->slug)
            : Str::slug($request->name);

        ProductCategory::create([
            'name'        => $request->name,
            'slug'        => $slug,
            'label'       => $request->label ?? $request->name,
            'subtitle'    => $request->subtitle,
            'description' => $request->description,
            'badge'       => $request->badge,
            'breadcrumb'  => $request->breadcrumb ?? $request->name,
            'sort_order'  => $request->sort_order ?? 0,
            'is_active'   => $request->has('is_active'),
        ]);

        return redirect()->route('admin.products.categories.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(ProductCategory $category)
    {
        return view('admin.products.categories.edit', compact('category'));
    }

    public function update(Request $request, ProductCategory $category)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:product_categories,slug,' . $category->id,
            'label'      => 'nullable|string|max:255',
            'subtitle'   => 'nullable|string|max:500',
            'description'=> 'nullable|string',
            'badge'      => 'nullable|string|max:100',
            'breadcrumb' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $slug = $request->filled('slug')
            ? Str::slug($request->slug)
            : Str::slug($request->name);

        $category->update([
            'name'        => $request->name,
            'slug'        => $slug,
            'label'       => $request->label ?? $request->name,
            'subtitle'    => $request->subtitle,
            'description' => $request->description,
            'badge'       => $request->badge,
            'breadcrumb'  => $request->breadcrumb ?? $request->name,
            'sort_order'  => $request->sort_order ?? 0,
            'is_active'   => $request->has('is_active'),
        ]);

        return redirect()->route('admin.products.categories.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function toggle(ProductCategory $category)
    {
        $category->update(['is_active' => !$category->is_active]);
        $status = $category->is_active ? 'diaktifkan' : 'dinonaktifkan';
        return redirect()->back()->with('success', "Kategori \"{$category->name}\" berhasil {$status}.");
    }

    public function destroy(ProductCategory $category)
    {
        $category->delete();
        return redirect()->route('admin.products.categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
