<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MultipleLinioTest extends TestCase
{
	/**
     * Object to prove, in our case the MultipleLinio.
     *
     * @var MultipleLinio
     */
    protected $ml;

    /**
     * This method is executed before each test run, so
     * That everything you have to initialize in all tests, you can
     * Centralize here.
    */
    public function setUp()
    {
            $this->ml = new \App\MultipleLinio();
    }

    /**
     * This method is executed after each executed test, so
     * Will be dedicated to cleaning the remains of the execution of the test.
     */
    public function tearDown()
    {
            $this->ml = null;
    }

    /**
     * Test to check the functionality of the numberIsmultipleLinio's multiple method
     * Linio's numbers *
     */
    public function testNumberIsmultipleLinio()
    {
        $this->assertEquals( 'Linio', $this->ml->numberIsmultipleLinio(3)); 
    }    


    /**
     * Test to check the functionality of the numberIsmultipleLinio's multiple method
     * IT's numbers *
     */
    public function testNumberIsmultipleIT()
    {
        $this->assertEquals( 'IT', $this->ml->numberIsmultipleLinio(5)); 
    }


   /**
    * Test to check the functionality of the numberIsmultipleLinio's multiple method
    * Linianos's numbers *
    */
   public function testNumberIsmultipleLinianos()
   {
       $this->assertEquals( 'Linianos', $this->ml->numberIsmultipleLinio(30)); 
   }


   /**
    * Test to check the functionality of the numberIsmultipleLinio's multiple method
    * other numbers *
    */
   public function testNumberIsmultipleOthers()
   {
       $this->assertEquals( '8', $this->ml->numberIsmultipleLinio(30)); 
   }
}
