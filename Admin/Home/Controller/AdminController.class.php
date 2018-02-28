<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {

    # ########################### index（入口状态识别 控制器） ############################ #
    public function index()
    {
        $boss = I('session.adminID');
    }

    # ########################### logout（退出 控制器） ############################ #
    public function logout()
    {
        session_destroy();
        $data = [
            'action' => U('Index/index')
        ];
        $this->ajaxReturn($data);
    }

    # ########################### userList（用户列表 控制器） ############################ #
    public function userListTpl()
    {
        //  查询没有删除的用户记录:
        $data = M('admin')->where('state!=2')->select();
        $this->assign([
            'href'                  => U('chuLi'),
            'result'                => $data,
            'data_href'             => U("userListData"),
            'del_action'            => U('userDelData'),
            'edit_admin_page_href'  => U("userInfoTpl"),
            'add_admin_page_title'  => '添加用户',
            'add_admin_page_href'   => U('userAddTpl'),
            'disable_admin_href'    => U('userDisableData'),

        ]);
        $this->display("admin-list");
    }

    # ########################### userList（用户信息 控制器） ############################ #
    public function userInfoTpl()
    {
        $result = M('admin')->where("id=".I('get.id'))->find();
        $this->assign([
            'modality'=> 'edit',
            'result'    => $result,
            'action'    => U('userAddData')
        ]);
        $this->display("admin-info");
    }

    # ########################### userAddTpl（添加用户模板 控制器） ############################ #
    public function userAddTpl()
    {
        $this->assign([
            'modality'=> 'add',
            'action'    => U('userAddData'),
        ]);
        $this->display("admin-info");
    }

    # ########################### userAddTpl（添加用户 控制器） ############################ #
    public function userAddData()
    {
        $data = I('post.data');
        $modality = $data['modality'];
        $table = M('admin');

        switch ($modality) {
            case "edit":
                $result = $table->where("id='%s'",$data['id'])->save($data);
                if ($result === false) {
                    $this->ajaxReturn($data['username']."&nbsp;信息更新失败");
                }
                $this->ajaxReturn($data['username']."&nbsp;信息更新成功");
                break;
            case 'add':
                $result = $table->add($data);
                if ($result===false) {
                    $this->ajaxReturn("添加失败");
                }
                $this->ajaxReturn("添加成功");
                break;
        }
    }

    # ########################### userDisableData（禁用、删除用户 控制器） ############################ #
    public function userDisableData()
    {
        $data = I('post.data');
        $modality = $data['modality'];
        switch ($modality) {
            case 'deleteAll':
                foreach ($data['items'] as $id) {
                    $result = M('admin')->where("id=$id")->save(['state'=>'2']);
                }
                $result === false ? $this->ajaxReturn('无法删除'): $this->ajaxReturn('已删除');
                break;
            case 'delete':
                $result = M('admin')->where("id=".$data['id'])->save(['state'=>'2']);
                $result === false ? $this->ajaxReturn('删除&nbsp;'.$data['username'].'失败') : $this->ajaxReturn('成功删除&nbsp;'.$data['username']);
                break;
            default:
                $result = M('admin')->where("id=".$data['id'])->save(['state'=>'0']);
                $result === false ? $this->ajaxReturn('禁用&nbsp;'.$data['username'].'失败') : $this->ajaxReturn('成功禁用&nbsp;'.$data['username']);
                break;
        }
    }


}