@extends('layouts.admin')

@section('content')
    <div class="sm:flex sm:justify-between sm:items-center mb-8">
        <div class="mb-4 sm:mb-0">
            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Case Studies ✨</h1>
        </div>
        
        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
            <a href="{{ route('admin.case-studies.create') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="hidden xs:block ml-2">Create Case Study</span>
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white shadow-lg rounded-sm border border-slate-200 w-full overflow-hidden">
        <header class="px-5 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">All Case Studies <span class="text-slate-400 font-medium">{{ $caseStudies->total() ?? 0 }}</span></h2>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-slate-500 bg-slate-50 border-t border-b border-slate-200">
                        <tr>
                            <th class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div class="font-semibold text-left">Title</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div class="font-semibold text-left">Domain</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div class="font-semibold text-left">Client</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div class="font-semibold text-left">Featured</div>
                            </th>
                            <th class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div class="font-semibold text-left">Actions</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-slate-200">
                        @forelse($caseStudies ?? [] as $study)
                        <tr>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div class="font-medium text-slate-800">{{ $study->title }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div>{{ $study->domain->name ?? 'N/A' }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 ">
                                <div>{{ $study->client }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 ">
                                @if($study->is_featured)
                                    <div class="inline-flex font-medium rounded-full text-center px-2.5 py-0.5 bg-emerald-100 text-emerald-600">Yes</div>
                                @else
                                    <div class="inline-flex font-medium rounded-full text-center px-2.5 py-0.5 bg-slate-100 text-slate-500">No</div>
                                @endif
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                <div class="space-x-1">
                                    <a href="{{ route('admin.case-studies.edit', $study->id) }}" class="text-slate-400 hover:text-slate-500 rounded-full">
                                        <span class="sr-only">Edit</span>
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.case-studies.destroy', $study->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-500 hover:text-rose-600 rounded-full" onclick="return confirm('Delete this case study?')">
                                            <span class="sr-only">Delete</span>
                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z" />
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-2 py-4 text-center text-slate-500">No case studies found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    @if(isset($caseStudies) && $caseStudies->hasPages())
    <div class="mt-8">
        {{ $caseStudies->links() }}
    </div>
    @endif
@endsection
