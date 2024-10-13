<?php
declare(strict_types=1);

namespace App\Model;

use Kernel\Database\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $wholesale_id
 * @property int $customer_id
 * @property float $price
 * @property int $status
 * @property string $create_time
 * @property float $dividend_amount
 */
class ItemSkuWholesaleUser extends Model
{
    /**
     * @var string|null
     */
    protected ?string $table = "item_sku_wholesale_user";

    /**
     * @var bool
     */
    public bool $timestamps = false;

    /**
     * @var array
     */
    protected array $casts = ['id' => 'integer' , 'user_id' => 'integer' , 'wholesale_id' => 'integer' , 'customer_id' => 'integer' , 'status' => 'integer'];
}