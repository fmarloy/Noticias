@extends('plantilla')

@section('content')

<div class="box box-primary">
  <div class="col-md-12" style="width: 80%; margin-left: 10%">

    <center><h1><?= $Notice->titulo; ?></h1></center>
    <h3>Autor:<?= $Notice->autor; ?></h3>
    <h4><?= $Notice->updated_at; ?></h4>
    <hr>
    <center><img src="<?= 'http://localhost/Noticias/public'.$Notice->imagen; ?>" hspace="5" vspace="5" style="float: none; width: 500px" /></center>
    <p><?= $Notice->texto; ?></p>
    <hr>
  </div>
</div>
@stop   
