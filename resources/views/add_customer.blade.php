
@extends( 'layouts/base' )

@section('title', config('app.name').' | Inscription')

@section( 'content' )

< <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ESPACE CLIENT</h2>
          <p>Connectez-vous pour acceder à votre espace client.</p>
        </div>

        <div class="row">
		  
	      <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch"></div>
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" action="" id="f" class="php-email-form">
                @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label >Nom</label>
                  <input type="text" name="firstname" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label >Prénom(s)</label>
                  <input type="text"  name="lastname" class="form-control" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label >Téléphone</label>
                  <input type="text" name="tel" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="text"  name="email" class="form-control" onkeyup="this.value=this.value.toLowerCase()" required>
                </div>
              </div>

               <div class="row">
                <div class="form-group col-md-12">
                  <label>Adressse</label>
                  <input type="text" name="address" class="form-control" required>
                </div>
              </div>
               <div class="row">
                <div class="form-group col-md-12">
                  <label>Mot de passe</label>
                  <input type="password" name="password" class="form-control" id="pwd1" required>
                </div>
              </div>
               <div class="row">
                <div class="form-group col-md-12">
                  <label>Confirmez le mot de passe</label>
                  <input type="password" name="password_confirmation" class="form-control" required id="pwd2" onkeyup="verifyPassword()">
                </div>
              </div>
              <div class="row" id="msg" style=""></div>
              <div class="row" id="match" style=""></div>

              <script type="text/javascript">
                
                /*UN SCRIPT QUI VA VERFIER SI LES DEUX PASSWORDS MATCHENT*/
                function verifyPassword()
                {
                  var msg; 
                  var str = document.getElementById("pwd1").value; 
                  /*if (str.match( /[0-9]/g) && 
                      str.match( /[A-Z]/g) && 
                      str.match(/[a-z]/g) && 
                      str.match( /[^a-zA-Z\d]/g) &&
                      str.length >= 10) 
                    msg = "<p style='color:green'>Mot de passe fort.</p>"; 
                  else 
                    msg = "<p style='color:red'>Mot de passe faible.</p>"; 
                  document.getElementById("msg").innerHTML= msg; */
                  //var _ = require('underscore');
                  var text1 = document.getElementById('pwd1').value;
                  var text2 = document.getElementById('pwd2').value;
                  
                  if((text1 == text2))
                  {
                    var theText = "<p style='color:green'>Correspond.</p>"; ;
                    document.getElementById("match").innerHTML= theText; 
                  }
                  else
                  {
                    var theText = "<p style='color:red'>Ne correspond pas.</p>";
                    document.getElementById("match").innerHTML= theText; 
                  }
                }
                
              </script>
             
              <div class="text-center"><button type="submit">S'inscrire</button></div>
              @if(session('success'))
            
                <font color="blue">{{session('success')}}</font>
                
                @endif

                @if(session('error'))
                
                <font color="red">{{session('error')}}</font>
                
              @endif
              <div class="text-center" >
              		<br><hr>
              		<h4>Déjà un compte?</h4>  
             		<a href="/login_client" >Se connecter</a>
              </div>
            </form>
            
          </div>
		  <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch"></div>
        </div>

      </div>
    </section><!-- End Contact Section -->
<!-- End: MAIN CONTENT -->
@endsection