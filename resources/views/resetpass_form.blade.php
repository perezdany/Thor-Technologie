@extends('layouts/base' )

@section('title', config('app.name').' | Inscription')

@section( 'content' )

 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ESPACE CLIENT</h2>
          <p>Réinitialisation du mot de passe.</p>
        </div>

        <div class="row">
      
          <div class="col-lg-3 mt-5 mt-lg-0 d-flex align-items-stretch"></div>
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" action="resetpass_form" id="f" class="php-email-form">
                @csrf
                
            
               <div class="row">
                <div class="form-group col-md-12" >
                  
                  <input type="text" name="email_to_reset" class="form-control" value="{{session('email_to_reset')}}" style="display:none;"/>
                  
                </div>
               
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Entrez vun nouveau mot de passe</label>
                  <input type="password" name="password" id="pwd1"class="form-control" required/>
                  <font style="font-size: 20px; position: absolute; margin-left: -20px;" onclick="showPassword()" id="icnopen"><span class="bx bx-lock-open" ></span>
                  </font> 
                  <font style="font-size: 20px; display:none;" onclick="hidePassword()"  id="icnclose"><span class="bx bx-lock-alt"></span>
                  </font>
                </div>
               
              </div>

              <div class="row">
                <div class="form-group col-md-12">
                  <label>Confirmez le mot de passe</label>
                  <input type="password" name="password_confirmation" onkeyup="verifyPassword()" class="form-control" id="pwd2" required>
                </div>
               
              </div>
            
              <div class="row">
                <div class="form-group col-md-12" id="match">
                  
                </div>
               
              </div>

              <script type="text/javascript">
                        //ecrire un script pour afficer le mot de passe
                        function showPassword(){
                          //on recupere l'icone
                          const icon = document.getElementById('icnopen');
                          const iconcl = document.getElementById('icnclose');
                         
                          //on reupere l'input
                          var theInput1 = document.getElementById('pwd1');
                          var theInput2 = document.getElementById('pwd2');
                          //on va changer leur style
                          icon.setAttribute('style', 'display:none');
                          iconcl.setAttribute('style','margin-left: -20px; font-size: 20px; position:absolute;');
                        
                          theInput1.setAttribute('type', 'text');
                          theInput2.setAttribute('type', 'text');
                        }

                        function hidePassword(){
                           //on recupere l'icone
                          const icon = document.getElementById('icnopen');
                          const iconcl = document.getElementById('icnclose');
                          
                          //on reupere l'input
                          var theInput1 = document.getElementById('pwd1');
                          var theInput2 = document.getElementById('pwd2');
                          //on va changer leur style
                          iconcl.setAttribute('style', 'display:none');
                          icon.setAttribute('style', 'margin-left: -20px; font-size: 20px; position:absolute;');
                          
                          
                          theInput1.setAttribute('type', 'password');
                          theInput2.setAttribute('type', 'password');
                        }
                      </script>

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
    </section>
<!-- End: MAIN CONTENT -->
@endsection