
@extends('../layouts/customer')
 
@section('username')
	@if(session('nom') AND session('prenom'))
		{{session('prenom')}} {{session('nom')}}
	@endif	
@endsection
@section('profile')
	@if(session('theuser'))
		{{session('prenom')}} {{session('nom')}}
	@endif	
@endsection
@php
	if(session('theuser'))
	{
		$user = session('theuser');
			
	}
		
@endphp

@section('email')
	{{$user->user_email}}
@endsection


@section('content')


 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
	<div class="card-body">
	  <h4 class="card-title">Vos requêtes en cours de traitement</h4>
	
	  <div class="table-responsive">
		<table class="table table-hover">
		  <thead>
			<tr>
			  <th>Nom & Prénoms</th>
			  
			  <th>Nom de l'appareil</th>
			  <th>Nombre</th>
			  <th>Objet</th>
			  <th>Date d'enregistrement</th>
			</tr>
		  </thead>
		  <tbody>
			  @php
				use App\Http\Controllers\ControllerRequesting;
				$req = (new ControllerRequesting())->myRequests(session('theuser'));
              @endphp
			  @foreach($req as $request)

			  <tr><td>{{$request->firstname}} {{$request->lastname}}</td><td>{{$request->device}}</td><td>{{$request->number}}</td><td>{{$request->object}}</td><td>{{$request->requesting_date}}</td><td>
			<div class="btn-group">
				<a href="/edit_request?id={{$request->id_requesting}}"><button class="btn btn-primary"><i class="mdi mdi-border-color" style="color:#fff"></i></button></a><button class="btn btn-success"><i class="mdi mdi-cash-usd" style="color:#fff"></i></button><form method="post" action="/espace_client">@csrf<input type="text" value="{{$request->id_requesting}}" style="display:none;" name="id"><button class="btn btn-danger"><i class="mdi mdi-trash-can" style="color:#fff"></i></button></form>
			</div></td></tr>
			@endforeach
			
			
		  </tbody>
		</table>
	  </div>
	</div>
  </div>
</div>
  <div class="col-md-6 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h4 class="card-title">Ajoutez une requête ici:</h4>
		
		  <form class="forms-sample" action="/espace_client" method="post">
			  @csrf
			 <div class="form-group" style="display: none">
			  
			  <input type="text" class="form-control" name="firstname" value="{{session('nom')}}">
			</div>
			<div class="form-group" style="display: none">
			  
			  <input type="text" class="form-control" name="lastname" value="{{session('prenom')}}">
			</div>
			<div class="form-group">
			  <label for="exampleInputUsername1">Nom de l'appareil</label>
			  <input type="text" class="form-control" placeholder="Nom de l'appareil" name="device">
			</div>
			<div class="form-group">
			  <label >Nombre</label>
			  <input type="number" class="form-control" min="1" max="300" name="number">
			</div>
			<div class="form-group">
			  <label>Motif de l'enregistrement</label>
			  <textarea class="form-control" name="object" ></textarea>
			</div>
			  <div class="form-group">
				   @if(session('success'))
                	<font color="blue">{{session('success')}}</font>
              		@endif 
              		@if(session('error')) 
                		<font color="red">{{session('error')}}</font>
              		@endif
			  </div>
			
			<button type="submit" class="btn btn-primary me-2">valider</button>
			<button class="btn btn-danger" type="reset">Annuler</button>
		  </form>
		</div>
	  </div>
  </div>
@endsection
