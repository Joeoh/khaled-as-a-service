<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 24/09/2016
 * Time: 13:23
 */

namespace Kaas\Haters;

class PowersThatBe implements They
{
    //2% chance of no success, fuck the haters
    const percentageChanceOfNoSuccess = 2;


    /**
     * @return bool
     */
    public function dontWantYouToSucceed(): bool
    {
        $diceRoll = rand(0,100);

        if($diceRoll < self::percentageChanceOfNoSuccess) {
            return true;
        }

        return false;
    }
}