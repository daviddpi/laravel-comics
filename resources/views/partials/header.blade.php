<header class="bg-header">
    <div class="conteiner-header">
        <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt="Logo Dc"></a>
        <nav>
            <ul>
                @foreach($header_link as $link)
                    <li class="{{request()->routeIs($link['route']) ? 'active' : ''}}">
                        <a href="{{ route($link["route"]) }}">{{ $link["text"] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>