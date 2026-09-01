@props([
    'title',
    'description' => null,
])

<section class="auth-shell application-settings-form">
    <div class="auth-shell-content">
        <div class="flex w-full max-w-[27rem] flex-col items-center gap-6">
            <a href="/" class="flex flex-col items-center gap-1 text-white" title="{{ brand_full_name() }}">
                <span class="text-[22px] font-semibold tracking-[0.12em] uppercase">InstaHost</span>
                <span class="text-[11px] font-medium tracking-[0.14em] uppercase text-white/70">{{ brand_tagline() }}</span>
            </a>
            <div class="auth-card w-full">
            <div class="auth-card-heading">
                <h1>{{ $title }}</h1>
                @if ($description)
                    <p>{{ $description }}</p>
                @endif
            </div>

            <div class="auth-card-body">
                {{ $slot }}
            </div>

            @isset($footer)
                <footer class="auth-card-footer">
                    {{ $footer }}
                </footer>
            @endisset
            </div>
        </div>
    </div>
</section>
