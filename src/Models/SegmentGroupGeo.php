<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $segment_group_id
 * @property string $geo_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Geo $geo
 * @property SegmentGroup $segmentGroup
 */
class SegmentGroupGeo extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'segment_group_geo';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Geo', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function segmentGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SegmentGroup', 'segment_group_id', 'segment_group_id');
    }
}
