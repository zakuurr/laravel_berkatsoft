<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">iMovie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if (Request::is('/'))
            @foreach ($category as $item)
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" id="{{ $item->slug }}" onclick="getMovie('{{ $item->slug }}')">{{ $item->nama_category }}</a>
            </li>
            @endforeach
            @endif
        </ul>
        <span class="navbar-text">
      
            <a class="btn  btn-success text-white" href="{{ route('login') }}">{{ __('Login') }}</a>

            @if (Route::has('register'))
            <a class="btn btn-dark btn-outline-ligh" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        </span>
    </div>
</div>
</nav>