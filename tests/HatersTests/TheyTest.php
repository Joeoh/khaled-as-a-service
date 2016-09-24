<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 24/09/2016
 * Time: 13:30
 */

namespace tests\HatersTests;

use TestCase;

class TheyTest extends TestCase
{
    /**
     * Test that every now and then the haters step on the little man
     */
    public function test_application_requests_can_be_rejected_by_the_powers_that_be()
    {
        $statusCode = $this->get('/')->response->getStatusCode();

        $limit = 1000;

        while($statusCode != "403") {

            $limit = $limit - 1;

            if($limit == 0) {
                $this->fail();
            }

            $statusCode = $this->get('/')->response->getStatusCode();
        }
    }


    /**
     * Test that the little application can succeed despite overwhelming odds from the haters
     */
    public function test_application_requests_can_be_successful()
    {
        $statusCode = $this->get('/')->response->getStatusCode();

        $limit = 10;

        while($statusCode != "200") {

            $limit = $limit - 1;

            if($limit == 0) {
                $this->fail();
            }

            $statusCode = $this->get('/')->response->getStatusCode();
        }
    }


    /**
     * Test that it is possible for the haters to reject your attempts at success
     */
    public function test_they_can_reject_you_from_being_successful()
    {
        $they = $this->app->make('Kaas\Haters\They');

        $limit = 1000;

        while( ! $they->dontWantYouToSucceed()) {

            $limit = $limit - 1;

            if($limit == 0) {
                $this->fail();
            }
        }
    }


    /**
     * Test that sometimes, even the haters can't stop you from living your dreams
     */
    public function test_they_can_also_not_stop_you_from_succeeding()
    {
        $they = $this->app->make('Kaas\Haters\They');

        $limit = 10;

        while($they->dontWantYouToSucceed()) {

            $limit = $limit - 1;

            if($limit == 0) {
                $this->fail();
            }
        }
    }
}