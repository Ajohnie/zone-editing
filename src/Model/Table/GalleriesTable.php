<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Imagine\Gd\Imagine;

//use Cake\Event\Event;
//use Cake\Datasource\EntityInterface;
//use ArrayObject;

/**
 * Galleries Model
 *
 * @property \App\Model\Table\PropertiesTable|\Cake\ORM\Association\BelongsTo $Properties
 *
 * @method \App\Model\Entity\Gallery get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gallery newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gallery[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gallery|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gallery saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gallery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gallery[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gallery findOrCreate($search, callable $callback = null, $options = [])
 */
class GalleriesTable extends Table {

    public $uploadError = '';

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('galleries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', ['photo' => ['fields' => ['dir' => 'photoDir', 'size' => 'photoSize', 'type' => 'photoType'],
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    return strtolower($data['name']);
                },
                'transformer' => function ($table, $entity, $data, $field, $settings) {
                    $imagine = new Imagine();
                    $image = $imagine->open($data['tmp_name']);
                    $box = $image->getSize()->heighten(300);
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    $file_name = pathinfo($data['name'], PATHINFO_FILENAME);

                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;
                    $tmp2 = tempnam(sys_get_temp_dir(), 'upload') . '.' . 'webp';
                    $image->resize($box)->save($tmp2)->save($tmp);
                    return [$tmp => $data['name'], $tmp2 => $file_name . '.webp'];
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    $name = pathinfo($path . $entity->{$field}, PATHINFO_FILENAME);
                    return [$path . $entity->{$field}, $path . $name . '.webp'];
                },
                'keepFilesOnDelete' => false,
                'path' => 'webroot{DS}Gallery{DS}',
            ],
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->field('photo')
                ->allowEmpty('photo');

        $validator
                ->integer('photoSize')
                ->allowEmpty('photoSize');

        $validator
                ->scalar('photoType')
                ->maxLength('photoType', 45)
                ->allowEmpty('photoType');
        $validator
                ->scalar('photoAlias')
                ->allowEmpty('photoAlias');

        $validator
                ->scalar('photoDir')
                ->maxLength('photoDir', 45)
                ->allowEmpty('photoDir');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add(function ($entity, $options) {

            // Return a boolean to indicate pass/failure
            $verify = $entity->verify();
            if (!$verify['size']) {
                $this->uploadError = 'Image is too large.';
            }
            if (!$verify['type']) {
                $this->uploadError = $this->uploadError . ' Image type not supported.';
            }
            return strlen($this->uploadError) < 2;
        }, 'isImageProper', ['errorField' => 'photo', 'message' => 'File Type or Size Not Supported !']);
        return $rules;
    }

}
