<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sales_opportunity_id
 * @property string $currency_uom_id
 * @property string $marketing_campaign_id
 * @property string $opportunity_stage_id
 * @property string $type_enum_id
 * @property string $created_by_user_login
 * @property string $opportunity_name
 * @property string $description
 * @property string $next_step
 * @property string $next_step_date
 * @property float $estimated_amount
 * @property float $estimated_probability
 * @property string $data_source_id
 * @property string $estimated_close_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property OrderItem[] $orderItems
 * @property Uom $uomByCurrencyUomId
 * @property MarketingCampaign $marketingCampaign
 * @property SalesOpportunityStage $salesOpportunityStage
 * @property Enumeration $enumerationByTypeEnumId
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property SalesOpportunityWorkEffort[] $salesOpportunityWorkEfforts
 * @property SalesOpportunityTrckCode[] $salesOpportunityTrckCodes
 * @property SalesOpportunityRole[] $salesOpportunityRoles
 * @property InvoiceItem[] $invoiceItems
 * @property SalesOpportunityQuote[] $salesOpportunityQuotes
 * @property SalesOpportunityHistory[] $salesOpportunityHistories
 * @property SalesOpportunityCompetitor[] $salesOpportunityCompetitors
 */
class SalesOpportunity extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_opportunity';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sales_opportunity_id';

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
    protected $fillable = ['currency_uom_id', 'marketing_campaign_id', 'opportunity_stage_id', 'type_enum_id', 'created_by_user_login', 'opportunity_name', 'description', 'next_step', 'next_step_date', 'estimated_amount', 'estimated_probability', 'data_source_id', 'estimated_close_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\OrderItem', 'sales_opportunity_id', 'sales_opportunity_id');
    }

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
    public function marketingCampaign()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\MarketingCampaign', 'marketing_campaign_id', 'marketing_campaign_id');
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
    public function enumerationByTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Enumeration', 'type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityWorkEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityWorkEffort', 'sales_opportunity_id', 'sales_opportunity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityTrckCodes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityTrckCode', 'sales_opportunity_id', 'sales_opportunity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityRole', 'sales_opportunity_id', 'sales_opportunity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\InvoiceItem', 'sales_opportunity_id', 'sales_opportunity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityQuotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityQuote', 'sales_opportunity_id', 'sales_opportunity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityHistory', 'sales_opportunity_id', 'sales_opportunity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityCompetitors()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityCompetitor', 'sales_opportunity_id', 'sales_opportunity_id');
    }
}
