<?php

namespace App;

class FizzBuzz
{
    private $result = "";

    public function forNumber(int $number): string
    {

        if ($number % 3 === 0) {
            $this->result .= "Fizz";
        }

        if ($number % 5 === 0) {
            $this->result .= "Buzz";
        }

        if ($number % 7 === 0) {
            $this->result .= "Rarr";
        }

        if ($this->result === "") {
            $this->result = "{$number}";
        }

        return $this->result;
    }
}
