<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gallery Entity
 *
 * @property int $id
 * @property int $property_id
 * @property string $photo
 * @property string $photoDir
 * @property string $photoType
 * @property string $photoAlias
 * @property int $photoSize
 *
 * @property \App\Model\Entity\Property $property
 */
class Gallery extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'photo' => true,
        'photoDir' => true,
        'photoType' => true,
        'photoAlias' => true,
        'photoSize' => true,
    ];

    public function verify() {
        $response = ['size' => false, 'type' => false];
        $types = ['image/jpg', 'image/jpeg', 'image/png', 'image/webp'];
        $size = 10000000;//153600;

        if (is_array($this->photo)) {
            $response['size'] = ($this->photo['size'] == 0) ? false : $this->photo['size'] < $size;
        }
        else {
            $response['size'] = ($this->photoSize == 0) ? false : $this->photoSize < $size;
        }
        $response['type'] = array_search(strtolower($this->getFileExtension()), $types, true);
        return $response;
    }

    private function getFileExtension() {
        if (is_array($this->photo)) {
            return empty($this->photo['type']) ? 'image/' . pathinfo($this->photo['name'], PATHINFO_EXTENSION) : $this->photo['type'];
        }
        return empty($this->photoType) ? 'image/' . pathinfo($this->photoType, PATHINFO_EXTENSION) : $this->photoType;
    }

}
