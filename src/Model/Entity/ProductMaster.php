<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductMaster Entity
 *
 * @property int $id
 * @property int $product_number
 * @property string $product_picture
 * @property string $product_name
 * @property string $category
 * @property int $price
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class ProductMaster extends Entity
{

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
        '*' => true,
        'id' => false
    ];
}
