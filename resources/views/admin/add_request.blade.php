@extends('../layouts/admin_forms')
@section('title', 'Requêtes')
@section('content')
<form action="/add_request" method="post">
         @csrf


        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nom" name="firstname" required 
         
          >
          
        </div>
		    <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Prénom(s)" name="lastname">
          
        </div>
		<div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nom de l'appareil" name="device" required>  
    </div>
		<div class="form-group has-feedback">
      <label>Nombre d'appareil </label>
			<input type="number" id="tentacles" name="number" min="1" max="100" name="number" class="form-control" required>
		</div>
        <div class="form-group has-feedback">
        	<label>Motif de la requête </label>
          <textarea class="form-control" name="object"></textarea>
          
        </div>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Numéro fiche de dépôt (ex: 23051)" name="id_requesting" required>  
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Status</label>

          <div class="col-sm-10">
            <select class="form-control" name="status" >
              @php
                use App\Models\Statu;
                $q_status = Statu::all();

                //dd($q_status);
              @endphp
              @foreach($q_status as $status)
                 <option value="{{$status->id_status}}">{{$status->libele}}</option>
              @endforeach
             
            </select>
            
          </div>
        </div>
       
		 <span class="fa fa-info form-control-feedback" id="match">
         @if(session('success'))
          <font color="blue">{{session('success')}}</font>
         @endif 
         @if(session('error')) 
          <font color="red">{{session('error')}}</font>
         @endif
      </span>
		 
        <div class="row">
         
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block ">Enregistrer</button>
          </div>
           <div class="col-6">
            <span type="" class="btn btn-danger btn-block "><a href="/admin_dashboard"><font color="white">Retour</a></font></span>
          </div>
          <!-- /.col -->
        </div>
      </form>
@endsection