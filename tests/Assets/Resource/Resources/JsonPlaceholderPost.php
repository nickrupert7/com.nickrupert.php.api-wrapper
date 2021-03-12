<?php

namespace Tests\Assets\Resource\Resources;

use NickRupert\ApiWrapper\Resource\Contracts\All as AllContract;
use NickRupert\ApiWrapper\Resource\Contracts\Create as CreateContract;
use NickRupert\ApiWrapper\Resource\Contracts\Delete as DeleteContract;
use NickRupert\ApiWrapper\Resource\Contracts\Get as GetContract;
use NickRupert\ApiWrapper\Resource\Contracts\Update as UpdateContract;
use NickRupert\ApiWrapper\Resource\Operations\All;
use NickRupert\ApiWrapper\Resource\Operations\Create;
use NickRupert\ApiWrapper\Resource\Operations\Delete;
use NickRupert\ApiWrapper\Resource\Operations\Get;
use NickRupert\ApiWrapper\Resource\Operations\Update;
use NickRupert\ApiWrapper\Resource\ApiResource;

/**
 * Class JsonPlaceholderPost
 * @property string id
 * @property string userId
 * @property string title
 * @property bool completed
 */
class JsonPlaceholderPost extends ApiResource implements AllContract, CreateContract, DeleteContract, GetContract, UpdateContract
{
    use All;
    use Create;
    use Delete;
    use Get;
    use Update;

    protected $allRoute = 'posts.all';
    protected $createRoute = 'posts.create';
    protected $deleteRoute = 'posts.delete';
    protected $getRoute = 'posts.get';
    protected $updateRoute = 'posts.update';
}