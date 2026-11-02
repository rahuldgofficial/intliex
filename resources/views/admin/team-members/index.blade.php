@extends('layouts.admin')

@section('title', 'Team Members')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-900">Team Members</h1>
    <a href="{{ route('admin.team-members.create') }}" class="btn btn-primary px-4 py-2">Add Member</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm">
                <th class="py-3 px-4 font-semibold">Photo</th>
                <th class="py-3 px-4 font-semibold">Name</th>
                <th class="py-3 px-4 font-semibold">Position</th>
                <th class="py-3 px-4 font-semibold">Status</th>
                <th class="py-3 px-4 font-semibold text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach($members as $member)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3 px-4">
                    <img src="{{ $member->photo ? asset('storage/'.$member->photo) : 'https://ui-avatars.com/api/?name='.urlencode($member->name).'&background=F1F5F9&color=1B3A5C' }}" class="w-10 h-10 rounded-full object-cover">
                </td>
                <td class="py-3 px-4 font-medium text-slate-900">{{ $member->name }}</td>
                <td class="py-3 px-4 text-slate-600">{{ $member->position }}</td>
                <td class="py-3 px-4">
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $member->is_active ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-800' }}">
                        {{ $member->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="py-3 px-4 text-right space-x-2">
                    <a href="{{ route('admin.team-members.edit', $member) }}" class="text-brand-blue hover:text-brand-navy font-medium text-sm">Edit</a>
                    <form action="{{ route('admin.team-members.destroy', $member) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this team member?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium text-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($members->isEmpty())
            <tr>
                <td colspan="5" class="py-8 text-center text-slate-500">No team members found.</td>
            </tr>
            @endif
        </tbody>
    </table>
@endsection
