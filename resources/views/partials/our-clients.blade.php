<section class="py-20 lg:py-28 bg-gradient-to-br from-brand-600 to-brand-800 text-white" id="our-clients">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-animate>
            <span class="inline-block py-1 px-3 rounded-full bg-brand-500/30 text-brand-50 text-sm font-semibold tracking-wider mb-4 border border-brand-400/20">OUR Local & Global PARTNERS</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">Local & Global Clients Proudly Using Our Services</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4 lg:gap-6">
            @foreach($partners as $partner)
            <div class="bg-white rounded-xl overflow-hidden relative h-[100px] hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex items-center justify-center" data-animate>
                @if($partner->logo_path)
                    <img src="{{ Storage::url($partner->logo_path) }}" alt="{{ $partner->name }}" class="max-w-full max-h-full object-contain p-2" loading="lazy" decoding="async">
                @else
                    <span class="text-center font-bold text-gray-400 uppercase tracking-wider text-sm px-4">{{ $partner->name }}</span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
