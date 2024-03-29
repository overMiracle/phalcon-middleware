<?php
// +----------------------------------------------------------------------
// | TestController.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2020 Buffary All rights reserved.
// +----------------------------------------------------------------------
namespace Tests\App\Controllers;

/**
 * Class IndexController
 * @package Tests\App\Controllers
 */
class AbsController extends BaseController
{
    /**
     * @desc
     * @author limx
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     * @Middleware('second')
     */
    public function indexAction()
    {
        return $this->response->setJsonContent([
            'success' => true,
            'data' => ['action' => 'index']
        ]);
    }
}
