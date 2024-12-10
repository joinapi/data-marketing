<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $opportunity_stage_id
 * @property string $description
 * @property float $default_probability
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SalesOpportunity[] $salesOpportunities
 * @property SalesOpportunityHistory[] $salesOpportunityHistories
 */
class SalesOpportunityStage extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_opportunity_stage';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'opportunity_stage_id';

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
    protected $fillable = ['description', 'default_probability', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunity', 'opportunity_stage_id', 'opportunity_stage_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityHistory', 'opportunity_stage_id', 'opportunity_stage_id');
    }
}
