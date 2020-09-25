<nav class="uk-navbar-container uk-navbar-transparent uk-padding-large uk-padding-remove-vertical" style="background: #1e87f0;" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            @if($site->nav_brand??false)
            <li class="uk-active"><a class="uk-text-bold" style="color:white;" href="@url($site->nav_brand->value)">{{$site->nav_brand->data}}</a></li>
            @endif

            @foreach($site->nav as $key=>$nav)
            <li><a style="color:white;" href="{{url($nav->value)}}">{{$nav->data}}</a></li>
            @endforeach
        </ul>

    </div>
</nav>
