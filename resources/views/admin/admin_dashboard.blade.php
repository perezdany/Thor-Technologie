@extends('../layouts/adminview')


@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tableau de bord</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">tableaux de bord</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
       
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Requêtes en cours</h3>
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
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	<?php
                		use App\Http\Controllers\ControllerRequesting;
                		$req = (new ControllerRequesting())->inProgressRequests();
                		?>
                		@foreach($req as $request)
                	
                			<tr><td>{{$request->firstname}} {{$request->lastname}}</td><td>{{$request->user_tel}}</td><td>{{$request->device}}</td><td>{{$request->object}}</td><td>{{$request->requesting_date}}</td><td><a href="/add_request?id={{$request->id_requesting}}"><button class="btn-primary">modifier<i class="nav-icon fa fa-edit"></i></button></a><form method="post" action="/admin_dashboard">@csrf<input type="text" value="{{$request->id_requesting}}" style="display:none;" name="id"><button class="btn-danger">supprimer<i class="nav-icon fa fa-trash"></i></button></form></td></tr>
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