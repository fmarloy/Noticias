@extends('plantilla')

@section('content')


<div class="box box-primary">

  <div class="box-header">
    <h1 class="box-title">Noticias</h1>
  </div>

  <div class="box-body">              
    <?php 

    if( count($Notice) >0){
      ?>

      <table id="tabla_pacientes" class="display table table-hover" cellspacing="0" width="100%">

        <thead>
          <tr>
           <th>Titulo</th>
           <th>Acción</th>
         </tr>
       </thead>


       
       <tbody>


        <?php 

        foreach($Notice as $notice){  
          ?>

          <tr role="row" class="odd">
            <td class="sorting_1"><a id="tituloNot" href="{{route('show-notice', $notice->id)}}"><?= $notice->titulo; ?></a></td>
            <td style="width: 20px"><a class="btn btn-success" role="button" href="{{route('update-notice', $notice->id)}}" ><i class="fa fa-pencil-square-o"></i></a></td>
            <td style="width: 20px"><a class="btn btn-danger" role="button" href="{{route('delete-notice', $notice->id)}}" ><i class="fa fa-trash-o"></i></a></td>


          </tr>


          <?php        
        }
        ?>



      </tbody>
    </table>
    <?php
  }

  ?>
</div>
</div>
@stop   
