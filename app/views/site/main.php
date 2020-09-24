<!DOCTYPE html>
<html lang="">
  <head>
    <title>{{$post->title??''}}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="@url('library/uikit/css/uikit.min.css')" />
    <script src="@url('library/uikit/js/uikit.min.js')"></script>

  </head>
  <body>
    @view('site/header',$_all)
    @view($_view_content,$_all)
    @view('site/footer',$_all)
  </body>
</html>
