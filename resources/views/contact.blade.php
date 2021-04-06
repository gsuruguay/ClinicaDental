@extends('template.template')

@section('title', 'Clinica Dental - Nosotros')

@section('content-head')

<h1>¡Contactanos!</h1>
<h3>Mantener informados a nuestros clientes es una prioridad</h3>

@endsection
<?php 
$nameClass = ''; 
$name = "Ingrese Nombre Completo";
$emailClass = ''; 
$email = "Ingrese Correo";
$rutClass = ''; 
$rut = "Ingrese RUT";
$descClass = ''; 
$desc = "Descripcion";
?>

@if ($errors->any())

<?php 
if($errors->has('name')) {$name = $errors->first('name');$nameClass = 'error';$errornamedetect = '';}
if($errors->has('email')) {$email = $errors->first('email');$emailClass = 'error';$erroremaildetect = '';}
if($errors->has('rut')) {$rut = $errors->first('rut');$rutClass = 'error';$errorrutdetect = '';}
if($errors->has('description')) {$desc = $errors->first('description');$descClass = 'error';}


?>

@endif

@section('content')
<div class="contactform">
    <h2>Un comentario, una consulta, una opcion, para Clinica Catalina todo vale.</h2>
    <form action="{{route('contact.send')}}" method="POST">
        @csrf
        <input type="text" name="name" class="{{$nameClass}}" placeholder="{{$name}}" value="{{ $errorname ?? old('name')}}">
        <input type="text" name="email" class="{{$emailClass}}" placeholder="{{$email}}" value="{{ $erroremaildetect ?? old('email') }}">
        <input type="text" name="rut" class="{{$rutClass}}" placeholder="{{$rut}}" value="{{ $errorrutdetect ?? old('rut') }}">
        <textarea name="description" class="{{$descClass}}" cols="30" rows="10" placeholder="{{$desc}}">{{ old('description') }}</textarea>
        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
        <input type="submit" value="Enviar" id="btncontact">
    
    </form>
</div>

@if (session('info'))
        <script>
            alert('{{session('info')}}');
        </script>
@endif
    
@endsection