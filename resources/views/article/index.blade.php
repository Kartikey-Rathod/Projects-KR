<x-layout>



    <section class="container all-article">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center text-center mt-5 ">
                <h1 class="tx-black fw-bold">{{ __('ui.Tutti gli articoli che puoi trovare') }}</h1>
            </div>
        </div>

        @if (session('messageDelete'))
            <div class="alert alert-success">
                {{ session('messageDelete') }}
            </div>
        @elseif (session('messageEdit'))
            <div class="alert alert-success">
                {{ session('messageEdit') }}
            </div>
        @endif
    </section>

    {{-- <section class="container my-4">
        <div class="row d-flex justify-content-center align-items-center text-center">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 card-index" data-aos="fade-up">
                    <x-card :article="$article" />
                </div>
            @empty
                <h3 class="tx-black fw-bold">{{ ('ui.Non sono stati inseriti degli articoli') }}</h3>
            @endforelse
        </div>
    </section> --}}
    {{-- @livewire('article-filter') --}}
    <livewire:article-filter />
    {{-- <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
        
    </div> --}}

</x-layout>
