<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $marketing_campaign_id
 * @property string $parent_campaign_id
 * @property string $status_id
 * @property string $currency_uom_id
 * @property string $campaign_name
 * @property string $campaign_summary
 * @property float $budgeted_cost
 * @property float $actual_cost
 * @property float $estimated_cost
 * @property string $from_date
 * @property string $thru_date
 * @property string $is_active
 * @property string $converted_leads
 * @property float $expected_response_percent
 * @property float $expected_revenue
 * @property float $num_sent
 * @property string $start_date
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContactList[] $contactLists
 * @property SalesOpportunity[] $salesOpportunities
 * @property Uom $uomByCurrencyUomId
 * @property MarketingCampaign $marketingCampaignByParentCampaignId
 * @property StatusItem $statusItem
 * @property MarketingCampaignNote[] $marketingCampaignNotes
 * @property MarketingCampaignPrice[] $marketingCampaignPrices
 * @property MarketingCampaignPromo[] $marketingCampaignPromos
 * @property MarketingCampaignRole[] $marketingCampaignRoles
 * @property TrackingCode[] $trackingCodes
 */
class MarketingCampaign extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing_campaign';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'marketing_campaign_id';

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
    protected $fillable = ['parent_campaign_id', 'status_id', 'currency_uom_id', 'campaign_name', 'campaign_summary', 'budgeted_cost', 'actual_cost', 'estimated_cost', 'from_date', 'thru_date', 'is_active', 'converted_leads', 'expected_response_percent', 'expected_revenue', 'num_sent', 'start_date', 'created_by_user_login', 'last_modified_by_user_login', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactList', 'marketing_campaign_id', 'marketing_campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunity', 'marketing_campaign_id', 'marketing_campaign_id');
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
    public function marketingCampaignByParentCampaignId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\MarketingCampaign', 'parent_campaign_id', 'marketing_campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaignNote', 'marketing_campaign_id', 'marketing_campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignPrices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaignPrice', 'marketing_campaign_id', 'marketing_campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignPromos()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaignPromo', 'marketing_campaign_id', 'marketing_campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaignRole', 'marketing_campaign_id', 'marketing_campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCode', 'marketing_campaign_id', 'marketing_campaign_id');
    }
}
