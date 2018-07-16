@extends('templante/menu')
@section('body')
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Lista de Ciudades</div>
        <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalregistro">
            Launch demo modal
        </button>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Ciudad</th>
                  <th>Pais</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>New York</td>
                  <td>Como  </td>
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
        <h5 class="modal-title" id="exampleModalLabel">soy mun modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <input type="text" class="form-control" placeholder="Ciudad">
          <div class="form-group pt-3">
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
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