

@if($msg = Session::get ('success'))
<div id="mensaje" class="msg">
{{$msg}}
</div> 
@endif

@if($msg = Session::get ('error'))
<div id="mensajeError" class="msgError">
{{$msg}}
</div> 
@endif