<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your name">

    <title>Thor Technologie </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">

    <style type="text/css">
      .invisible{
        display: none;
      }
    </style>

  </head>
<body > 
   <div class="content">
      <div class="container">
       
        <div class="row">
          <div class="span6">
            <h4 class="widget-header">Merci de ne pas répondre a ce mail</h4>
            <div class="widget-body">
              <div class="center-align">
                <p>
                    Bonjour cher client, pour valier votre inscription, vuelez cliquer sur le bouton suivant:
                </p>
               <div>
                    <a href="{{env('APP_URL')}}:8000/confirm/{{$data['id']}}/{{$data['token']}}"><input type="submit" value="Valider" class="btn btn-primary btn-large"></a>
                </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

