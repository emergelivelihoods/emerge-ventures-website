<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entrepreneur;
use Illuminate\Http\Request;

class EntrepreneurController extends Controller
{
    public function index()
    {
        $entrepreneurs = Entrepreneur::select([
            'id', 'name', 'email', 'business_name', 'business_logo', 'profile_image', 
            'industry', 'location', 'role', 'status', 'featured', 'created_at'
        ])
        ->orderBy('created_at', 'desc')
        ->paginate(15);
        
        return view('admin.entrepreneurs.index', compact('entrepreneurs'));
    }

    public function create()
    {
        return view('admin.entrepreneurs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:entrepreneurs,email',
            'phone' => 'nullable|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_description' => 'required|string',
            'business_preview' => 'nullable|string',
            'industry' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'business_address' => 'nullable|string|max:255',
            'business_phone' => 'nullable|string|max:255',
            'business_email' => 'nullable|email|max:255',
            'business_hours' => 'nullable|string',
            'website' => 'nullable|url|max:255',
            'social_media' => 'nullable|array',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'business_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string',
            'overview' => 'nullable|string',
            'role' => 'nullable|string|max:255',
            'founded_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'business_size' => 'nullable|string|max:255',
            'skills' => 'nullable|array',
            'achievements' => 'nullable|array',
            'milestones' => 'nullable|array',
            'partners' => 'nullable|array',
            'five_year_plan' => 'nullable|string',
            'value_proposition' => 'nullable|string',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'status' => 'required|in:pending,approved,rejected',
            'featured' => 'boolean',
            'joined_date' => 'nullable|date',
        ]);

        // Handle file uploads
        if ($request->hasFile('profile_image')) {
            $validated['profile_image'] = $request->file('profile_image')->store('entrepreneurs/profiles', 'public');
        }

        if ($request->hasFile('business_logo')) {
            $validated['business_logo'] = $request->file('business_logo')->store('entrepreneurs/logos', 'public');
        }

        $validated['featured'] = $request->has('featured');

        $entrepreneur = Entrepreneur::create($validated);

        return redirect()->route('admin.entrepreneurs.index')
            ->with('success', 'Entrepreneur created successfully.');
    }

    public function show(Entrepreneur $entrepreneur)
    {
        return view('admin.entrepreneurs.show', compact('entrepreneur'));
    }

    public function edit(Entrepreneur $entrepreneur)
    {
        return view('admin.entrepreneurs.edit', compact('entrepreneur'));
    }

    public function update(Request $request, Entrepreneur $entrepreneur)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:entrepreneurs,email,' . $entrepreneur->id,
            'phone' => 'nullable|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_description' => 'required|string',
            'business_preview' => 'nullable|string',
            'industry' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'business_address' => 'nullable|string|max:255',
            'business_phone' => 'nullable|string|max:255',
            'business_email' => 'nullable|email|max:255',
            'business_hours' => 'nullable|string',
            'website' => 'nullable|url|max:255',
            'social_media' => 'nullable|array',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'business_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string',
            'overview' => 'nullable|string',
            'role' => 'nullable|string|max:255',
            'founded_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'business_size' => 'nullable|string|max:255',
            'skills' => 'nullable|array',
            'achievements' => 'nullable|array',
            'milestones' => 'nullable|array',
            'partners' => 'nullable|array',
            'five_year_plan' => 'nullable|string',
            'value_proposition' => 'nullable|string',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'status' => 'required|in:pending,approved,rejected',
            'featured' => 'boolean',
            'joined_date' => 'nullable|date',
        ]);

        // Handle file uploads
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($entrepreneur->profile_image) {
                \Storage::disk('public')->delete($entrepreneur->profile_image);
            }
            $validated['profile_image'] = $request->file('profile_image')->store('entrepreneurs/profiles', 'public');
        }

        if ($request->hasFile('business_logo')) {
            // Delete old logo if exists
            if ($entrepreneur->business_logo) {
                \Storage::disk('public')->delete($entrepreneur->business_logo);
            }
            $validated['business_logo'] = $request->file('business_logo')->store('entrepreneurs/logos', 'public');
        }

        $validated['featured'] = $request->has('featured');

        $entrepreneur->update($validated);

        return redirect()->route('admin.entrepreneurs.show', $entrepreneur)
            ->with('success', 'Entrepreneur updated successfully.');
    }

    public function updateStatus(Request $request, Entrepreneur $entrepreneur)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'featured' => 'boolean',
        ]);

        $validated['featured'] = $request->has('featured');
        $entrepreneur->update($validated);

        return redirect()->back()->with('success', 'Entrepreneur status updated successfully.');
    }

    public function destroy(Entrepreneur $entrepreneur)
    {
        $entrepreneur->delete();
        return redirect()->route('admin.entrepreneurs.index')
            ->with('success', 'Entrepreneur deleted successfully.');
    }
}