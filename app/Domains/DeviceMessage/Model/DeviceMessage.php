<?php declare(strict_types=1);

namespace App\Domains\DeviceMessage\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Domains\DeviceMessage\Model\Builder\DeviceMessage as Builder;
use App\Domains\Device\Model\Device as DeviceModel;
use App\Domains\SharedApp\Model\ModelAbstract;

class DeviceMessage extends ModelAbstract
{
    /**
     * @var string
     */
    protected $table = 'device_message';

    /**
     * @const string
     */
    public const TABLE = 'device_message';

    /**
     * @const string
     */
    public const FOREIGN = 'device_message_id';

    /**
     * @param \Illuminate\Database\Query\Builder $q
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($q)
    {
        return new Builder($q);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device(): BelongsTo
    {
        return $this->belongsTo(DeviceModel::class, DeviceModel::FOREIGN);
    }
}
