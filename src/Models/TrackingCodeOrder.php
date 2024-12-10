<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $order_id
 * @property string $tracking_code_type_id
 * @property string $tracking_code_id
 * @property string $is_billable
 * @property string $site_id
 * @property string $has_exported
 * @property string $affiliate_referred_time_stamp
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property OrderHeader $orderHeader
 * @property TrackingCode $trackingCode
 * @property TrackingCodeType $trackingCodeType
 */
class TrackingCodeOrder extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tracking_code_order';

    /**
     * @var array
     */
    protected $fillable = ['tracking_code_id', 'is_billable', 'site_id', 'has_exported', 'affiliate_referred_time_stamp', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orderHeader()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\OrderHeader', 'order_id', 'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trackingCode()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\TrackingCode', 'tracking_code_id', 'tracking_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trackingCodeType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\TrackingCodeType', 'tracking_code_type_id', 'tracking_code_type_id');
    }
}
