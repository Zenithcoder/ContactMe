@component('mail::message')
# Introduction
 There is new query from {{$name}}
 
 MEssage
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
