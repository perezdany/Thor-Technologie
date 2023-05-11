@extends('../layouts/adminview')


@section('content')
 <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
       
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Requêtes en cours</h3>
              @if(session('success'))
                <font color="blue">{{session('success')}}</font>
              @endif 
              @if(session('error')) 
                <font color="red">{{session('error')}}</font>
              @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom & Prénom(s)</th>
                  <th>Téléphone</th>
                  <th>Appareil</th>
                  <th>Motif</th>
                  <th>Date</th>
                  <th>Durée(jr)</th>
                  <th>Restant</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@php
                		use App\Http\Controllers\ControllerRequesting;
                		$req = (new ControllerRequesting())->inProgressRequests();
                	@endphp
                		@foreach($req as $request)
                	
                			<tr><td>{{$request->firstname}} {{$request->lastname}}</td><td>{{$request->user_tel}}</td><td>{{$request->device}}</td><td>{{$request->object}}</td><td>{{$request->requesting_date}}</td><td>
                          @if($request->duration == null)
                          
                            non définie

                          @else
                            
                            {{$request->duration}}
                            
                          @endif
                      </td>
                      <td>
                          @if($request->duration == null)
                          
                            non définie

                          @else
        
                            @php
                            $aujourdhui = strtotime(date('Y-m-d'));
                            $date2 = strtotime($request->requesting_date);
                            $nb_jour = ($aujourdhui - $date2)/86400;
                            $restant = $request->duration - $nb_jour;
                            //$nb_jour = $interval->("%d");
                            //strtotime($d) + ($n * 86400);
                            @endphp
                            {{$restant}}
                            
                          @endif
                      </td>
                      <td>
                				<div class="btn-group">
                					<a href="/update_request?id={{$request->id_requesting}}"><button class="btn btn-primary"><i class="nav-icon fa fa-edit"></i></button></a><button class="btn btn-success"><i class="nav-icon fa fa-dollar"></i></button><form method="post" action="/admin_dashboard">@csrf<input type="text" value="{{$request->id_requesting}}" style="display:none;" name="id"><button class="btn btn-danger"><i class="nav-icon fa fa-trash"></i></button></form>
                				</div></td></tr>
                		@endforeach
                	
                	
                </tbody>
                <tfoot>
                	<th>Nom & Prénom(s)</th>
                  <th>Téléphone</th>
                  <th>Appareil</th>
                  <th>Motif</th>
                  <th>Date</th>
                  <th>Action</th>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection