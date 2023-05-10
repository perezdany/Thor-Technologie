
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

    <!-- Start: MAIN CONTENT -->
  <div class="col-md-6 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h4 class="card-title">Ajoutez une requête ici:</h4>
	
		
		 @php
                  use App\Controllers\ControllerRequesting;
                  use App\Models\Requesting;
                  if(isset($_GET['id']))
                  {
                    $req = Requesting::where('id_requesting', $_GET['id'])->first();
                  }

                @endphp
		
		  <form class="forms-sample" action="edit_request" method="post">
			  @csrf
			<div class="form-group" style="display: none">
			 
			  <input type="text" class="form-control" placeholder="Nom de l'appareil" name="id"  value="{{$req->id_requesting}}">
			</div>
			<div class="form-group">
			  <label for="exampleInputUsername1">Nom de l'appareil</label>
			  <input type="text" class="form-control" placeholder="Nom de l'appareil" name="device"   value="{{$req->device}}" required>
			</div>
			<div class="form-group">
			  <label>Nombre</label>
			  <input type="number" class="form-control"  min="1" max="300" value="{{$req->number}}" required name="number">
			</div>
			<div class="form-group">
			  <label>Motif de l'enregistrement</label>
			  <textarea class="form-control" name="object" required>{{$req->object}}</textarea>
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
    <!-- End: MAIN CONTENT -->
@endsection
		 
		
		
		
