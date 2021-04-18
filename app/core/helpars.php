<?php

namespace news\core;
class helpars 
{
    public static function reddirect($path)
    {
        header("LOCATION: http://mvc.test/".$path);
    
    }
}