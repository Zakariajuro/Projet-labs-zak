@component('mail::message')
Bonjour,

Un compte vous a été attribué sur TheLabs.com
Veuillez attendre l'activation de votre compte. 
Ci-dessous votre mot de passe par défaut: 

{{ 'labs2021' }}

Vous recevrez une notification quand votre compte sera activé.

@component('mail::button', ['url' => ''])
Confirmer
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
