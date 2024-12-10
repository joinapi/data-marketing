<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $tracking_code_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property TrackingCodeOrder[] $trackingCodeOrders
 * @property TrackingCode[] $trackingCodes
 * @property TrackingCodeOrderReturn[] $trackingCodeOrderReturns
 */
class TrackingCodeType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tracking_code_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'tracking_code_type_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodeOrders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCodeOrder', 'tracking_code_type_id', 'tracking_code_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCode', 'tracking_code_type_id', 'tracking_code_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodeOrderReturns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCodeOrderReturn', 'tracking_code_type_id', 'tracking_code_type_id');
    }
}
