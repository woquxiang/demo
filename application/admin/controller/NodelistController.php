<?php
/**
 * 后台用户控制器
 * @author yupoxiong<i@yufuping.com>
 */

namespace app\admin\controller;

use app\admin\model\Nodelist;
use app\admin\validate\NodelistValidate;
use app\common\model\Attachment;
use think\Request;
use app\admin\model\AdminRole;
use app\admin\model\AdminUser;
use app\admin\validate\AdminUserValidate;

class NodelistController extends Controller
{

    //列表
    public function index(Request $request, Nodelist $model)
    {

        $param = $request->param();
        $data  = $model->scope('where', $param)
            ->paginate($this->admin['per_page'], false, ['query' => $request->get()]);

        //关键词，排序等赋值
        $this->assign($request->get());

        $this->assign([
            'data'  => $data,
            'page'  => $data->render(),
            'total' => $data->total(),
        ]);
        return $this->fetch();
    }

    //添加
    public function add(Request $request, Nodelist $model, NodelistValidate $validate)
    {
        if ($request->isPost()) {
            $param           = $request->param();


            $result = $model::create($param);

        }

        $this->assign([

        ]);

        return $this->fetch();
    }

    //修改
    public function edit($id, Request $request, AdminUser $model, AdminUserValidate $validate)
    {

        $data = $model::get($id);
        if ($request->isPost()) {
            $param           = $request->param();
            $validate_result = $validate->scene('edit')->check($param);
            if (!$validate_result) {
                return admin_error($validate->getError());
            }

            $result = $data->save($param);
            return $result ? admin_success() : admin_error();
        }

        $role = AdminRole::all(function ($query) {
            $query->column('id,name', 'id');
        });

        $this->assign([
            'data' => $data,
            'role' => $role,
        ]);
        return $this->fetch('add');

    }


    //删除
    public function del($id, Nodelist $model)
    {

        $result = $model->whereIn('id', $id)->delete();

        return $result ? admin_success('操作成功', URL_RELOAD) : admin_error();
    }


    //启用
    public function enable($id, AdminUser $model)
    {
        $result = $model->whereIn('id', $id)->update(['status' => 1]);
        return $result ? admin_success('操作成功', URL_RELOAD) : admin_error();
    }

    //禁用
    public function disable($id, AdminUser $model)
    {
        $result = $model->whereIn('id', $id)->update(['status' => 0]);
        return $result ? admin_success('操作成功', URL_RELOAD) : admin_error();
    }

    //个人资料
    public function profile(Request $request, AdminUserValidate $validate)
    {
        if ($request->isPost()) {
            $param = $request->param();
            if ($param['update_type'] === 'password') {

                $validate_result = $validate->scene('password')->check($param);
                if (!$validate_result) {
                    return admin_error($validate->getError());
                }

                if (!password_verify($param['password'], base64_decode($this->user->password))) {
                    return admin_error('当前密码不正确');
                }
                $param['password'] = $param['new_password'];
            } else if ($param['update_type'] === 'avatar') {
                if (!$request->file('avatar')) {
                    return admin_error('请上传新头像');
                }
                $attachment = new Attachment();
                $file       = $attachment->upload('avatar');
                if ($file) {
                    $param['avatar'] = $file->url;
                } else {
                    return admin_error($attachment->getError());
                }
            }
            if (false !== $this->user->save($param)) {
                return admin_success('修改成功', URL_RELOAD);
            }
            return admin_error();
        }

        return $this->fetch();
    }


}
