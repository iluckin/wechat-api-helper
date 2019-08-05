<?php

/**
 * WeChat api helper
 *
 * @author    EnHe <enhe@iluckin.cn>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/iluckin/wechat-api-helper
 */

namespace LuckIn\WeChat\Helper;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class LumenServiceProvider
 * @package LuckIn\WeChat\Helper
 */
class LumenServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->configure('wechat-helper');
        $this->mergeConfigFrom(
            realpath(__DIR__.'/../config/wechat-helper.php'), 'wechat-helper'
        );

        Code::mergeCodeMap(Config::get('wechat-helper', []));
    }
}
