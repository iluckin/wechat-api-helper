<?php

/**
 * WeChat api helper
 *
 * @author    EnHe <enhe@iluckin.cn>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/iluckin/wechat-api-helper
 */

if (! function_exists('translate')) {
    /**
     * @param string $code
     * @return string
     */
    function translate(string $code = '0') {
        return \LuckIn\WeChat\Helper\Code::translate($code);
    }
}
