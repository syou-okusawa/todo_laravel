<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication ,DatabaseTransactions;

    public function set_up()
    {
    	parent::setup();
    	$this->prepareForTests();
    }
}
