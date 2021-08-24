<?php
/**
 * 后台用户模型
 * @author yupoxiong<i@yufuping.com>
 */

namespace app\admin\model;

use Exception;
use think\model\concern\SoftDelete;

/**
 * @property int id
 * @property mixed sign_str
 * @property mixed auth_url
 * @property mixed role
 * @property string password
 */
class Nodelist extends Model
{
    protected $name = 'nodelist';

    protected $searchField = [
        'ip',
        'website'
    ];
//
//    public $noDeletionId = [
//        1, 2
//    ];
//

    public static function init()
    {
//        //添加自动加密密码
//        self::event('before_insert', static function ($data) {
//            $data->password = base64_encode(password_hash($data->password, 1));
//        });
//
//        //修改密码自动加密
//        self::event('before_update', function ($data) {
//            $old = (new static())::get($data->id);
//            if ($data->password !== $old->password) {
//                $data->password = base64_encode(password_hash($data->password, 1));
//            }
//        });
    }

}
