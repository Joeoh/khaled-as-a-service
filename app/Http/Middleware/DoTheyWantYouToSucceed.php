<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 24/09/2016
 * Time: 13:51
 */

namespace App\Http\Middleware;

use Closure;
use Kaas\Haters\They;

class DoTheyWantYouToSucceed
{
    private $they;


    /**
     * DoTheyWantYouToSucceed constructor.
     *
     * @param They $they
     */
    public function __construct(They $they)
    {
        $this->they = $they;
    }


    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next)
    {
        $they = $this->they;

        if( $they->dontWantYouToSucceed() ) {

            return response("They don't want you to succeed", 403);

        }

        return $next($request);
    }
}