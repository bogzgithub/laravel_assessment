
@component('mail::message')
Hello User,

Information for the Event as Follow:
Name : <b>{{ $name }}</b> <br/>
Slug : <b>{{ $slug }}</b> <br/>
Start At : <b>{{ $startAt }}</b> <br/>
End At : <b>{{ $endAt }}</b> <br/>

Sincerely, <br/>
Events team.
@endcomponent