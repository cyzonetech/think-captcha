<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\captcha;

use think\facade\Config;

class CaptchaController
{
    public function index($id = "")
    {
        $config = (array) Config::pull('captcha');
        if (isset($_GET['imageW']) && intval($_GET['imageW'])) {
            $config['imageW'] = intval($_GET['imageW']);
        }
        if (isset($_GET['imageH']) && intval($_GET['imageH'])) {
            $config['imageH'] = intval($_GET['imageH']);
        }
        $captcha = new Captcha($config);
        return $captcha->entry($id);
    }
}
