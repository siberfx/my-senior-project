<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Membership
 *
 * @method static Builder|Membership newModelQuery()
 * @method static Builder|Membership newQuery()
 * @method static Builder|Membership query()
 * @mixin Eloquent
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Membership whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Membership whereUpdatedAt($value)
 */
class Membership extends Model
{
    protected $table = 'memberships';

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'membership_id');
    }
}
