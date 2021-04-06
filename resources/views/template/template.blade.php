<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/all.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const uluru = {
            lat: -33.4639113,
            lng: -70.5621901
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }
    </script>
</head>

<body>
    <div class="reservaHora">
        <div class="clock"></div>
        <p>Tenemos horarios de atencion desde las 8:00 AM a 6:00 PM</p>
        <a href="#">Agendar Hora</a>
    </div>
    <div class="headermenu">
        <div class="headermen">

            <ul>
                <li id="menuicon"><span class="menuicon"><a href="#"></a></span>
                    <ul id="menu-mobile" class="d-none">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('plans')}}">Planes</a></li>
                        <li><a href="{{route('contact.index')}}">Contacto</a></li>
                        <li><a href="{{route('about')}}">Nosotros</a></li>
                    </ul>
                </li>
                <li><a href="#"><i style="color:black" class="far fa-calendar-alt"></i> Agendar Hora</a></li>
                <li class="i-sesion"><a href="#"><i style="color:black" class="fas fa-chevron-down fa-xs"></i>
                        Servicios</a>
                    <ul class="d-none">
                        <li><a href="#">Odontologia <i style="color:black" class="fas fa-chevron-left fa-xs"></i></a>
                        </li>
                        <li><a href="#">Ortodoncia <i style="color:black" class="fas fa-chevron-left fa-xs"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="i-sesion"><a id="iniciar-sesion" href="#"><i style="color:black"
                            class="fas fa-chevron-down fa-xs"></i> Ingresar</a>
                    <ul class="d-none">
                        <li><a href="#">Iniciar Session <i style="color:black"
                                    class="fas fa-chevron-left fa-xs"></i></a></li>
                        <li><a href="#">Registrarse <i style="color:black" class="fas fa-chevron-left fa-xs"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="maincontainer">
        <div class="slider">
            <nav>
                <ul class="headernav">
                    <li class="logo"><a href="{{route('home')}}"></a></li>
                    <li><a href="{{route('home')}}" class="headeritem">Home</a></li>
                    <li><a href="{{route('plans')}}" class="headeritem">Planes</a></li>
                    <li><a href="#" class="headeritem">Medicos</a></li>
                    <li><a href="{{route('contact.index')}}" class="headeritem">Contacto</a></li>
                    <li><a href="{{route('about')}}" class="headeritem">Nosotros</a></li>
                </ul>
            </nav>
            <div class="headertex">@yield('content-head')</div>
            

        </div>


        @yield('content')


    </div>

    <div class="footer">
        <ul>
            <li class="footerLinks"><i class="fas fa-chevron-down fa-xs footerblock"></i>
                <a class="footerLinks" href="javascript:void(0)">Clinica</a>
                <ul class="footerdropdown fdropdownnone">
                    <li><a href="#">Planes</a></li>
                    <li><a href="#">Odontologos</a></li>
                    <li><a href="#">Nosotros</a></li>
                </ul>
            </li>
            <li class="footerLinks"><i class="fas fa-chevron-down fa-xs footerblock"></i>
                <a href="javascript:void(0)">Servicios</a>
                <ul class="footerdropdown fdropdownnone">
                    <li><a href="#">Endodoncia</a></li>
                    <li><a href="#">Periodoncia</a></li>
                    <li><a href="#">odontopediatria</a></li>
                    <li><a href="#">Rehabilitacion</a></li>
                    <li><a href="#">Ortodoncia</a></li>
                    <li><a href="#">Implantes</a></li>
                    <li><a href="#">Blanqueamiento</a></li>
                </ul>
            </li>
            <li class="footerLinks"><i class="fas fa-chevron-down fa-xs footerblock"></i>
                <a href="javascript:void(0)">Contacto</a>
                <ul class="footerdropdown fdropdownnone">
                    <li class="fas fa-map-marked-alt"> <p>Avenida Providencia 3335.</p></li>
                    <li class="fas fa-phone-square-alt fa-w-14"> <p>2 2224 93840</p></li>
                    <li class="fab fa-whatsapp"> <p>+56 999 046 425</p></li>
                    <li class="fas fa-envelope"> <p>contacto@clinicacatalina.cl</p></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">Ubicacion</a>
                <div id="map"></div>
            </li>
        </ul>

    </div>
    <div class="derechos">
        <p>Clinica Odontologica Catalina @ 2020 - Todos los derechos reservado</p>
        <a href="#" class="fab fa-facebook-square"></a>
        <a href="#" class="fab fa-twitter-square"></a>
        <a href="#" class="fab fa-instagram-square"></a>
    </div>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTjFm00eSKZZmoxQrZwM_9Y385zr11S2Q&callback=initMap">
    </script>

    <script src="./js/index.js" type=module></script>
</body>

</html>