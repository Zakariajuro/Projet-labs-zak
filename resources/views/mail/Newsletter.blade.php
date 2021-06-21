@component('mail::message')
# Introduction

<h2>Email : {{ $mail->mail }}</h2>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
