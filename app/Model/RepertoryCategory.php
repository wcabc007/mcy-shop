<?php
declare(strict_types=1);

namespace App\Model;

use Kernel\Database\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $sort
 * @property string $create_time
 * @property string $icon
 * @property int $status
 */
class RepertoryCategory extends Model
{
    /**
     * @var ?string
     */
    protected ?string $table = "repertory_category";

    /**
     * @var bool
     */
    public bool $timestamps = false;

    /**
     * @var array
     */
    protected array $casts = ['id' => 'integer' , 'sort' => 'integer' , 'status' => 'integer'];
}