<?php

namespace Joinbiz\Data\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_list_id
 * @property string $contact_list_type_id
 * @property string $contact_mech_type_id
 * @property string $marketing_campaign_id
 * @property string $owner_party_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $contact_list_name
 * @property string $description
 * @property string $comments
 * @property string $is_public
 * @property string $single_use
 * @property string $verify_email_from
 * @property string $verify_email_screen
 * @property string $verify_email_subject
 * @property string $verify_email_web_site_id
 * @property string $opt_out_screen
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CommunicationEvent[] $communicationEvents
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property ContactMechType $contactMechType
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property MarketingCampaign $marketingCampaign
 * @property Party $partyByOwnerPartyId
 * @property ContactListType $contactListType
 * @property ContactListParty[] $contactListParties
 * @property ContactListCommStatus[] $contactListCommStatuses
 * @property WebSiteContactList[] $webSiteContactLists
 */
class ContactList extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_list';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'contact_list_id';

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
    protected $fillable = ['contact_list_type_id', 'contact_mech_type_id', 'marketing_campaign_id', 'owner_party_id', 'created_by_user_login', 'last_modified_by_user_login', 'contact_list_name', 'description', 'comments', 'is_public', 'single_use', 'verify_email_from', 'verify_email_screen', 'verify_email_subject', 'verify_email_web_site_id', 'opt_out_screen', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\CommunicationEvent', 'contact_list_id', 'contact_list_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMechType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ContactMechType', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\UserLogin', 'last_modified_by_user_login', 'user_login_id');
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
    public function partyByOwnerPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\Party', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactListType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ContactListType', 'contact_list_type_id', 'contact_list_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListParty', 'contact_list_id', 'contact_list_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListCommStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListCommStatus', 'contact_list_id', 'contact_list_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webSiteContactLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\WebSiteContactList', 'contact_list_id', 'contact_list_id');
    }
}
