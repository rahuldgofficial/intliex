@php
    $class = $class ?? 'w-6 h-6';
@endphp

@switch($slug)
    @case('software')
        <!-- code-bracket -->
        <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
        </svg>
        @break

    @case('ai')
        <!-- cpu-chip -->
        <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
        </svg>
        @break

    @case('networking')
        <!-- globe-alt -->
        <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.998 8.998 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
        </svg>
        @break

    @case('automation')
        <!-- cog-6-tooth -->
        <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.341 3.897l.385-1.154a.75.75 0 01.997-.435l.91.319a.75.75 0 01.434.997l-.385 1.154m-1.782.35l.07.195m2.051-.555l-.07-.195m-2.176 1.488l-1.07.728a.75.75 0 01-1.06-.17l-.597-.88a.75.75 0 01.17-1.06l1.07-.728m3.541 2.222l-.128-.158m-2.241-1.39l.128.158M7.81 12.333l-1.189-.25a.75.75 0 01-.58-.891l.245-.945a.75.75 0 01.89-.58l1.19.25m2.28 1.493l-.181.082m-1.896-2.148l.181-.082m3.67 3.518l.848 1.157a.75.75 0 01-.194 1.054l-.841.61a.75.75 0 01-1.054-.194l-.848-1.157m-2.072-1.921l-.105.163m2.24-1.272l.105-.163m3.75-2.203l1.189.25a.75.75 0 01.58.891l-.245.945a.75.75 0 01-.89.58l-1.19-.25m-2.28-1.493l.181-.082m1.896 2.148l-.181.082m-3.67-3.518l-.848-1.157a.75.75 0 01.194-1.054l.841-.61a.75.75 0 011.054.194l.848 1.157m2.072 1.921l.105-.163m-2.24 1.272l-.105.163M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        @break

    @case('cloud')
        <!-- cloud -->
        <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.361 9 9 0 00-14.882-2.31A4.5 4.5 0 002.25 15z" />
        </svg>
        @break

    @default
        <!-- default document -->
        <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
        </svg>
@endswitch
