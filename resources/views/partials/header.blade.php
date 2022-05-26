<header>
    <div>
        <div class="container top">
            <div>DC POWER VISA</div>
            <div>ADDITIONAL DC SITES</div>
        </div>
    </div>
    <div>
        <div class="container bottom">
            {{-- Img Logo --}}
            <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo">
            <nav>
                <ul>
                    {{-- navBar loop --}}
                    @foreach ($navBar as $item)
                        <li><a href="{{ $item['url'] }}">{{ $item['text'] }}</a></li>
                    @endforeach
                    <li><input type="text" name="" id="" placeholder="Search"></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
