<?php 

namespace App\Core;

class Redirect{
    public static function back(){
        $previous = 'javascript:history.go(-1)';
        return header('Location: '.$previous);
    }
}