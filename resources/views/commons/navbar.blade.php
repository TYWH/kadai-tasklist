<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="/">TaskList</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>        
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    {{-- ここに、ユーザー名が表示され、ドロップダウンタグを表示 --}}
                @else
                    <li class="nav-item">{!! link_to_route('signup.get','Signup',[],['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login','Login',[],['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>