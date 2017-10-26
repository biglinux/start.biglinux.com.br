<?php

    require 'vendors/flight/Flight.php';

    Flight::render('header', [], 'header');
    Flight::render('menu', [], 'menu');
    Flight::render('footer', [], 'footer');

    Flight::route('/', function(){
        Flight::render('index.php');
    });

    Flight::route('/search/@keyword', function($keyword){
        $keyword = htmlentities($keyword);

        $api  = "https://duckduckgo.com/";
        $api .= "?q={$keyword}";    # search
        $api .= "&kp=-1";           # safe
        $api .= "&kh=-1";           # https
        $api .= "&kg=g";            # get
        $api .= "&kd=1";            # redirect
        $api .= "&k5=-1";           # video
        $api .= "&ko=-2";           # header
        $api .= "&k1=-1";           # ads
        $api .= "&kv=1";            # page
        $api .= "&kam=google-maps"; # direction
        $api .= "&ia=web";          # search type
        $api .= "&kn=1";            # new Window
        $api .= "&kae=-1";          # theme

        Flight::render('search.php', ['api'=>$api, 'keyword'=>$keyword]);
    });

    Flight::start();
