<x-layout>

    {{-- <x-section-hero :category="$category"></x-section-hero>
    <section class="container mt-4">
        <div class="row">
            <h1 class="text-center">{{ ("ui.$category->name") }}</h1>
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 section-card-category">
                    <x-card :article="$article" />
                </div>
            @empty
                <h2>{{ ('ui.nonCiSonoArticoli') }}</h2>
            @endforelse
        </div>
    </section> --}}
    <x-section-hero :category="$category"></x-section-hero>
    <section class="container-fluid mt-4">
        <div class="row">
            <h1 class="text-center">{{ __("ui.$category->name") }}</h1>
            {{-- @forelse ($articles as $article)
                <div class="col-12 col-md-4 section-card-category">
                    <x-card :article="$article" />
                </div>
            @empty
                <h2>{{ ('ui.nonCiSonoArticoli') }}</h2>
            @endforelse --}}
            <livewire:article-filter :category="$category->id" />
        </div>
    </section>

</x-layout>
