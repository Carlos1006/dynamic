<!DOCTYPE HTML>
<html>

<head>
    <title>Dynamic Simulation</title>
    <!--<link rel="shortcut icon" href="http://example.com/myicon.ico" />-->
    <link rel="icon" type="image/png" href="rsc/img/dynamic18x18.png" />
    <?php include( "include/metas.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/resp.css" />
    <script src="js/libs/jquery-3.0.0.min.js"></script>
    <script src="js/libs/jquery-ui.js"></script>
    <script src="js/libs/three.js"></script>
    <script src="js/libs/particles.js"></script>
    <script src="js/libs/OBJLoader.js"></script>
    <script src="js/libs/app.js"></script>
    <script src='js/responsive.js'></script>
    <script src='js/main.js'></script>
    <script src='js/linker.js'></script>
</head>

<body>
<?php include( "include/header.php"); ?>
<div id="scroller">
    <div class="scroller_item" index="0" selected>
        <label>01</label>
    </div>
    <div class="scroller_item" index="1">
        <label>02</label>
    </div>
    <div class="scroller_item" index="2">
        <label>03</label>
    </div>
    <div class="scroller_item" index="3">
        <label>04</label>
    </div>
    <div class="scroller_item" index="4">
        <label>05</label>
    </div>
    <div class="scroller_item" index="5">
        <label>06</label>
    </div>
</div>
<div id="main" class="col_1 container">
    <div id="videoContainer">
        <video src="rsc/video/572605547.webm" autoplay loop></video>
    </div>
    <div class="darkWall"></div>
    <article class="margin">
        <div class="mainContainer col_1">
            <div id="message"> <span id="top">Los mejores simuladores de vehiculos pesados Con la mejor tecnología e innovación</span> <span id="bottom">En Dynamic Simulation somos especialistas en el desarrollo de soluciones formativas de altas prestaciones basadas en la simulación, garantizando la seguridad en el proceso de aprendizaje y certificación, incrementando así la productividad.</span>
                <br> <a href="simuladores/">Ver más</a> </div>
        </div>
    </article>
</div>
<div id="tech" class="col_1 container">
    <article class="margin">
        <div id="tech_band" class="tech_item"></div>
        <div id="tech_road" class="tech_item"></div>
        <div id="tech_simu" class="tech_icon col_2"></div>
        <div class="mainContainer col_2">
            <div id="tech_message"> <span id="tech_title">La más <label class="blue">alta tecnología</label><br> de <label class="blue">simuladores</label> en méxico</span> <span id="tech_subtitle">Contamos con simuladores que recrean la conducción de camión, camión articulado, camión doblemente articulado, autobús y camión cisterna. Nuestro servicio integral incluye software, hardware y plan didáctico con un excelente servicio de Post-Venta.<br>                            <span class="tech_row">                                <span class="col_2">Sofware en Español</span> <span class="col_2">Capacitación todo incluido</span> <span class="col_2">Señalética Mexicana</span> <span class="col_2">Reglamento de Tránsito General</span> <span class="col_2">Opciones de Financiamiento</span> <span class="col_2">Resultados Óptimos</span> </span> <a href="simuladores/">Ver más</a> </div>
        </div>
    </article>
</div>
<div id="why" class="col_1 container">
    <div id="particles-js"></div>
    <div class="darkWall"></div>
    <div id="renderContainer"></div>
    <article class="margin">
        <div class="mainContainer">
            <div id="why_message"> <span id="why_title">¿Por qué usar los <br>simuladores simestruck?</span>
                <ul>
                    <li>
                        <label>Cumple los requerimientos establecidos por la SCT para la obtención y renovación de Licencia Federal.</label>
                    </li>
                    <li>
                        <label>Permite la práctica de situaciones de riesgo, imposibles de practicar en la vida real.</label>
                    </li>
                    <li>
                        <label>La formación con simuladores reduce el riesgo de accidentes.</label>
                    </li>
                    <li>
                        <label>Aumenta el rendimiento y capacidad de sus operadores.</label>
                    </li>
                    <li>
                        <label>Cuenta con bitácora de resultados por operador.</label>
                    </li>
                    <li>
                        <label>Reduce costos de operación y uso de equipo de transporte.</label>
                    </li>
                </ul> <a href="simuladores/">Ver simuladores</a> </div>
        </div>
    </article>
</div>
<div id="sim" class="col_1 container">
    <div class="darkWall"></div>
    <article class="margin">
        <div class="mainContainer">
            <div id="sim_message"> <span id="sim_title">Simuladores para<br> vehículos pesados</span> <span id="sim_subtitle">                            Contamos con la simulación de diferentes vehículos en un mismo <br>                             para evaluar y certificar las aptitudes de un conductor de vehículos pesados. <br>                            Los distintos vehiculos que se pueden elegir son:                        </span>
                <ul>
                    <li>
                        <label>Panel</label>
                    </li>
                    <li>
                        <label>Auto Bus Urbano</label>
                    </li>
                    <li>
                        <label>Auto Bus Foráneo</label>
                    </li>
                    <li>
                        <label>Auto Bus Urbano Articulado (BRT)</label>
                    </li>
                    <li>
                        <label>Auto Bus Urbano Doblemente Articulado (BRT)</label>
                    </li>
                    <li>
                        <label>Camión Unitario</label>
                    </li>
                    <li>
                        <label>Tracto Camión Articulado</label>
                    </li>
                    <li>
                        <label>Tracto Camión Doblemente Articulado</label>
                    </li>
                    <li>
                        <label>Camión Auto Tanque Unitario</label>
                    </li>
                    <li>
                        <label>Camión Auto Tanque Articulado</label>
                    </li>
                </ul> <a href="simuladores/">Ver simuladores</a> </div>
        </div>
    </article>
</div>
<div id="soft" class="col_1 container">
    <article class="margin">
        <div class="mainContainer">
            <div id="soft_message"> <span id="soft_title">                            Nuestro software socrates es la <br>                             formación más segura y sostenible                        </span> <span id="soft_subtitle">                            Controle e interactúe con el simulador y el usuario en tiempo real. Puede configurar y alterar parámetros de la                            simulación como:                        </span>
                <ul>
                    <li>
                        <div class="image_section"></div>
                        <div class="title_section">
                            <label>Alterar distintas condiciones
                                <br>climatológicas.
                                <br>&nbsp;</label>
                        </div>
                    </li>
                    <li>
                        <div class="image_section"></div>
                        <div class="title_section">
                            <label>Alterar el momento
                                <br> del dia.
                                <br>&nbsp;</label>
                        </div>
                    </li>
                    <li>
                        <div class="image_section"></div>
                        <div class="title_section">
                            <label>Alterar los parámetros
                                <br> de carga.
                                <br>&nbsp;</label>
                        </div>
                    </li>
                    <li>
                        <div class="image_section"></div>
                        <div class="title_section">
                            <label>Provocar averías.
                                <br>&nbsp;
                                <br>&nbsp;</label>
                        </div>
                    </li>
                    <li>
                        <div class="image_section"></div>
                        <div class="title_section">
                            <label>Provocar eventos en
                                <br> la carretera.
                                <br>&nbsp;</label>
                        </div>
                    </li>
                    <li>
                        <div class="image_section"></div>
                        <div class="title_section">
                            <label>Generar reportes para
                                <br>la toma de decisiones.
                                <br> <a class="no-btn">Ver ejemplo</a>
                            </label>
                        </div>
                    </li>
                </ul> <a href="simuladores/">Ver más</a> </div>
        </div>
    </article>
</div>
<div id="contact_" class="col_1 container">
    <article class="margin">
        <div id="background"></div>
        <div class="mainContainer">
            <div id="contact_message"> <span id="contact_title">                            Experiencia en                            <br>                            <span class="blue">autotransporte</span> </span> <span id="contact_subtitle">                            Contamos con personal altamente calificado para                             <br>                            poder ofrecerle las mejores soluciones en                             <br>                            simuladores en todo México.                        </span> <a href="nosotros/">Quienes somos</a> <span id="contact_title">                            Interesados en los                            <br>                            <span class="blue">Simuladores Simestruck</span> </span> <span id="contact_subtitle">                            Envíenos un mensaje con sus dudas o comentarios<br>                            acerca de los Simuladores Simestruck. Le <br>                            responderemos a la brevedad posible.                        </span> <a href="contacto/" black>Contacto</a> </div>
        </div>
    </article>
    <footer> <span class="spanMiddle" id="foot_dynamic" class="white">© DYNAMIC SIMULATION 2016</span> <span class="spanMiddle" id="foot_mailContacto">Powered by <span class="white">Lotus</span></span> <span class="spanMiddle" id="foot_telefono">Aviso de Privacidad</span> </footer>
</div>
</body>

</html>