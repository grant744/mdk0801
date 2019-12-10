<?php
class jquery
{
    public function use($argument = '3-4-1')
    {
        switch ($argument)
        {
            case '3-4-1':
            echo '<script type="text/javascript" src="system/basic_components/jquery/jquery-3-4-1.js"></script>';
            break;
        }
    }
}

$jquery = new jquery;
?>
