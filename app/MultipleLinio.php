<?php

namespace App;

class MultipleLinio 
{

    public function numberIsmultipleLinio($number)
    {
        $msg = $number;

        $multipleOf3 = $number % 3;

        $multipleOf5 = $number % 5;

        while (!$multipleOf3) { $msg = 'Linio'; break; }

        while (!$multipleOf5) { $msg = 'IT'; break; }

        while (!$multipleOf3 && !$multipleOf5) { $msg = 'Linianos'; break; }

        return $msg;
    }
    
}
