<?php
namespace App\Resolvers;

class UserResolver implements \OwenIt\Auditing\Contracts\UserResolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve()
    {
        return auth() ? auth()->id() : null;
    }
}
