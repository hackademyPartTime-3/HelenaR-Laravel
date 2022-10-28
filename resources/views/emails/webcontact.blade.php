@component('mail::message')
<style>
    i{color:blueviolet}
    b{text-decoration: underline}
</style>
<p>Mensaje desde la web</p>
<p>El visitante <i>{{$name}}<i> &lt;{{$email}}&gt; ha preguntado</p>
<p> {{$webSubject}}</p> 
<p> {{$body}}</p>  
@endcomponent


