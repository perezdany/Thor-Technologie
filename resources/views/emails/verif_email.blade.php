@component('mail::message')
# A ne pas répondre!
	
Merci de ne pas répondre à ce mail.

Bonjour cher client, veuillez cliquer sur le boutton pour confrmer que c'est bien votre email :

@component('mail::button', ['url' => $data['url'], 'color' => 'primary'])
Confirmer
@endcomponent

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
