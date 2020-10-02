<div class="uk-container uk-padding uk-container-small uk-text-center uk-margin-large-top">


  <div class="uk-flex-bottom uk-flex-center " uk-grid>

    <div class="uk-width-auto@m">
      <img style="width:75px;" class="" src="@url('library/icon/svgs/solid/feather-alt.svg')" alt="webrium logo">
    </div>

    <div class="uk-width-auto@m">
      <h1>{{$index->name->data}}</h1>
    </div>

  </div>

  <div class="uk-margin-top">
    <h2 style="font-size:20px;" >{!! $index->whay->data !!}</h2>
  </div>



  <div class="uk-padding">

    <div class="">
      {!! $index->text_1->data !!}
    </div>

    <div class="uk-margin">
      <a href="{{url('docs')}}" class="uk-button" style="background: #20773e;color: white;"> شروع به کار </a>
    </div>

  </div>



  <div class="" >
    <h4>{{$index->whay->value}}</h4>
  </div>

  <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center" uk-grid uk-height-match="target: .uk-card">
    @foreach($index->items as $item)
    <div>
      <div class="uk-card uk-card-primary uk-card-body">
        <h3 class="uk-card-title">{{$item->value}}</h3>
        {!! $item->data !!}
      </div>
    </div>

    @endforeach
  </div>

</div>
