@component('mail::message')
# Your Transaction has been confirmed

Hi {{ $checkout->User->name }}

<br>
Your Transaction has been confirmed now you can enjoy your benefits of  <b>{{ $checkout->Camp->title }}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
