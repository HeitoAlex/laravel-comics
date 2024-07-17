<header>
    <section class="container">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
        </div>
        <div>
            <nav>
                <ul>
                    @foreach ($headerLinks as $link)
                        <li>
                            <a href="{{ $link["url"] }}">
                                {{ $link["title"] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </section>
</header>
