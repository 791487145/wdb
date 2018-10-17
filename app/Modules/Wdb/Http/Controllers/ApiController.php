<?php

namespace App\Modules\Wdb\Http\Controllers;

use App\Http\Controllers\BaiscController;
use Illuminate\Http\Response;

class ApiController extends BaiscController
{
    public $limit = 10;
    public $page = 1;

    public $admin = 1;

    public $pub = 0;

    public $company_id;

    public $successStatus = 200;
    public $errorStatus = 201;
    public $unauthized = 403;
    public $errorLogin = 401;

    public function formatResponse($msg, $code = 200, $data = '',$statusCode = 200)
    {
        $result['code'] = $code;
        $result['message'] = $msg;
        if (isset($data)) {
            $result['data'] = is_array($data) ? $data : json_decode($data, true);
        } else {
            $result['data'] = new \stdClass();
        }

        return new Response($result, $statusCode);
    }
}
