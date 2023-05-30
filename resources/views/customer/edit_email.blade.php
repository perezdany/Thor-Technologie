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
		  <h4 class="card-title">Modifier le mot de passe</h4>

		
		   <form class="forms-sample" action="edit_email" method="post">
				  	@csrf
				  	<div class="form-group" style="display:none;">
				 
				  		<input type="password" class="form-control" value="{{$user->id}}" name="id">
					</div>
                    <div class="form-group">
                      <label >Email:</label>
                        <input type="text" class="form-control" placeholder="Nouvelle adresse email" name="email" onkeyup="this.value=this.value.toLowerCase()">
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

<!--
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <p class="card-description">
                   Modificatin de mot de passe
                  </p>
                 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Select 2</h4>
                  <div class="form-group">
                    <label>Single select box using select 2</label>
                    <select class="js-example-basic-single w-100">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Multiple select using select 2</label>
                    <select class="js-example-basic-multiple w-100" multiple="multiple">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Typeahead</h4>
                  <p class="card-description">
                    A simple suggestion engine
                  </p>
                  <div class="form-group row">
                    <div class="col">
                      <label>Basic</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" placeholder="States of USA">
                      </div>
                    </div>
                    <div class="col">
                      <label>Bloodhound</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" placeholder="States of USA">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         -->