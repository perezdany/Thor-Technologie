@component('mail::message')
# A ne pas répondre!
  
Merci de ne pas répondre à ce mail.

L'utilisateur {{$data['nom']}} {{$data['prenom']}} a soumis une requête.<br> Identifiant de la requête: {{$data['id']}} à {{$data['time']}}<br> Merci de consulter votre espace administrateur.


Cordialement,<br>
{{ config('app.name') }}
@endcomponent
