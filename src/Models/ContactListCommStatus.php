<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_list_id
 * @property string $communication_event_id
 * @property string $contact_mech_id
 * @property string $party_id
 * @property string $status_id
 * @property string $change_by_user_login_id
 * @property string $message_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CommunicationEvent $communicationEvent
 * @property ContactList $contactList
 * @property ContactMech $contactMech
 * @property Party $party
 * @property StatusItem $statusItem
 * @property UserLogin $userLoginByChangeByUserLoginId
 */
class ContactListCommStatus extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_list_comm_status';

    /**
     * @var array
     */
    protected $fillable = ['party_id', 'status_id', 'change_by_user_login_id', 'message_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function communicationEvent()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\CommunicationEvent', 'communication_event_id', 'communication_event_id');
    }

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
    public function contactMech()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ContactMech', 'contact_mech_id', 'contact_mech_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByChangeByUserLoginId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\UserLogin', 'change_by_user_login_id', 'user_login_id');
    }
}
