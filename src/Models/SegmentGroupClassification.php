<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $segment_group_id
 * @property string $party_classification_group_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PartyClassificationGroup $partyClassificationGroup
 * @property SegmentGroup $segmentGroup
 */
class SegmentGroupClassification extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'segment_group_classification';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyClassificationGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\PartyClassificationGroup', 'party_classification_group_id', 'party_classification_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function segmentGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SegmentGroup', 'segment_group_id', 'segment_group_id');
    }
}
