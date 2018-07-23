@extends('templante/menu')
@section('body')
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Lista de paises</div>
        <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalregistro">
            Agregar Pais
        </button>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="col-xs-1">
                    <center>
                      ID
                    </center>
                  </th>
                  <th class="col-xs-10">
                    <center>
                      NOMBRE
                    </center>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($paises as $paise)
                  <tr>
                    <td>
                        {{$paise -> id }}
                      </td>
                      <td>
                        {{$paise -> nombre }} 
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection
@extends('templante/menu')
@section('modal')
    <!-- Modal-registro pais -->
<div class="modal fade" id="modalregistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo pais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
                <input type="text" class="form-control" placeholder="Nombre del pais">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection