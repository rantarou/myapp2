@component('mail::message')
# Thank you for your message

<strong>Name</strong> {{ $data['name'] }}<br>
<strong>Email</strong></strong> {{ $data['email'] }}<br>
<br>
<strong>Message</strong> 
{{ $data['message'] }}
@endcomponent
