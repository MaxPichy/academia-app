<?php

    if(isset($_GET["controller"]) && isset($_GET["action"])) {
        $controller = $_GET["controller"];
        $action = $_GET["action"];

        require_once "app/controllers/{$controller}.php";
        $controllerObject = new $controller();
        $controllerObject->$action();
    } else {
        echo "Página inicial da Academia";
    }

?>