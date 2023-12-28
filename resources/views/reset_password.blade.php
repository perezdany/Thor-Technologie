@extends('layouts/base')

@section('title', config('app.name').' | Connexion')

	@section('content')
    <!-- Start: MAIN CONTENT -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ESPACE CLIENT</h2>
          <p>Connectez-vous pour acceder à votre espace client.</p>
        </div>

        <div class="row">
      
          <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch"></div>
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" action="reset_password" id="f" class="php-email-form">
                @csrf
              <div class="row">
               
                <div class="form-group col-md-12">
                  <label>Entrez votre adresse mail liée au compte</label>
                  <input type="text" name="email" class="form-control" required>
                </div>
               
               
              </div>
             
              <div class="text-center"><button type="submit">Valider</button></div>
              @if(session('success'))
            
                <font color="blue">{{session('success')}}</font>
                
                @endif

                @if(session('error'))
                
                <font color="red">{{session('error')}}</font>
                
              @endif
            </form>
          </div>
          <!--<div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
             <h4><i class="bx bx-question-mark"></i> Mot de passe oublié?</h4>  
             <a href="/reset_password" ><button type="submit">Cliquez ici</button></a>
          </div>-->

          <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch"></div>
        </div>

      </div>
    </section><!-- End Contact Section -->
    <!-- End: MAIN CONTENT -->
	@endsection
  