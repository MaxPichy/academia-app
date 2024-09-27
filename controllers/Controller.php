<?php

    class Controller {

        protected function model($model) {
            require_once "../models/" .$model .".php";

            return new $model();
        }

        protected function view($view, $data = []) {
            if(file_exists("../views/" .$view . ".php")) {
                if(!empty($data)) {
                    extract($data);
                }

                require_once "../views/" .$view .".php";
            } else {
                die("A view $view não existe.");
            }
        }
    }

?>