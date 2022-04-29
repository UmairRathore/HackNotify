<nav class="navbar navbar-expand-lg navbar-light pt-2 mb-4 navbarPadding">
    <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
         aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon">
            <img src="{{asset('frontend/assets/images/hamburger.35755d7a.svg')}}" class="pr-2">

        </div>
    </div>
    <a href="{{route('index')}}" class="d-md-none">
        <img src="{{asset('frontend/assets/images/logo.b008c1cd.svg')}}" style="width:50%">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand hidden-sm" href="{{route('index')}}"><img src={{asset('frontend/assets/images/logo.b008c1cd.svg')}}></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
        <div class="form-inline my-2 my-lg-0">
            <div class="ulstylenone"><a href="{{route('about')}}">About</a>
                <hr class="horizontalLine">
                <a href="{{route('donate')}}">Donate</a>
                <hr class="horizontalLine">
                <a href="{{route('data-protection')}}">Data
                    Protection</a>
            </div>
        </div>
    </div>
</nav>
