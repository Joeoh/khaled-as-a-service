<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 24/09/2016
 * Time: 13:21
 */

namespace Kaas\Haters; 

interface They
{
    /**
     * Returns true when the powers that be do not want you to be successful and as such will not follow
     * you on your journey to more success. 
     * 
     * @return bool
     */
    public function dontWantYouToSucceed(): bool;
}