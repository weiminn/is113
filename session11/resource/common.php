<?php
date_default_timezone_set('Asia/Singapore');

/***
to auto-load class definitions from PHP files
***/
spl_autoload_register(function($class) {
    $path = "./model/" . $class . ".php";
    require_once $path; 
    
});

/***
default handler for uncatch exceptions
***/

set_exception_handler(function($ex){
    $details = [ 
            "exception" => [
                "message" => $ex->getMessage(), 
                "file" => $ex->getFile(), 
                "line" => $ex->getLine(),
                "trace" => $ex->getTrace()
            ]
        ];
    
    Logger::log( "Unhandled Application Exception", $details );
    
    header("Location: error.php");
});

