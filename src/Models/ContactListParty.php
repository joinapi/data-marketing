<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_list_id
 * @property string $party_id
 * @property string $from_date
 * @property string $status_id
 * @property string $preferred_contact_mech_id
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContactList $contactList
 * @property ContactMech $contactMechByPreferredContactMechId
 * @property Party $party
 * @property StatusItem $statusItem
 */
class ContactListParty extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_list_party';

    /**
     * @var array
     */
    protected $fillable = ['status_id', 'preferred_contact_mech_id', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function contactMechByPreferredContactMechId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ContactMech', 'preferred_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\StatusItem', 'status_id', 'status_id');
    }
}
