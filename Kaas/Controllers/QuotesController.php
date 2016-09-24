<?php
namespace Kaas\Controllers;

use Illuminate\Http\Response;
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

    public static function getResponse() : Response {
        $quote = self::getRandomQuote();
        if($quote === null){
            return response(["error" => "No quotes found"], 404);
        }
        return response($quote->toJson());
    }


    private static function getRandomQuote() : Quote
    {
        $count = Quote::count();
        if ($count > 0) {
            $diceRoll = rand(1, $count);
            return Quote::find($diceRoll);
        }

        return null;
    }
}