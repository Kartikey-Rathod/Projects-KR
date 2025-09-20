<x-layout>
    <div class="img-dashbord img-fluid">
        <section class="container-fluid  h-40 w-40  all-article2">
            <div class="row justify-content-center ">
                <div class="user-profile">
                    <div class="col-12 mx-2">
                        <h3 class="text-center fw-bold">Ciao <em>{{ Auth::user()->name }}</em></h3>
                        <ul class="list-unstyled">
                            <li class="text-center">Email: <em>{{ Auth::user()->email }}</em></li>
                        </ul>
                    </div>
                </div>
                <div class="container my-5">
                    <h2 class="text-center fw-bold tx-black">I tuoi articoli</h2>
                    <div class="row ">
                        @forelse ($userArticles as $article)
                            <div class="col-md-4  d-flex justify-content-center">
                                <x-card :article="$article" />
                            </div>
                        @empty
                            <p>Non hai ancora caricato articoli.</p>
                        @endforelse
                    </div>
                </div>

            </div>
    </div>
    </section>

    </div>
</x-layout>
