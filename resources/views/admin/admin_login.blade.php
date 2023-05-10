@extends('../layouts/admin_forms')
@section('title', 'Connexion')
@section('content')

<form action="/admin_login" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="login(pseudo)" name="login" required>
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="mot de passe" name="password" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
    		<div class="row">
    			@if(session('success'))
    				<font color="blue" class="form-control-feedback">{{session('success')}}</font>
    			@endif 
    			@if(session('error')) 
    				<font color="red" class="form-control-feedback">{{session('error')}}</font>
    			@endif
    		</div>
        <div class="row">
                  <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
@endsection
