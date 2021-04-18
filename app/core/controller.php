<?php
namespace news\core;

class controller
{
    // this lochione folder viwes

    public function view($path,$parm)
    {
    
        extract($parm);
        require_once(VIEWS.$path.".php");
    }
}