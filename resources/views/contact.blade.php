@extends('template.template')

@section('title', 'Clinica Dental - Nosotros')

@section('content-head')

<h1>¡Contactanos!</h1>
<h3>Mantener informados a nuestros clientes es una prioridad</h3>

@endsection

@section('content')
<div class="contactform">
    <h2>Un comentario, una consulta, una opcion, para Clinica Catalina todo vale.</h2>
    <form action="{{route('contact.send')}}">
        <input type="text" name="name" id="name" placeholder="Nombre">
        <input type="text" name="email" id="email" placeholder="Correo">
        <input type="text" name="rut" id="rut" placeholder="RUT">
        <textarea name="description" id="descripcion" cols="30" rows="10" placeholder="Descripcion"></textarea>
        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
        <input type="button" value="Enviar" id="btncontact">
    
    </form>
</div>
    
@endsection