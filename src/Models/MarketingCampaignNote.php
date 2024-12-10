<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $marketing_campaign_id
 * @property string $note_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property MarketingCampaign $marketingCampaign
 * @property NoteData $noteData
 */
class MarketingCampaignNote extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing_campaign_note';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function noteData()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\NoteData', 'note_id', 'note_id');
    }
}
