<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'nameEnglish' => 'nullable|string|max:255',
            'nameArabic' => 'nullable|string|max:255',
            'nationalId' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'workType' => 'nullable|string|max:255',
            'companyCode' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'telephone2' => 'nullable|string|max:255',
            'startDate' => 'nullable|date',
            'birthDate' => 'nullable|date',
            'jobTitle' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'vp' => 'nullable|string|max:255',
            'leaveDate' => 'nullable|date',
            'reasonOfLeaving' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'notes' => 'nullable|string',
            'personalPhoto' => 'nullable|image|max:2048',
            'nationalIdFront' => 'nullable|image|max:2048',
            'nationalIdBack' => 'nullable|image|max:2048',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        // Handle file uploads
        if ($request->hasFile('personalPhoto')) {
            $validated['personalPhoto'] = $request->file('personalPhoto')->store('photos', 'public');
        }
        if ($request->hasFile('nationalIdFront')) {
            $validated['nationalIdFront'] = $request->file('nationalIdFront')->store('ids', 'public');
        }
        if ($request->hasFile('nationalIdBack')) {
            $validated['nationalIdBack'] = $request->file('nationalIdBack')->store('ids', 'public');
        }

        // Handle boolean checkboxes
        $validated['hr'] = $request->has('hr');
        $validated['dataChecked'] = $request->has('dataChecked');
        $validated['photoDone'] = $request->has('photoDone');
        $validated['idDone'] = $request->has('idDone');
        $validated['allThingsDone'] = $request->has('allThingsDone');
        $validated['out'] = $request->has('out');

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'nameEnglish' => 'nullable|string|max:255',
            'nameArabic' => 'nullable|string|max:255',
            'nationalId' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'workType' => 'nullable|string|max:255',
            'companyCode' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'telephone2' => 'nullable|string|max:255',
            'startDate' => 'nullable|date',
            'birthDate' => 'nullable|date',
            'jobTitle' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'vp' => 'nullable|string|max:255',
            'leaveDate' => 'nullable|date',
            'reasonOfLeaving' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'notes' => 'nullable|string',
            'personalPhoto' => 'nullable|image|max:2048',
            'nationalIdFront' => 'nullable|image|max:2048',
            'nationalIdBack' => 'nullable|image|max:2048',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        // Handle file uploads
        if ($request->hasFile('personalPhoto')) {
            if ($user->personalPhoto) {
                Storage::disk('public')->delete($user->personalPhoto);
            }
            $validated['personalPhoto'] = $request->file('personalPhoto')->store('photos', 'public');
        }
        if ($request->hasFile('nationalIdFront')) {
            if ($user->nationalIdFront) {
                Storage::disk('public')->delete($user->nationalIdFront);
            }
            $validated['nationalIdFront'] = $request->file('nationalIdFront')->store('ids', 'public');
        }
        if ($request->hasFile('nationalIdBack')) {
            if ($user->nationalIdBack) {
                Storage::disk('public')->delete($user->nationalIdBack);
            }
            $validated['nationalIdBack'] = $request->file('nationalIdBack')->store('ids', 'public');
        }

        // Handle boolean checkboxes
        $validated['hr'] = $request->has('hr');
        $validated['dataChecked'] = $request->has('dataChecked');
        $validated['photoDone'] = $request->has('photoDone');
        $validated['idDone'] = $request->has('idDone');
        $validated['allThingsDone'] = $request->has('allThingsDone');
        $validated['out'] = $request->has('out');

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Delete associated files
        if ($user->personalPhoto) {
            Storage::disk('public')->delete($user->personalPhoto);
        }
        if ($user->nationalIdFront) {
            Storage::disk('public')->delete($user->nationalIdFront);
        }
        if ($user->nationalIdBack) {
            Storage::disk('public')->delete($user->nationalIdBack);
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
