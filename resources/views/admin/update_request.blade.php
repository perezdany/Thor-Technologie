@extends('../layouts/adminview')


@section('content')
@section('active', 'mise a jour de requête')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Mise à jour</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                @php
                  use App\Controllers\ControllerRequesting;
                  use App\Models\Requesting;
                  use App\Models\Statu;
                  if(isset($_GET['id']))
                  {
                    $req = Requesting::where('id_requesting', $_GET['id'])->first();
                  }

                @endphp
              <form class="form-horizontal" action="/update_request" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group" style="display: none;">
                    <label class="col-sm-6 control-label">Numéro fiche:</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="nom de l'appareils" name="id" value="{{$req->id_requesting}}">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-6 control-label">Numéro fiche:</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Ex 23052" name="newid">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">nom de l'appareil:</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="nom de l'appareils" name="device" value="{{$req->device}}">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Motif:</label>

                    <div class="col-sm-10">
                      <textarea  class="form-control" name="object" placeholder="motif">{{$req->object}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-3 control-label">nombre d'appareils:</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="number" placeholder="motif" value="{{$req->number}}" min="1" max="100">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-3 control-label">Durée de traitement:</label>

                    <div class="col-sm-10">
                      @if($req->duration)
                        <input type="number" class="form-control" name="duration" placeholder="Durée" min="1" max="100" value="{{$req->duration}}">
                      @else
                        <input type="number" class="form-control" name="duration" placeholder="durée" min="1" max="100">
                      @endif
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="status" >
                        @php
    $req = Requesting::join('status', 'requestings.id_status', '=', 'status.id_status')->where('requestings.id_requesting', $_GET['id'])->get(['status.libele', 'requestings.id_status'])->first();
                          $q_status = Statu::all();
                        @endphp
                        <option value="{{$req->id_status}}">{{$req->libele}}</option>
                        @foreach($q_status as $status)
                          <option value="{{$status->id_status}}">{{$status->libele}}</option>
                        @endforeach
                      </select>
                      
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Valider</button>
                  <button type="reset" class="btn btn-default float-right"><a href="/admin_dashboard">Annuler</a></button>
                </div>
                 @if(session('success'))
                    <font color="blue">{{session('success')}}</font>
                  @endif 
                  @if(session('error')) 
                    <font color="red">{{session('error')}}</font>
                  @endif
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card-body -->
          <!-- /.card -->
        </div>
         <div class="col-md-3"></div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection