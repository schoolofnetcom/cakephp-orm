<?php

namespace App\Model\Table;

use App\Model\Entity\Cat;
use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

class CategoriesTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('categories');
       // $this->primaryKey('cat_id');
        $this->entityClass('App\Model\Entity\Cat');
        $this->addBehavior('Timestamp');
        $this->addBehavior('AddMyName');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

        $this->belongsToMany('Products', [
            'foreignKey' => 'category_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'categories_products'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');
        $validator
            ->allowEmpty('description');

        return $validator;
    }

    public function validationUpdate(Validator $validator)
    {
        $validator
            ->requiredPresence('title', 'create')
            ->notEmpty('title');
        $validator
            ->allowEmpty('description');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->addDelete(function ($entity, $options) {
            return true;
        });

        return $rules;
    }
}
