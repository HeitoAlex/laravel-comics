<footer>
    <section class="container">
        <div id="footer-links">
            <div>
                <h3>DC COMICS</h3>
                <ul>
                    @foreach ($dcComics as $link)
                        <li>
                            <a href="{{ $link["url"] }}">
                                {{ $link["title"] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3>SHOP</h3>
                <ul>
                    @foreach ($shop as $link)
                        <li>
                            <a href="{{ $link["url"] }}">
                                {{ $link["title"] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3>DC</h3>
                <ul>
                    @foreach ($dc as $link)
                        <li>
                            <a href="{{ $link["url"] }}">
                                {{ $link["title"] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3>SITES</h3>
                <ul>
                    @foreach ($sites as $link)
                        <li>
                            <a href="{{ $link["url"] }}">
                                {{ $link["title"] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div id="bg-logo">
        </div>
    </section>
    <section id="socials">
        <section class="container">
            <button>sign-up now!</button>
            <div id="follow">
                <p>Follow Us</p>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
            </div>
        </section>
    </section>
</footer>
