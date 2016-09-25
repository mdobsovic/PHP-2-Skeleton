<?php

    function nazov_suboru()
    {
        $pole = explode('/', $_SERVER['SCRIPT_NAME']);
        return end($pole);
    }