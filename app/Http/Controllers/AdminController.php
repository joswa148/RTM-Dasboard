<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'pageTitle'   => 'Dashboard',
            'totalLogos'  => Logo::count(),
            'activeLogos' => Logo::where('is_active', true)->count(),
            'recentLogos' => Logo::orderByDesc('updated_at')->limit(5)->get(),
        ]);
    }
}
