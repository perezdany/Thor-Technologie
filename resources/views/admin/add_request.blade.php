@extends('../layouts/adminview')

@section('title', config('app.name').' | Mon Espace')


@section('content')

<div class="content">
	<div class="container">
		<div class="page-header">
			<h1>Requêtes</h1>
		</div>
		<div class="row">
			<div class="span6 offset3">
				<h4 class="widget-header"><i class="icon-edit"></i>Ajoutez une requête</h4>
				<div class="widget-body">
					<div class="center-align">
						<form class="form-horizontal form-signin-signup" method="post" action="/add_request" id="f">
							@csrf
							<input type="text" name="firstname" placeholder="Nom" >
							<input type="text" name="lastname" placeholder="Prénom(s)" >

							<input type="text" name="device" placeholder="Nom de l'appareil" id="d" required>
							<label>Motif du problème:</label>
							<textarea name="object" required></textarea><br><hr>

							<div class="center-align">
								<button type="submit" class="btn btn-primary btn-large">Valider</button>&nbsp;
								
							</div>
						</form>
						<div class="center-align">
								
							@if(session('success'))
								<font color="blue">{{session('success')}}</font>
							@endif 
							@if(session('error')) 
								<font color="red">{{session('error')}}</font>
							@endif
						</div>
						<div class="center-align">
							<a href="/admin_dashboard"><button class="btn btn-danger btn-large"><font color="white">Annuler</font> </button></a>
							
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>
</div>
