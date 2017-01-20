<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 6/29/2016
 * Time: 1:42 PM
 */

namespace F2klabs\Govtrack\Models;

use Illuminate\Support\Collection;
use F2klabs\Govtrack\request\Request;
use F2klabs\Govtrack\response\Response;

class BaseModel {

    public $attributes;

    public $request;

    public function __construct(){
        $this->request = $this->getRequest();
        $this->attributes = collect();
    }

    public function getRequest()
    {
        return ($this->request)?: new Request();
    }

    public function __get($attr){
        return ($this->attributes->has($attr))? $this->attributes->get($attr) : null;
    }

    public function __set($key, $value){
        $this->attributes->set($key, $value);
    }
}