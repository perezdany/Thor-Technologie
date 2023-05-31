
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

@section('page', 'Tableau de bord')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
	<div class="card-body">
		@if(session('success'))

  		<font color="blue">{{session('success')}}</font>
		@endif 
		@if(session('error')) 
  		<font color="red">{{session('error')}}</font>
		@endif
	
	  <div class="table-responsive">
		<table class="table table-striped">
		  <thead>
		   <tr>

			  <th>Fiche de dépôt</th>
			  <th>Panne</th>
			  <th>Observation</th>
			  <th>Durée de traitement(jr)</th>
			   <th>Fiche de dépôt</th>
			</tr>
		  </thead>
		  <tbody>
			@php
				use App\Http\Controllers\ControllerRequesting;
				$req = (new ControllerRequesting())->myRequests(session('theuser'));
				//var_dump(session('theuser')->id);

				$nb = $req->count();
			@endphp
		  @foreach($req as $request)

  <!-- aire un script calculer la durée du jours -->

  <tr><td>{{$request->id_requesting}}</td><td>{{$request->object}}</td><td>{{$request->libele}}</td><td>
	@if($request->duration == null)
		non définie
	@else
		{{$request->duration}}
	@endif
  </td><td>
  			<form method="post" action="/download" enctype="multipart/form-data">@csrf<input type="text=" value="{{$request->file_store}}" style="display:none;" name="file">
       
        <button class="btn btn-info" >Télécharger</button></form>
  </td></tr>
@endforeach

		</table>
			 @if ($nb == 0)
            <h4>Vous n'avez pas de requête en cours</h4>
        @endif
	  </div>
	</div>
  </div>
</div>


<!-- plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
@endsection
