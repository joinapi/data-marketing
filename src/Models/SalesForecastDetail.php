<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sales_forecast_id
 * @property string $sales_forecast_detail_id
 * @property string $quantity_uom_id
 * @property string $product_id
 * @property string $product_category_id
 * @property float $amount
 * @property float $quantity
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductCategory $productCategory
 * @property Product $product
 * @property Uom $uomByQuantityUomId
 * @property SalesForecast $salesForecast
 */
class SalesForecastDetail extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sales_forecast_detail';

    /**
     * @var array
     */
    protected $fillable = ['quantity_uom_id', 'product_id', 'product_category_id', 'amount', 'quantity', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ProductCategory', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Product', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByQuantityUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Uom', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesForecast()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\SalesForecast', 'sales_forecast_id', 'sales_forecast_id');
    }
}
