<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Static Pages --}}
    @foreach($staticPages as $page)
    <url>
        <loc>{{ url($page) }}</loc>
        <changefreq>weekly</changefreq>
        <priority>{{ $page == '/' ? '1.0' : '0.8' }}</priority>
    </url>
    @endforeach

    {{-- Industry Pages --}}
    @foreach($industrySlugs as $slug)
    <url>
        <loc>{{ url('/industries/' . $slug) }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    {{-- Domain Services --}}
    @foreach($domains as $domain)
    <url>
        <loc>{{ url('/services/' . $domain->slug) }}</loc>
        <lastmod>{{ $domain->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

    {{-- Blog Categories --}}
    @foreach($categories as $category)
    <url>
        <loc>{{ url('/blog/category/' . $category->slug) }}</loc>
        <lastmod>{{ $category->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

    {{-- Blog Posts --}}
    @foreach($posts as $post)
    <url>
        <loc>{{ url('/blog/' . $post->slug) }}</loc>
        <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    {{-- Case Studies --}}
    @foreach($caseStudies as $caseStudy)
    <url>
        <loc>{{ url('/case-studies/' . $caseStudy->slug) }}</loc>
        <lastmod>{{ $caseStudy->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    {{-- Careers / Job Postings --}}
    @foreach($jobs as $job)
    <url>
        <loc>{{ url('/careers/' . $job->slug) }}</loc>
        <lastmod>{{ $job->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
</urlset>
