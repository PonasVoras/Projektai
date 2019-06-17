@component('mail::message')
GDay, chap
Dont forget to : {{ $todo->title }}
o.O

Some useful details :
    {{ $todo->description }}

@component('mail::button', ['url' => '/home'])
Location : {{ $todo->location }}
@endcomponent

Stay planin<br>
{{ config('app.name') }}
@endcomponent
