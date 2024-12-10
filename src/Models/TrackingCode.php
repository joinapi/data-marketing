<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $tracking_code_id
 * @property string $tracking_code_type_id
 * @property string $marketing_campaign_id
 * @property string $redirect_url
 * @property string $override_logo
 * @property string $override_css
 * @property string $prod_catalog_id
 * @property string $comments
 * @property string $description
 * @property float $trackable_lifetime
 * @property float $billable_lifetime
 * @property string $from_date
 * @property string $thru_date
 * @property string $group_id
 * @property string $subgroup_id
 * @property string $created_date
 * @property string $created_by_user_login
 * @property string $last_modified_date
 * @property string $last_modified_by_user_login
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property TrackingCodeOrder[] $trackingCodeOrders
 * @property MarketingCampaign $marketingCampaign
 * @property TrackingCodeType $trackingCodeType
 * @property TrackingCodeVisit[] $trackingCodeVisits
 * @property TrackingCodeOrderReturn[] $trackingCodeOrderReturns
 */
class TrackingCode extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tracking_code';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'tracking_code_id';

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
    protected $fillable = ['tracking_code_type_id', 'marketing_campaign_id', 'redirect_url', 'override_logo', 'override_css', 'prod_catalog_id', 'comments', 'description', 'trackable_lifetime', 'billable_lifetime', 'from_date', 'thru_date', 'group_id', 'subgroup_id', 'created_date', 'created_by_user_login', 'last_modified_date', 'last_modified_by_user_login', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodeOrders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCodeOrder', 'tracking_code_id', 'tracking_code_id');
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
    public function trackingCodeType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\TrackingCodeType', 'tracking_code_type_id', 'tracking_code_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodeVisits()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCodeVisit', 'tracking_code_id', 'tracking_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackingCodeOrderReturns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\TrackingCodeOrderReturn', 'tracking_code_id', 'tracking_code_id');
    }
}
