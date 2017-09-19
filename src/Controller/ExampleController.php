<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class ExampleController extends AppController
{
    public function index()
    {
        $categories = TableRegistry::get('Categories');
        $query = $categories->find();
        $result = $categories->find()
            ->contain(['Users'])
            ->select([
                'id',
                'title',
                'Users.name',
                'media' => $query->func()->now()
            ])
            ->where(['Categories.id in'=>[1, 2, 3]])
            ->order(['Categories.title'=> 'desc'])
            ->limit(2)
            ->first();
        debug($result);
        exit;
    }
}
