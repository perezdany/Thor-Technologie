@extends('layouts/base')

@section('title', config('app.name').' | Connexion')

	@section('content')
    <!-- Start: MAIN CONTENT -->
    <!-- ======= Contact Section ======= -->
    <section class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ESPACE CLIENT</h2>
          <p>Connectez-vous pour acceder à votre espace client.</p>
        </div>

        <div class="row">

          <div class="col-lg-2 d-flex align-items-stretch">
           
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="login_client" method="post" role="form" class="php-email-form">
               @csrf
              <div class="row">
                <div class="form-group col-md-6">
                   <label>Email ou Numéro de Téléphone</label>
                  <input type="text" name="login" class="form-control" onkeyup="this.value=this.value.toLowerCase()" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Mot de passe</label>
                  <input type="password" name="password"  class="form-control" required>
                </div>
              </div>
             
              <div class="my-3">
                
              </div>
              <div class="text-center"><button type="submit">Connexion</button></div>
            </form>

             @if(session('success'))
            
                <font color="blue">{{session('success')}}</font>
                
                @endif

                @if(session('error'))
                
                <font color="red">{{session('error')}}</font>
                
              @endif
          </div>

           <div class="col-lg-2 d-flex align-items-stretch">
            
          </div>

        </div>

      </div>
    </section>
    <!-- End: MAIN CONTENT -->
	@endsection
  