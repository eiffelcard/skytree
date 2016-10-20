<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardHistoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardHistoriesTable Test Case
 */
class CardHistoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CardHistoriesTable
     */
    public $CardHistories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.card_histories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CardHistories') ? [] : ['className' => 'App\Model\Table\CardHistoriesTable'];
        $this->CardHistories = TableRegistry::get('CardHistories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CardHistories);

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
