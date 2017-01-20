<?php
/**
 * Created by PhpStorm.
 * User: mmoore
 * Date: 1/20/17
 * Time: 2:24 PM
 */

namespace F2klabs\Govtrack\Models;


use F2klabs\Govtrack\request\Request;

class Fact extends BaseModel
{
    public static function get($listId, $recordId, Request $request)
    {
        return $request->get("api/v1/list/$listId/record/$recordId/facts");
    }

    public static function upload()
}