@extends('../layouts/adminview')

@section('title', config('app.name').' | Mon Espace')

@section('onglet', 'Déconnexion')
@section('content')
<div class="content">
  <!-- Start: PRODUCT LIST -->
  <div class="container">
    <div class="page-header">
     <h2>Bienvenue {{session('pseudo')}}.</h2> 
    </div>
    <div class="center-align">
      @if(session('success'))
      <font color="blue">{{session('success')}}</font>
      @endif 
      @if(session('error')) 
      <font color="red">{{session('error')}}</font>

      @endif
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
      <li class="">
        <a href="#">&laquo;</a>
      </li>
      <li class="">
        <a href="#">previous</a>
      </li>
      <li>
        <a href="#">next</a>
      </li>
      <li>
        <a href="#">&raquo;</a>
      </li>
    </ul>
  </div>
</div><!-- End: PRODUCT LIST -->


<div class="container">
 <div class="row">
  <div class="span6 offset3">
   <h4 class="widget-header"><i class="icon-beaker"></i>Actions</h4>
   <div class="widget-body">
    <div class="center-align">
     <button class="btn btn-primary btn-large" ><a href="add_customer"><font color="#FFF6F6">Inscrire un client</font></a></button>&nbsp;&nbsp;&nbsp;
     <button class="btn btn-primary btn-large" ><a href="add_request"><font color="white">Ajouter une requête</font></a></button>
   </div>
 </div>
</div>
</div>
</div>
</div>


@endsection