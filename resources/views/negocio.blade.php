@extends('templante/menu')
@section('body')
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Lista de Negocios</div>
        <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalregistro">
            Nuevo negocio
        </button>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Categoria</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Celular</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>New York</td>
                  <td>Como</td>
                  <td>New York</td>
                  <td>New York</td>
                  
                </tr>
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo negocio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <input type="text" class="form-control" placeholder="Nombre">
          <div class="form-group pt-3">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control">
              <option>categorias</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
           <div class="form-group pt-2">
            <label for="exampleFormControlSelect1">Ciudad</label>
            <select class="form-control">
              <option>categorias</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
           <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-row pt-2">
                <div class="col">
                <input type="text" class="form-control" placeholder="Hora de apertura 08:00 am">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Hora de cierre 10:00 pm">
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Direccion">
            <div class="form-row pt-2">
                <div class="col">
                <input type="text" class="form-control" placeholder="Latitud">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Longitud">
                </div>
            </div>
            <div class="form-row pt-2">
                <div class="col">
                <input type="text" class="form-control" placeholder="URL de la imagen">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Celular">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection