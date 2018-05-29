@extends('plantilla')

@section('content')

<div class="row"> 
 <div class="col-md-12">
  <div class="box box-primary">
    <br>
    <div class="box-header">
      <h3 class="box-title">Actualizar Noticia</h3>
    </div><!-- /.box-header -->
    <div id="notificacion_resul_feu"></div>
    <form  id="updateNotice"  method="post"  action="{{ url('updateNotice') }}" class="form-horizontal form_entrada" enctype="multipart/form-data" > 
    <input type="hidden" name="id" value="<?= $Notice->id; ?>"> 
      <input type="hidden" name="_token" value="{{ csrf_token() }}">                      
      <div class="box-body ">
        <div class="col-md-6">
          <div class="form-group col-xs-12">
            <label for="nombre">Titulo*</label>
            <input type="text" class="form-control" id="Titulo" name="Titulo" value="<?= $Notice->titulo; ?>">
          </div>
          <div class="form-group col-xs-12">
            <label for="Autor">Autor*</label>
            <input type="text" class="form-control" id="Autor" name="Autor" value="<?= $Notice->autor; ?>">
          </div>
          <div class="form-group col-xs-12">
            <label for="Noticia">Noticia*</label>
            <textarea class="form-control" rows="5" name="Noticia" id="Noticia"><?= $Notice->texto; ?></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="form-group col-xs-12" >
              <img src="<?= 'http://localhost/Noticias/public'.$Notice->imagen; ?>"  alt="User Image"  style="width:160px;height:160px;" id="Imagen_Noticia" >
              <!-- User image -->
            </div>


            <div class="form-group col-xs-12"  >
             <label>Agregar Imagen </label>
             <input name="archivo" id="archivo" type="file" class="archivo form-control" value="<?= $Notice->imagen; ?>" onchange="previewFile()"  required/><br /><br />
           </div>
         </div>
       </div>
       <div class="box-footer">
        <button type="submit" class="btn btn-primary">Actualizar Noticia</button>
      </div>
    </form>
  </div>

</div>
</div> <!-- end col mod 6 -->

<script type="text/javascript">
  function previewFile() {
    var preview = document.querySelector('img');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.onloadend = function () {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }
</script>

@stop   
