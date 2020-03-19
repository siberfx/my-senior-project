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
