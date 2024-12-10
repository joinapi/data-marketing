<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $tracking_code_id
 * @property string $visit_id
 * @property string $from_date
 * @property string $source_enum_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationBySourceEnumId
 * @property TrackingCode $trackingCode
 */
class TrackingCodeVisit extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tracking_code_visit';

    /**
     * @var array
     */
    protected $fillable = ['source_enum_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationBySourceEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Enumeration', 'source_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trackingCode()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\TrackingCode', 'tracking_code_id', 'tracking_code_id');
    }
}
