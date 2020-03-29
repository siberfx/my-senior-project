<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;

/**
 * App\Models\Users
 *
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static Builder|Users newModelQuery()
 * @method static Builder|Users newQuery()
 * @method static Builder|Users query()
 * @mixin Eloquent
 * @property int $id
 * @property int|null $membership_id
 * @property string $permission
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Membership|null $membership
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereMembershipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users wherePermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Users whereUpdatedAt($value)
 */
class Users extends User
{
    const ADMIN_PERMISSION = 'admin_83';
    const USER_PERMISSION = 'user';

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'membership_id',
    ];

    /**
     * @return BelongsTo
     */
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->permission === self::ADMIN_PERMISSION;
    }
}
