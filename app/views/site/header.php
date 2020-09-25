<nav class="uk-navbar-container uk-navbar-transparent uk-padding-large uk-padding-remove-vertical" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            @if($site->nav_brand??false)
            <li class="uk-active"><a href="@url($site->nav_brand->value)">{{$site->nav_brand->data}}</a></li>
            @endif

            @foreach($site->nav as $key=>$nav)
            <li><a href="{{url($nav->value)}}">{{$nav->data}}</a></li>
            @endforeach
        </ul>

    </div>
</nav>
