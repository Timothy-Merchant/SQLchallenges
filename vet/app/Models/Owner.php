<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'telephone',
        'email',
        'address_1',
        'address_2',
        'town',
        'postcode',
    ];

    public static function emailAlreadyExists($user, $email): string
    {
        if ($user->email === $email) {
            return "Email already exists";
        } else {
            return "Email doesnt exist";
        }
    }

    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        } else if ($number === 1) {
            return "Yes we have {$number} banana";
        }

        return "Yes we have {$number} bananas";
    }

    public function fullName(): string
    {
        return $this->first_name;
    }

    public function fullAddress(): string
    {
        return "{$this->address_1}, {$this->address_2}";
    }

    public function formattedPhoneNumber(): string
    {
        $phoneNumber = preg_replace('/[^0-9]/', '', $this->telephone);

        $areaCode = substr($phoneNumber, 0, 4);
        $nextThree = substr($phoneNumber, 4, 3);
        $lastFour = substr($phoneNumber, 7, 4);

        $phoneNumber = "{$areaCode} {$nextThree} {$lastFour}";

        return $phoneNumber;
    }
}
