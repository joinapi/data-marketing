<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sales_opportunity_id
 * @property string $competitor_party_id
 * @property string $position_enum_id
 * @property string $strengths
 * @property string $weaknesses
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SalesOpportunity $salesOpportunity
 */
class SalesOpportunityCompetitor extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_opportunity_competitor';

    /**
     * @var array
     */
    protected $fillable = ['position_enum_id', 'strengths', 'weaknesses', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesOpportunity()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SalesOpportunity', 'sales_opportunity_id', 'sales_opportunity_id');
    }
}
