<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_list_id
 * @property string $party_id
 * @property string $from_date
 * @property string $status_date
 * @property string $status_id
 * @property string $set_by_user_login_id
 * @property string $opt_in_verify_code
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 */
class ContactListPartyStatus extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_list_party_status';

    /**
     * @var array
     */
    protected $fillable = ['status_id', 'set_by_user_login_id', 'opt_in_verify_code', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];
}
