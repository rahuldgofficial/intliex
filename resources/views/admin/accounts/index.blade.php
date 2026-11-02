@extends('layouts.admin')

@section('title', 'Admin Accounts')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-900">Admin Accounts</h1>
    <a href="{{ route('admin.accounts.create') }}" class="btn btn-primary px-4 py-2 text-sm">
        Add Account
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Settings Access</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($accounts as $account)
            <tr>
                <td class="px-6 py-4 ">
                    <div class="text-sm font-medium text-gray-900">
                        {{ $account->name }}
                        @if(auth()->id() === $account->id)
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 ml-2">You</span>
                        @endif
                    </div>
                </td>
                <td class="px-6 py-4  text-sm text-gray-500">
                    {{ $account->email }}
                </td>
                <td class="px-6 py-4 ">
                    @if($account->can_access_settings)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Granted</span>
                    @else
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Denied</span>
                    @endif
                </td>
                <td class="px-6 py-4  text-right text-sm font-medium">
                    <a href="{{ route('admin.accounts.edit', $account) }}" class="text-brand-600 hover:text-brand-900 mr-3">Edit / Change Password</a>
                    @if(auth()->id() !== $account->id)
                    <form action="{{ route('admin.accounts.destroy', $account) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this account?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
