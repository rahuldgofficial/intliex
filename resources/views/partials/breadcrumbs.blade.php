@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
<nav aria-label="Breadcrumb" class="py-4 bg-transparent">
    <ol class="container-site mx-auto px-4 sm:px-6 lg:px-8 flex items-center space-x-2 text-sm text-surface-500">
        <li>
            <a href="{{ url('/') }}" class="hover:text-brand-600 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 rounded px-1">
                <span class="sr-only">Home</span>
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a>
        </li>
        
        @foreach($breadcrumbs as $index => $breadcrumb)
            <li class="flex items-center">
                <svg class="h-4 w-4 text-surface-400 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                @if(!$loop->last)
                    <a href="{{ $breadcrumb['url'] }}" class="hover:text-brand-600 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 rounded px-1">{{ $breadcrumb['label'] }}</a>
                @else
                    <span class="text-surface-900 font-medium px-1" aria-current="page">{{ $breadcrumb['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>

<!-- JSON-LD BreadcrumbList -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    }
    @foreach($breadcrumbs as $index => $breadcrumb)
    ,{
      "@type": "ListItem",
      "position": {{ $index + 2 }},
      "name": "{{ $breadcrumb['label'] }}",
      "item": "{{ $breadcrumb['url'] }}"
    }
    @endforeach
  ]
}
</script>
@endif
