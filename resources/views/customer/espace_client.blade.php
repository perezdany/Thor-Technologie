
@extends('../layouts/base')

@section('title', config('app.name').' | Mon Espace') 

@section('onglet', 'Déconnexion')

@section('content')


	<div class="content">
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          <div class="page-header">
			
			
				<h2>Bonjour cher {{session('prenom')}} {{session('nom')}}, Vos requêtes:</h2> 
			 
			
           
          </div>
          <div class="row-fluid">
    
   
    <ul class="thumbnails" id="thelist">
     <li class="span3">
        <div class="thumbnail">
          <div class="caption">
            <h3>Product name</h3>
            <p>
              Few attractive words about your product.Few attractive words about your product.
              Few attractive words about your product.Few attractive words about your product.
            </p>
          </div>
          <div class="widget-footer">
            <p>
              <a href="#" class="btn btn-primary">Valider</a>&nbsp;
              <a href="product.html" class="btn">Modifier</a>
            </p>
          </div>
        </div>
      </li>
    <li class="span3">
        <div class="thumbnail">
          <div class="caption">
            <h3>Product name</h3>
            <p>
              Few attractive words about your product.Few attractive words about your product.
              Few attractive words about your product.Few attractive words about your product.
            </p>
          </div>
          <div class="widget-footer">
            <p>
              <a href="#" class="btn btn-primary">Valider</a>&nbsp;
              <a href="product.html" class="btn">Modifier</a>
            </p>
          </div>
        </div>
      </li>
      <li class="span3">
        <div class="thumbnail">
          <div class="caption">
            <h3>Product name</h3>
            <p>
              Few attractive words about your product.Few attractive words about your product.
              Few attractive words about your product.Few attractive words about your product.
            </p>
          </div>
          <div class="widget-footer">
            <p>
              <a href="#" class="btn btn-primary">Valider</a>&nbsp;
              <a href="product.html" class="btn">Modifier</a>
            </p>
          </div>
        </div>
      </li>
      <li class="span3">
        <div class="thumbnail">
          <div class="caption">
            <h3>Product name</h3>
            <p>
              Few attractive words about your product.Few attractive words about your product.
              Few attractive words about your product.Few attractive words about your product.
            </p>
          </div>
          <div class="widget-footer">
            <p>
              <a href="#" class="btn btn-primary">Valider</a>&nbsp;
              <a href="product.html" class="btn">Modifier</a>
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
          <div class="pagination pagination-centered">
                <ul>
                  <li class="disabled">
                    <a href="#">&laquo;</a>
                  </li>
                  <li class="active">
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li>
                    <a href="#">6</a>
                  </li>
                  <li>
                    <a href="#">&raquo;</a>
                  </li>
                </ul>
          </div>
        </div><!-- End: PRODUCT LIST -->


        <div class="container">
			<div class="page-header">
				<h1>Requêtes</h1>
			</div>
			<div class="row">
				<div class="span6 offset3">
					<h4 class="widget-header"><i class="icon-edit"></i>Ajoutez vos requêtes</h4>
					<div class="widget-body">
						<div class="center-align">
							<form class="form-horizontal form-signin-signup" method="post" action="/espace_client" id="f">
								@csrf
								<input type="text" name="firstname" placeholder="Nom" value="{{session('nom')}}" >
								<input type="text" name="lastname" placeholder="Prénom(s)" value="{{session('prenom')}}" >
								
								<input type="text" name="device" placeholder="Nom de l'appareil" id="d" required>
								<label>Motif du problème:</label>
								<textarea name="object" required></textarea><br><hr>
								
								<div>
									<input type="submit" value="Valider" class="btn btn-primary btn-large">
								</div>
							</form>
							<div class="center-align">
								@if(session('success'))
								<font color="blue">{{session('success')}}</font>
								 @endif @if(session('error')) 
								<font color="red">{{session('error')}}</font>
								 @endif
							</div>

							

						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection