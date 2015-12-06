<?php
// src/Model/Table/TagsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TagsTable extends Table
{
	public function initialize(array $config)
    {
        //$this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('tag', 'A tag is required');
    }

}