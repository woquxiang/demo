<?php
/**
 * 后台用户验类
 * @author yupoxiong<i@yufuping.com>
 */

namespace app\admin\validate;

class NodelistValidate extends Validate
{
    protected $rule = [
        'ip|ip'          => 'require',
        'website|website'          => 'require',
        'other|other'     => 'require',
    ];


    protected $scene = [

    ];


}
