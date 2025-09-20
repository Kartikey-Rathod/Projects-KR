<div class="container-fluid d-flex mini-nav fixed-top" id="mini-nav">
    <div class="row row-navcustom ">
        <div class="col-12 col-navcustom">
            <ul class="nav d-flex justify-content-evenly">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold customHover"
                            href="{{ route('article.index-category', $category) }}">{{ __("ui.$category->name") }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>