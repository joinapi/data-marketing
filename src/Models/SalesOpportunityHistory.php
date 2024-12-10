<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sales_opportunity_history_id
 * @property string $sales_opportunity_id
 * @property string $currency_uom_id
 * @property string $opportunity_stage_id
 * @property string $modified_by_user_login
 * @property string $description
 * @property string $next_step
 * @property float $estimated_amount
 * @property float $estimated_probability
 * @property string $estimated_close_date
 * @property string $change_note
 * @property string $modified_timestamp
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uomByCurrencyUomId
 * @property SalesOpportunity $salesOpportunity
 * @property SalesOpportunityStage $salesOpportunityStage
 * @property UserLogin $userLoginByModifiedByUserLogin
 */
class SalesOpportunityHistory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_opportunity_history';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sales_opportunity_history_id';

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
    protected $fillable = ['sales_opportunity_id', 'currency_uom_id', 'opportunity_stage_id', 'modified_by_user_login', 'description', 'next_step', 'estimated_amount', 'estimated_probability', 'estimated_close_date', 'change_note', 'modified_timestamp', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Uom', 'currency_uom_id', 'uom_id');
    }

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
    public function salesOpportunityStage()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SalesOpportunityStage', 'opportunity_stage_id', 'opportunity_stage_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\UserLogin', 'modified_by_user_login', 'user_login_id');
    }
}
