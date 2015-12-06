<?php
// src/Model/Table/CommentsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommentsTable extends Table
{
	public function initialize(array $config)
    {
        //$this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('comment', 'A comment is required');
    }

}