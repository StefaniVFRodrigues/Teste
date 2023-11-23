<?php
    session_start();

    require("app/modules/config.php");

    function autoLoader($className){
        $className = str_replace('\\', '/', $className);
        $file =  __DIR__ . '/app/' . $className . '.php';
        require $file;
    }

    spl_autoload_register('autoLoader');

    /* SISTEMA DE ROTAS ANTIGO
    $url = explode('/',$_GET['url']);
    $controller = isset($url[0]) ? $url[0] : 'Home';
    $method = isset($url[1]) ? $url[1] : 'index';

    $controller = "\controllers\\".$controller."Controller";
    $controller = new $controller();
    $params = array();

    $controller->$method($params);
    */

    function render($controller, $method){
        $controller = "\controllers\\".$controller."Controller";
        $controller = new $controller();
        $controller->$method();
    }

    $route = '/'.$_GET['url'];

    switch ($route){
        case '/home':
            render('home', 'index');
            break;
        case '/login': 
            render('login', 'index'); 
            break;
        case '/login/validateLogin';
            render('login', 'validateLogin');
            break;
        case '/login/logout':
            render('login', 'logout');
            break;
        case '/signup';
            render('signup', 'index');
            break;
        case '/uploadMusic';
            render('uploadMusic', 'index');
            break;
        case '/visualizarPerfil';
            render('viewProfile', 'index');
            break;
        case '/playlist';
            render('listMusic', 'index');
            break;
        default:
            echo '404';
            break;
    }
