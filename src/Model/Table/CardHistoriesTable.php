<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CardHistories Model
 *
 * @method \App\Model\Entity\CardHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\CardHistory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CardHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CardHistory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CardHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CardHistory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CardHistory findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CardHistoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('card_histories');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('sender')
            ->requirePresence('sender', 'create')
            ->notEmpty('sender');

        $validator
            ->integer('receiver')
            ->requirePresence('receiver', 'create')
            ->notEmpty('receiver');

        $validator
            ->integer('productcode')
            ->requirePresence('productcode', 'create')
            ->notEmpty('productcode');

        $validator
            ->requirePresence('message', 'create')
            ->notEmpty('message');

        $validator
            ->integer('is_delivered')
            ->requirePresence('is_delivered', 'create')
            ->notEmpty('is_delivered');

        return $validator;
    }
}
