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