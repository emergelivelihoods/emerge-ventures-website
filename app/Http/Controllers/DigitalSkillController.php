<?php

namespace App\Http\Controllers;

use App\Models\DigitalSkill;
use Illuminate\Http\Request;

class DigitalSkillController extends Controller
{
    public function index()
    {
        $digitalSkills = DigitalSkill::where('is_active', true)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('digital-skills', compact('digitalSkills'));
    }
}