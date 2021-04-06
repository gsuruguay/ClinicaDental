@extends('template.template')

@section('title', 'Clinica Dental - Planes')

@section('content-head')
<h1>Planes</h1>
<h3>Elige algun plan que se ajuste a tus necesidades, en Clinica Catalina hemos pensado desde los mas pequeños hasta los mas grandes.</h3>
@endsection

@section('content')
<div class="planscontainer">
    <div class="singleplans">
        <div class="fondimage">
            <div id="planFamiliar" class="fondimagebg"></div>
        </div>
        <div class="planstext">
            <h2>Plan Familiar</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque illo nulla velit dicta, dolorem nobis quos deleniti ea magni fugiat incidunt eos necessitatibus tempora perferendis distinctio, quaerat a optio ducimus!</p>
            <a href="#">Comprar</a>
        </div>
        <div class="priceContent">
            <p>$29.999</p>
        </div>
    </div>
    <div class="singleplans">
        <div class="priceContent priceContent-l">
            <p>$13.999</p>
        </div>
        <div class="planstext">
            <h2>Plan Niños</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque illo nulla velit dicta, dolorem nobis quos deleniti ea magni fugiat incidunt eos necessitatibus tempora perferendis distinctio, quaerat a optio ducimus!</p>
            <a href="#">Comprar</a>
        </div>
        <div class="fondimage">
            <div id="planPeque" class="fondimagebg fondimagebg-r"></div>
        </div>
    </div>
    <div class="singleplans">
        <div class="fondimage">
            <div id="planAdult" class="fondimagebg"></div>
        </div>
        <div class="planstext">
            <h2>Plan Adultos</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque illo nulla velit dicta, dolorem nobis quos deleniti ea magni fugiat incidunt eos necessitatibus tempora perferendis distinctio, quaerat a optio ducimus!</p>
            <a href="#">Comprar</a>
        </div>
        <div class="priceContent">
            <p>$12.999</p>
        </div>
    </div>

</div>
@endsection