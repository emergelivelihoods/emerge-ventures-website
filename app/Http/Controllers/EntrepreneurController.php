<?php

namespace App\Http\Controllers;

use App\Models\Entrepreneur;
use Illuminate\Http\Request;

class EntrepreneurController extends Controller
{
    public function index()
    {
        $entrepreneurs = Entrepreneur::where('status', 'approved')
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('entrepreneurs', compact('entrepreneurs'));
    }

    public function show($id)
    {
        $entrepreneur = Entrepreneur::where('status', 'approved')
            ->findOrFail($id);

        return view('full-profile', compact('entrepreneur'));
    }
}