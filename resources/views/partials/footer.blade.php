<footer>
    <div>
        <div class="container">
            <div>
                <div>
                    @foreach ($footerList as $itemMenu)
                        <div>
                            <h4>{{ $itemMenu['title'] }}</h4>
                            <ul>
                                @foreach ($itemMenu['list'] as $menu)
                                    <li><a href="{{ $menu['url'] }}">{{ $menu['text'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>

                <p>All Site Content TM and & 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All
                    rights reserved.</p>
                <a href="">Cookies Setting</a>
            </div>
            <div>
                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="dc-logo">
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <button>SIGN-UP NOW!</button>
            <ul>
                <li>FOLLOW US</li>
                @foreach ($followUs as $link)
                    <li>
                        <a href="{{ $link['link'] }}">
                            <img src="{{ asset($link['img']) }}" alt="">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
