@component('mail::message')
    Hello {{ $mail_user->name }}
    <p>We understande it happens.</p>
    @component('mail::button', ['url' => url('reset/' . $mail_user->remember_token)])
        Reset Your Password
    @endcomponent
    <p>In case you have any issues recovering your password, please contact us.</p>
    Thanks,<br />
    {{ config('app.name') }}
@endcomponent
