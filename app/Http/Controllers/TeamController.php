<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at')
            ->get();

        return view('our-team', compact('teamMembers'));
    }
}