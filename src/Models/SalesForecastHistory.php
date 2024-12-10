<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sales_forecast_history_id
 * @property string $sales_forecast_id
 * @property string $organization_party_id
 * @property string $internal_party_id
 * @property string $custom_time_period_id
 * @property string $currency_uom_id
 * @property string $modified_by_user_login_id
 * @property string $parent_sales_forecast_id
 * @property float $quota_amount
 * @property float $forecast_amount
 * @property float $best_case_amount
 * @property float $closed_amount
 * @property float $percent_of_quota_forecast
 * @property float $percent_of_quota_closed
 * @property string $change_note
 * @property string $modified_timestamp
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uomByCurrencyUomId
 * @property Party $partyByInternalPartyId
 * @property UserLogin $userLoginByModifiedByUserLoginId
 * @property Party $partyByOrganizationPartyId
 * @property SalesForecast $salesForecast
 * @property CustomTimePeriod $customTimePeriod
 */
class SalesForecastHistory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_forecast_history';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sales_forecast_history_id';

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
    protected $fillable = ['sales_forecast_id', 'organization_party_id', 'internal_party_id', 'custom_time_period_id', 'currency_uom_id', 'modified_by_user_login_id', 'parent_sales_forecast_id', 'quota_amount', 'forecast_amount', 'best_case_amount', 'closed_amount', 'percent_of_quota_forecast', 'percent_of_quota_closed', 'change_note', 'modified_timestamp', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function partyByInternalPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Party', 'internal_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByModifiedByUserLoginId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\UserLogin', 'modified_by_user_login_id', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByOrganizationPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Party', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesForecast()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SalesForecast', 'sales_forecast_id', 'sales_forecast_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customTimePeriod()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\CustomTimePeriod', 'custom_time_period_id', 'custom_time_period_id');
    }
}
