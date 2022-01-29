<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function soma($num1, $num2)
    {
        $soma = $num1 + $num2;
        logger()->info('Soma feita');
        return $soma;
    }

    public function sub($num1, $num2)
    {
        $sub = $num1 - $num2;
        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $sub]);

        // return $num1 . ' - ' . $num2 . '  sub =  '  . $sub;
    }

    public function div($num1, $num2)
    {
        if($num2 == 0)
        {
            logger()->error('Divisor zero!');
            return 'Divisor = 0';
        }
        logger()->info('Div feita');
        $div = $num1 / $num2;
        return $div;
    }

    public function mult($num1, $num2)
    {
        if($num1 < 0 || $num2 < 0)
        {
            logger()->warning('Negativo');
            return 'Algum dos números = 0';
        }
        $mult = $num1 * $num2;
        return $mult;
    }

    
}
