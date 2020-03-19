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
}
