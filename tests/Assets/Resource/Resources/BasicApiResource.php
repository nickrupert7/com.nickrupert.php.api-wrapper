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

class BasicApiResource extends ApiResource implements AllContract, CreateContract, DeleteContract, GetContract, UpdateContract
{
    use All;
    use Create;
    use Delete;
    use Get;
    use Update;

    public $idField = 'id';

    public $attributes = [
        'id' => 1
    ];

    public $dirty = [];

    public $casts = [];

    public $didGetAttributes = [];

    public $didSetAttributes = [];

    public function getAttribute(string $key)
    {
        $this->didGetAttributes[] = $key;
        return parent::getAttribute($key);
    }

    public function setAttribute(string $key, $value): ApiResource
    {
        $this->didSetAttributes[] = $key;
        return parent::setAttribute($key, $value);
    }
}