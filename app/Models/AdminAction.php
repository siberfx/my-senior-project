<?php

namespace App\Models;

use Eloquent;
use OwenIt\Auditing\Models\Audit;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\AdminAction
 *
 * @property int $id
 * @property string|null $user_type
 * @property int|null $user_id
 * @property string $event
 * @property string $auditable_type
 * @property int $auditable_id
 * @property string|null $old_values
 * @property string|null $new_values
 * @property string|null $url
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string|null $tags
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Audit[] $audits
 * @property-read int|null $audits_count
 * @property-read Users|null $user
 * @method static Builder|AdminAction newModelQuery()
 * @method static Builder|AdminAction newQuery()
 * @method static Builder|AdminAction query()
 * @method static Builder|AdminAction whereAuditableId($value)
 * @method static Builder|AdminAction whereAuditableType($value)
 * @method static Builder|AdminAction whereCreatedAt($value)
 * @method static Builder|AdminAction whereEvent($value)
 * @method static Builder|AdminAction whereId($value)
 * @method static Builder|AdminAction whereIpAddress($value)
 * @method static Builder|AdminAction whereNewValues($value)
 * @method static Builder|AdminAction whereOldValues($value)
 * @method static Builder|AdminAction whereTags($value)
 * @method static Builder|AdminAction whereUpdatedAt($value)
 * @method static Builder|AdminAction whereUrl($value)
 * @method static Builder|AdminAction whereUserAgent($value)
 * @method static Builder|AdminAction whereUserId($value)
 * @method static Builder|AdminAction whereUserType($value)
 * @mixin Eloquent
 */
class AdminAction extends BaseModel
{

    protected $table = 'audits';


    /**
     * @return BelongsTo|mixed
     */
    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id')->withDefault('user_id', 1);
    }
}
