@extends('template.template')

@section('title', 'Clinica Catalina - Home')

@section('content-head')
<h1>Expertos en medicina bucal</h1>
<h2>Ofrecemos planes anuales con una gran cantidad de servicios</h2>
<h3>¡Primera evaluacion gratis!</h3>
<a class="planLink" href="#">Ver Planes</a>
@endsection

@section('content')

<div class="servicios-content">
    <h1>Nuestros servicios</h1>
    <p>Ofrecemos servicios especialisados con la mas alta tecnologia en la actualidad con sosfiticados metodos
    </p>
    <div class="servicios-content-content">
        <div class="servicios-med">
            <img src="./img/Endodontics.jpg" alt="">
            <h1>Endodoncia</h1>
            <p>Eliminacion de enfermedades que afectan la pulpa de los dientes con avanzadas tecnicas medicas.
            </p>
        </div>

        <div class="servicios-med">
            <img src="./img/periodoncia.jpg" alt="">
            <h1>Periodoncia</h1>
            <p>Eliminacion de enfermedades que afectan la pulpa de los dientes con avanzadas tecnicas medicas.
            </p>
        </div>

        <div class="servicios-med">
            <img src="./img/implante.jpg" alt="">
            <h1>Implantes</h1>
            <p>Eliminacion de enfermedades que afectan la pulpa de los dientes con avanzadas tecnicas medicas.
            </p>
        </div>

        <div class="servicios-med">
            <img src="./img/odontopediatria.jpg" alt="">
            <h1>Ontopediatria</h1>
            <p>Eliminacion de enfermedades que afectan la pulpa de los dientes con avanzadas tecnicas medicas.
            </p>
        </div>

        <div class="servicios-med">
            <img src="./img/rehabilitacion.jpg" alt="">
            <h1>Rehabilitacion</h1>
            <p>Eliminacion de enfermedades que afectan la pulpa de los dientes con avanzadas tecnicas medicas.
            </p>
        </div>

        <div class="servicios-med">
            <img src="./img/ortodoncia.jpg" alt="">
            <h1>Ortodoncia</h1>
            <p>Eliminacion de enfermedades que afectan la pulpa de los dientes con avanzadas tecnicas medicas.
            </p>
        </div>

        <div class="servicios-med">
            <img src="./img/blanqueamiento.jpg" alt="">
            <h1>Blanqueamiento</h1>
            <p>Eliminacion de enfermedades que afectan la pulpa de los dientes con avanzadas tecnicas medicas.
            </p>
        </div>
    </div>
</div>

<div class="title-doctprof">
    <h2>Nuestros Odontologos</h2>
    <p>Experimentados doctores expertos en la odontologia y servicios a fines.</p>

    <div class="doctosprofile">
        <div class="doctosprofile-info">
            <div class="profilePhoto doct1"></div>
            <h4> Elizabeth Gonzales</h4>
            <h5>Especialista en implantes, cirujias & tratamiento odontologico</h5>
        </div>
        <div class="doctosprofile-info">
            <div class="profilePhoto doct2"></div>
            <h4>Monica Alvarado</h4>
            <h5>Especialista en implantes, Blanqueamiento cirujias & tratamiento odontologico</h5>
        </div>
        <div class="doctosprofile-info">
            <div class="profilePhoto doct3"></div>
            <h4>Luz Fereira</h4>
            <h5>Especialista en implantes, cirujias & tratamiento odontologico</h5>
        </div>
    </div>
</div>
    
@endsection