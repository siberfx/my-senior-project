<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Models\Audit;

/**
 * App\Models\BaseModel
 *
 * @method static Builder|BaseModel newModelQuery()
 * @method static Builder|BaseModel newQuery()
 * @method static Builder|BaseModel query()
 * @mixin Eloquent
 * @property-read Collection|Audit[] $audits
 * @property-read int|null $audits_count
 */
class BaseModel extends Model implements Auditable
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        'title',
        'content',
    ];

    protected $auditStrict = true;

}
