<?php

namespace App;

class Math
{
        public function add(float $a, float $b): float
    {
        return $a + $b;
    }


    public function sub(float $a, float $b): float
    {
        return $a - $b;
    }

    public function mul(float $a, float $b): float
    {
        return $a * $b;
    }

    public function div(float $a, float $b): float
    {
        if ($b == 0.0) {
            throw new \InvalidArgumentException('Division by zero');
        }

        return $a / $b;
    }

}
