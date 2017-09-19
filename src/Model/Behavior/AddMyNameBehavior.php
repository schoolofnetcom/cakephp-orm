<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;

class AddMyNameBehavior extends Behavior
{

    protected $_defaultConfig = [];

    public function myNameIs(EntityInterface $entity)
    {
        return 'My name is ' . $entity->title;
    }

    public function beforeSave(Event $event, EntityInterface $entity, \ArrayObject $options)
    {
       // debug($entity);
       // debug('Antes de salvar');
       // exit;
        $entity->my_name = '';
        $entity->user_id = $entity->user_id ?? 0;
    }
}
