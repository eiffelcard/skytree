<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductMastersTable Test Case
 */
class ProductMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductMastersTable
     */
    public $ProductMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductMasters') ? [] : ['className' => 'App\Model\Table\ProductMastersTable'];
        $this->ProductMasters = TableRegistry::get('ProductMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductMasters);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
