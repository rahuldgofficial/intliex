<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = User::orderBy('name')->get();
        return view('admin.accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('admin.accounts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'can_access_settings' => 'boolean',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        if ($request->has('can_access_settings')) {
            $validated['role'] = 'super-admin';
        } else {
            $validated['role'] = 'admin';
        }
        
        unset($validated['can_access_settings']);

        User::create($validated);

        return redirect()->route('admin.accounts.index')->with('success', 'Account created successfully.');
    }

    public function edit(User $account)
    {
        return view('admin.accounts.edit', compact('account'));
    }

    public function update(Request $request, User $account)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($account->id)],
            'password' => 'nullable|string|min:8|confirmed',
            'can_access_settings' => 'boolean',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        // Prevent taking away own settings access
        if (auth()->id() === $account->id && !$request->has('can_access_settings')) {
            return back()->with('error', 'You cannot remove settings access from your own account.');
        }

        if ($request->has('can_access_settings')) {
            $validated['role'] = 'super-admin';
        } else {
            // Keep existing role if not super-admin, or downgrade to admin
            $validated['role'] = $account->role === 'super-admin' ? 'admin' : $account->role;
        }

        unset($validated['can_access_settings']);

        $account->update($validated);

        return redirect()->route('admin.accounts.index')->with('success', 'Account updated successfully.');
    }

    public function destroy(User $account)
    {
        if (auth()->id() === $account->id) {
            return back()->with('error', 'You cannot delete your own account.');
        }

        $account->delete();

        return redirect()->route('admin.accounts.index')->with('success', 'Account deleted successfully.');
    }
}
