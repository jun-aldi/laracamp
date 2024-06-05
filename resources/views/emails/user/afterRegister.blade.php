@component('mail::message')
# Introduction

Hi {{ $user->name }}
<br>
Welcome to Laracamp, your account has been created successfuly, Now you can choose your best match camp!

@component('mail::button', ['url' => route('login')])
Login to Laracamp
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
