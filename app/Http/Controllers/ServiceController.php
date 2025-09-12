<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('other-services', compact('services'));
    }
}