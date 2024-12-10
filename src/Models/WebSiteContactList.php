<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $web_site_id
 * @property string $contact_list_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContactList $contactList
 * @property WebSite $webSite
 */
class WebSiteContactList extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_site_contact_list';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactList()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ContactList', 'contact_list_id', 'contact_list_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function webSite()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\WebSite', 'web_site_id', 'web_site_id');
    }
}
