<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\CodeCracker;

class CodeCrackerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // a b c d e f g h i j k l m n o p q r s t u v w x y z
    // ! ) # ( . * % & > < @ a b c d e f g h i j k l m n o

    // public function test_one()
    // {
    //     $cracker = new CodeCracker("!");
    //     $this->assertSame('a', $cracker->decrypt("!"));
    // }

    // public function test_two()
    // {
    //     $cracker = new CodeCracker("!)");
    //     $this->assertSame("!)", $cracker->getCodeBank());
    // }

    // public function test_four()
    // {
    //     $cracker = new CodeCracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
    //     $this->assertSame("!)#(.*%&><@abcdefghijklmno", $cracker->getCodeBank());
    // }

    // public function test_five()
    // {
    //     $cracker = new CodeCracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
    //     $this->assertSame("abcdefghijklmnopqrstuvwxyz", $cracker->decrypt("a b c d e f g h i j k l m n o p q r s t u v w x y z"));
    // }

    // public function test_six()
    // {
    //     $cracker = new CodeCracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
    //     $this->assertSame("abcdefghijklmnopqrstuvwxyz", $cracker->decrypt("a b c d e f g h i j k l m n o p q r s t u v w x y z"));
    // }

    public function test_seven()
    {
        $cracker = new CodeCracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("abc", $cracker->decrypt("!)#"));
    }

    public function testFull()
    {
        $cracker = new CodeCracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("hello mum", $cracker->decrypt("&.aad bjb"));
    }
}
