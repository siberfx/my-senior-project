<?php

namespace App\Services;

use GrahamCampbell\GitHub\Facades\GitHub;

/**
 * Class GithubCollection
 * @package App\Services\GitHub
 */
class GithubService
{
    private $user;
    private $repo;
    private $branch;

    public function __construct()
    {
        $this->user = config('github.repository.user');
        $this->repo = config('github.repository.repo');
        $this->branch = config('github.repository.branch');
    }

    public function github()
    {

//        return GitHub::api('repo')->activity('siberfx', 'siberfx.com');
//        return GitHub::api('repo')->all();
//        return GitHub::issues()->show('siberfx', 'siberfx.com', 2);
//        return Github::api('repo')->commits()->show('KnpLabs', 'php-github-api', '839e5185da9434753db47959bee16642bb4f2ce4');

        return Github::api('repo')->commits()->all($this->user, $this->repo, array('sha' => $this->branch));

//        return Github::api('repo')->commits()->all($user, $repo, array('sha' => $branch));
    }

    public function collect() {

        $gather = Github::api('repo')->commits()->all($this->user, $this->repo, array('sha' => $this->branch));

        return $gather;
    }

    /**
     * @param null $sha
     * @return mixed
     */
    public function single($sha = null) {

        $gather = Github::api('repo')->commits()->show($this->user, $this->repo, $sha);

        return $gather;
    }

    /**
     * @return mixed
     */
    public static function repos() {

        $gather = GitHub::api('repo')->all();

        return $gather;
    }

}
