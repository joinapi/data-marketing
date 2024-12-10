<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sales_opportunity_id
 * @property string $work_effort_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SalesOpportunity $salesOpportunity
 * @property WorkEffort $workEffort
 */
class SalesOpportunityWorkEffort extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_opportunity_work_effort';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesOpportunity()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SalesOpportunity', 'sales_opportunity_id', 'sales_opportunity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
