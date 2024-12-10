<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $segment_group_id
 * @property string $segment_group_type_id
 * @property string $product_store_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SegmentGroupRole[] $segmentGroupRoles
 * @property SegmentGroupGeo[] $segmentGroupGeos
 * @property SegmentGroupClassification[] $segmentGroupClassifications
 * @property ProductStore $productStore
 * @property SegmentGroupType $segmentGroupType
 */
class SegmentGroup extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'segment_group';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'segment_group_id';

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
    protected $fillable = ['segment_group_type_id', 'product_store_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function segmentGroupRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SegmentGroupRole', 'segment_group_id', 'segment_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function segmentGroupGeos()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SegmentGroupGeo', 'segment_group_id', 'segment_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function segmentGroupClassifications()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SegmentGroupClassification', 'segment_group_id', 'segment_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStore()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ProductStore', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function segmentGroupType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SegmentGroupType', 'segment_group_type_id', 'segment_group_type_id');
    }
}
