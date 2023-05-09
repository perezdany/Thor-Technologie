<?php
  
?>

@extends('layouts/base')

@section('title', config('app.name').' | Modification')

  @section('content')
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Espace client</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-user"></i> Modification</h4>
            <div class="widget-body">
              <div class="center-align">
                @php
                  use App\Controllers\ControllerRequesting;
                  use App\Models\Requesting;
                  if(isset($_GET['id']))
                  {
                    $req = Requesting::where('id_requesting', $_GET['id'])->first();
                  }

                @endphp
                <form class="form-horizontal form-signin-signup" method="post" action="/edit_request">
                  @csrf
                  <div style="display: none;"><input type="text" value="{{$req->id_requesting}}" name="id"></div>
                  <input type="text" name="device" placeholder="objet" value="{{$req->device}}" required>
                  <textarea name="object" required> {{$req->object}}</textarea>
                  <label>nombre</label>
                  <input type="number" name="number"  value="{{$req->number}}" min="1" max="200" required>
                 
                 
                  <div>
                    <input type="submit" value="Valider" class="btn btn-primary btn-large">
                  </div>
                </form>
          <div class="center-align">
            @if(session('success'))
            
            <font color="blue">{{session('success')}}</font>
            
            @endif

            @if(session('error'))
            
            <font color="red">{{session('error')}}</font>
            
            @endif
            </div>
         
                
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- End: MAIN CONTENT -->
  @endsection
  