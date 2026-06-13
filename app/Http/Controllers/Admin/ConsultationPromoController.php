<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultationPromo;
use Illuminate\Http\Request;

class ConsultationPromoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:120',
            'description' => 'required|string|max:400',
        ], [
            'title.required'       => 'Judul promo wajib diisi.',
            'description.required' => 'Deskripsi promo wajib diisi.',
        ]);

        ConsultationPromo::create([
            'title'       => $request->title,
            'description' => $request->description,
            'is_active'   => false,
            'sort_order'  => (ConsultationPromo::max('sort_order') ?? 0) + 1,
        ]);

        return back()->with('success', 'Promo berhasil ditambahkan.');
    }

    public function setActive(Request $request)
    {
        $ids = array_filter((array) $request->input('active_promo_ids', []));
        ConsultationPromo::query()->update(['is_active' => false]);
        if (!empty($ids)) {
            ConsultationPromo::whereIn('id', $ids)->update(['is_active' => true]);
        }
        $count = count($ids);
        return back()->with('success', $count > 0 ? "{$count} promo berhasil diaktifkan." : 'Semua promo dinonaktifkan.');
    }

    public function activate(ConsultationPromo $promo)
    {
        ConsultationPromo::query()->update(['is_active' => false]);
        $promo->update(['is_active' => true]);

        return back()->with('success', "Promo \"{$promo->title}\" berhasil diaktifkan.");
    }

    public function deactivate(ConsultationPromo $promo)
    {
        $promo->update(['is_active' => false]);

        return back()->with('success', "Promo \"{$promo->title}\" berhasil dinonaktifkan.");
    }

    public function destroy(ConsultationPromo $promo)
    {
        $name = $promo->title;
        $promo->delete();

        return back()->with('success', "Promo \"{$name}\" berhasil dihapus.");
    }
}
