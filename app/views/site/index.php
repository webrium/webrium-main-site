<div class="uk-container uk-container-small uk-text-center uk-margin-large-top">

  <h2>{{$index->name->data}}</h2>

  <div class="uk-padding">

    <div class="">
      {!! $index->text_1->data !!}
    </div>

    <div class="uk-margin">
      <button class="uk-button" style="background: #20773e;color: white;"> شروع به کار </button>
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
