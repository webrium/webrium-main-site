<style>
  .uk-nav-default>li {
    padding: 8px;
  }
  .uk-nav-sub>li{
    padding-top: 8px;
  }
  .uk-nav-sub>li>a{
    color: #5e3333 !important;
  }
  html {
    scroll-behavior: smooth;
  }

</style>

<div class="uk-container  uk-container-small">

  <div class="uk-margin-auto uk-margin-top uk-padding-small" uk-grid style="background: #f8f8f8;">



    <div class="uk-width-expand@m uk-padding-small">

      <div dir="ltr">

        <div dir="auto">
          <h2>{{$post->title}}</h2>
        </div>

        <hr>

        <div class="mt-4">
          {!! $post->content !!}
        </div>

      </div>
    </div>

    <div class="uk-width-medium uk-padding-small" dir="ltr">
      <div class="uk-height-1-1" style="border-right: solid #e6e4e4 2px;">
        <div class="uk-width-1-1 uk-height-1-1">

          <div class="uk-text-center uk-margin-right uk-padding-small">
            <h1 class="uk-text-small" >فریم ورک وبریوم</h1>
            <hr>
          </div>



          <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>

            @foreach( $site->menus->params as $key=>$items )
            <li class="uk-parent uk-active">
              <a class="uk-text-bold" href="#{{$key}}">{{$key}}</a>
              <ul class="uk-nav-sub">
                @if(is_array($items))
                  @foreach($items as $item)
                    <li><a href="{{url($item->value)}}">{{$item->data}}</a></li>
                  @endforeach
                @else
                  <li><a href="{{url($items->value)}}">{{$items->data}}</a></li>
                @endif
              </ul>
            </li>
            @endforeach


          </ul>
        </div>
      </div>
    </div>



  </div>


</div>

<link rel="stylesheet" href="{{url('library/ckeditor/plugins/codesnippet/lib/highlight/styles/vs.css')}}">
<script src="{{url('library/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js')}}" charset="utf-8"></script>
<script>hljs.initHighlightingOnLoad();</script>
