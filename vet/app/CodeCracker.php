<?php

namespace App;

class CodeCracker
{
    private $codeBank;
    private $resultCode = "";

    public function __construct(string $code)
    {
        $this->codeBank = str_replace(" ", "", $code);
    }

    public function decrypt(string $codeInput)
    {
        for ($y = 0; $y < strlen($codeInput); $y++) {
            if ($codeInput[$y] === " ") {
                $this->resultCode .= " ";
            } else {
                for ($i = 0; $i < strlen($this->codeBank); $i++) {
                    if ($codeInput[$y] === $this->codeBank[$i]) {
                        $this->resultCode .= chr($i + 97);
                    }
                }
            }
        }
        return $this->resultCode;
    }
}
