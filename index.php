<?php

    if (!isset($_COOKIE['1']) && !isset($_COOKIE['2']) && !isset($_COOKIE['3'])) {
        header('Location: /home');
        exit();
    } else {
        header('Location: /home');
        exit();
    }