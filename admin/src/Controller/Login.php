<?php
/**
 * author:liziyu
 * QQ:3431486
 */
namespace Tlxf\Admin\Controller;

use support\Db;
use support\Request;
use support\Response;
use Tlxf\Admin\Model\Member;

class Login
{
    public function index(Request $request): Response
    {
        $res = new Member();
        $d = $res->query()->where('id', 1)->first()->toArray();
        var_export($d);
        return response('admin of tlxf...');
    }
}