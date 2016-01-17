<?php
    class Header {
        public function index(){
            header("Location: https://todoapp-bigkbear.c9users.io/Views/layout/header/index.tpl");
            //redirect(getURL('Views/layout/header/', 'index'));
            die();

        }
    }
?>