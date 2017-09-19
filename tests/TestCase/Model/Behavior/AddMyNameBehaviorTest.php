<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\AddMyNameBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\AddMyNameBehavior Test Case
 */
class AddMyNameBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\AddMyNameBehavior
     */
    public $AddMyName;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->AddMyName = new AddMyNameBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AddMyName);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
