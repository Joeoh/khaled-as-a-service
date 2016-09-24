<?php
namespace Kaas\Controllers;

use Kaas\Models\Quote;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Created by PhpStorm.
 * User: joe
 * Date: 24/09/2016
 * Time: 16:40
 */
class QuotesController extends BaseController
{
    public function getRandomQuote() : Quote
    {
        $count = Quote::count();
        if ($count > 0) {
            $diceRoll = rand(1, $count);
            return Quote::where("id",$diceRoll)->get();
        }

        return null;
    }
}