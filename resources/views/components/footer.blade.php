<footer class="bg-lbrown text-dark pt-4">

    <div class="container text-center">
        <!-- Navigazione -->
        <ul class="nav justify-content-center py-3">
            <li class="nav-item"><a href="{{ route('home') }}"
                    class="nav-link px-2 tx-black fw-bold colorHoverColor">Home</a>
            </li>
            <li class="nav-item"><a href="{{ route('article.index') }}"
                    class="nav-link px-2 tx-black fw-bold colorHoverColor">{{ __('ui.articoli') }}</a>
            </li>
            {{-- <li class="nav-item"><a href="#" class="nav-link px-2 tx-black fw-bold">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 tx-black fw-bold">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 tx-black fw-bold">About</a></li> --}}
        </ul>
    </div>

    <div class="border-top w-100 line"></div>

    <!-- Chi siamo + social -->
    <div class="container text-center py-3">
        <h6 class="tx-black fw-bold">{{ __('ui.chisiamo') }}</h6>
        <a href="https://www.instagram.com/" class="text-dark fs-4 px-2 "><i
                class="fa-brands fa-instagram colorHoverColor"></i></a>
        <a href="https://www.facebook.com/" class="text-dark fs-4 px-2"><i
                class="fa-brands fa-facebook colorHoverColor"></i></a>
    </div>
    <div class="border-top w-100 line mb-3"></div>

    <!-- Copyright -->
    <div class="text-center pb-3">
        <p class="tx-black fw-bold mb-0">© 2025 Company, Inc</p>
    </div>
</footer>
