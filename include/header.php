<?php
$page = trim(basename(dirname($_SERVER['PHP_SELF'])));
$href = array(
    "dynamic" => null,
    "nosotros" => null,
    "simuladores" => null,
    "contacto" => null
);
$attr = array(
    "dynamic" => null,
    "nosotros" => null,
    "simuladores" => null,
    "contacto" => null
);
$attr[$page] = "selected";
switch($page) {
    case "nosotros": {
        $href["dynamic"]     = "../";
        $href["nosotros"]    = "../nosotros/";
        $href["simuladores"] = "../simuladores/";
        $href["contacto"]    = "../contacto/";
    }break;
    case "simuladores": {
        $href["dynamic"]     = "../";
        $href["nosotros"]    = "../nosotros/";
        $href["simuladores"] = "../simuladores/";
        $href["contacto"]    = "../contacto/";
    }break;
    case "contacto": {
        $href["dynamic"]     = "../";
        $href["nosotros"]    = "../nosotros/";
        $href["simuladores"] = "../simuladores/";
        $href["contacto"]    = "./";
    }break;
    default: {
        $href["dynamic"]     = "./";
        $href["nosotros"]    = "nosotros/";
        $href["simuladores"] = "simuladores/";
        $href["contacto"]    = "contacto/";
    }break;
}
?>
<header id="header">
    <div class="col_1" id="contact">
        <span class="spanMiddle" id="mailContacto">contacto@dynamicsimulation.com.mx</span>
        <span class="spanMiddle" id="telefono">T. +52 (81) 8335 8514</span>
        <a class="spanMiddle" href="https://www.facebook.com/DynamicSimulation/" id="facebook"></a>
        <a class="spanMiddle" href="https://www.youtube.com/channel/UCBCgeNNmQ1f5nmkA5-pJ_LQ" id="twitter"></a>
    </div>
    <span class="col_2" id="dynamicIcon"></span>
    <a id="linkerToMain" href="<?php echo $href["dynamic"] ?>"></a>
    <div class="col_10 navIcon link" href="<?php echo $href["dynamic"] ?>"     <?php echo $attr["dynamic"] ?>     id="inicioIcon"><label>Inicio</label></div>
    <div class="col_10 navIcon link" href="<?php echo $href["nosotros"] ?>"    <?php echo $attr["nosotros"] ?>    id="nosotrosIcon"><label>Nosotros</label></div>
    <div class="col_10 navIcon link" href="<?php echo $href["simuladores"] ?>" <?php echo $attr["simuladores"] ?> id="simuladoresIcon"><label>Simuladores</label></div>
    <div class="col_10 navIcon link" href="<?php echo $href["contacto"] ?>"    <?php echo $attr["contacto"] ?>    id="contactoIcon"><label>Contacto</label></div>
</header>


