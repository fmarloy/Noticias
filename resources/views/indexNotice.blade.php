@extends('plantilla')

@section('content')

<link href="{{ asset('/css/Noticias.css') }}" rel="stylesheet" type="text/css" />

<div class="box box-primary">

  <div class="box-header">
    <h1 class="box-title" style="color: #000">Noticias</h1>
  </div>

  <div class="box-body">              
    <?php
    foreach($Notice as $notice){  
      ?>
      <div>
       <article>
        <div><h2><a id="tituloNot" href="{{route('show-notice', $notice->id)}}"><?= $notice->titulo; ?></a></div>
          <img src="<?= 'http://localhost/Noticias/public'.$notice->imagen; ?>" hspace="5" vspace="5" style="float: none; width: 100px" />
          <p><?= $notice->texto; ?></p>
        </article>
      </div>
      <?php        
    }
    ?>
  </div>
</div>
@stop   
