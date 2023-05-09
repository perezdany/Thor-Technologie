
@extends('../layouts/base')

@section('title', config('app.name').' | Mon Espace') 

@section('onglet', 'Déconnexion')

@section('content')


<div class="content">
  <!-- Start: PRODUCT LIST -->
  <div class="container">
    <div class="page-header">
      <h3>Bonjour cher {{session('prenom')}} {{session('nom')}}
      </h3>
       <div class="center-align">
       @if(session('success'))
       <font color="blue">{{session('success')}}</font>
       @endif @if(session('error')) 
       <font color="red">{{session('error')}}</font>
       @endif
     </div>
    </div>
     @php
            use App\Http\Controllers\ControllerRequesting;
            $req = (new ControllerRequesting())->myRequests(session('theuser'));
            //$total = $req->count();
            $cpt = 0;
            //dd($total);
     @endphp
    @if($req)

      <div class="row-fluid">
        <ul class="thumbnails"  >
      @foreach($req as $myrequest)
     
        
           
              <li class="span3">
                <div class="thumbnail">
                  <div class="caption">
                    <h5>REQUETE {{$myrequest->id_requesting}} DU {{$myrequest->requesting_date}}</h5>
                    <p>
                      NOM DE LPPAREIL: {{$myrequest->device}}<br>
                      OBJET DE LA REQUTE: {{$myrequest->object}}<br>
                      NOMBRE D'APPAREIL: {{$myrequest->number}}
                    </p>  
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="/edit_request?id={{$myrequest->id_requesting}}" class="btn btn-primary">Modifier</a>
                      <form method="post" action="/espace_client">@csrf<input type="text" value="{{$myrequest->id_requesting}}" style="display:none;" name="id"><button class="btn btn-danger">Supprimer</button></form>
                      
                    </p>
                  </div>
                </div>
              </li>
              
            
             
      @endforeach
          </ul>
       </div>
    @else
      <h3>Vous n'avez pas de requêtes en cours de traitement. Merci.</h3>
    @endif
          
</div>
<div class="container">
  <div class="page-header">


  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Faire une demande</h3>
    
    </div>
    <!-- /.card-header -->
    <div class="row">
     <div class="span6 offset3">
      <h4 class="widget-header"><i class="icon-edit"></i>Ajoutez vos requêtes ici</h4>
      <div class="widget-body">
       <div class="center-align">
        <form class="form-horizontal form-signin-signup" method="post" action="/espace_client" id="f">
         @csrf
         <input type="text" name="firstname" placeholder="Nom" value="{{session('nom')}}" >
         <input type="text" name="lastname" placeholder="Prénom(s)" value="{{session('prenom')}}" >

         <input type="text" name="device" placeholder="Nom de l'appareil" id="d" required>
         <input type="number" id="tentacles" name="number"
         min="1" max="100" required>
         <label>Motif du problème:</label>

         <textarea name="object" required></textarea><br><hr>

         <div>
          <input type="submit" value="Valider" class="btn btn-primary btn-large">
        </div>
      </form>
     



   </div>
 </div>
</div>
</div>
<!-- /.card-body -->
</div>
<!---->

<!---->


</div>



</div>
@endsection
