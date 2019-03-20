<?php

class Logger {
    // write to log files
    static function log($message, $details = null) {
        $arr["datetime"] = date_default_timezone_get() . " " . date("Y-m-d") . "T" . date("H:i:s");
        $arr["URI"] = $_SERVER['REQUEST_URI'];
        $arr["query string"] = $_SERVER['QUERY_STRING'];
        $arr["message"] = $message;
        
        
        if ( !is_null($details) && !empty($details)) {
            $arr["details"] = $details;
        }
        
        $log_message = json_encode( $arr, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT) . "\r\n";
                
        error_log($log_message, 3, $_SERVER['DOCUMENT_ROOT'] . "/../logs/contact.log");
    }
}

