<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    # ########################### index（入口状态识别 控制器） ############################ #
    public function index()
    {
        $boss = I('session.adminID');
        $boss == false ? $this->login() : $this->dash();
    }

    public function bash()
    {
        return $this->userRes = M('admin')->where("id='%s'",I('session.adminID'))->select();
    }

    # ########################### dash（主页模板 控制器） ############################ #
    protected function dash()
    {
        $this->bash();
        $this->assign([
            'page_title' => '首页·后台管理',
            'site_title' => '眼库',
            'logout_action' => U('Admin/logout'),
            'user_name' => $this->userRes[0]['username'],
            'donor_user_href' => U('User/index'),
            'apply_user_href' => U('Apply/index'),
            'admin_list_href' => U('Admin/userListTpl'),
            'admin_info_href' => U('Admin/userInfoTpl').'?id='.I('session.adminID')
        ]);
        $this->display('index');
    }

    # ########################### login（登陆模板 控制器） ############################ #
    private function login()
    {
        $this->assign([
            'page_title' => '管理员登陆',
            'form_title' => '后台登录',
            'form_action' => U("loginCheck")
        ])->display('login');
    }

    # ########################### loginCheck（登陆检测 控制器） ############################ #
    public function loginCheck()
    {
        $data = I('post.data');
        $result = M('admin')->where("username='%s' AND password='%s'",$data['username'],$data['password'])->select();
        if ($result) {
            // 创建session：
            session('adminID',$result[0]['id']);
            $callback = [
                'state' => 'success',
                'href' => U("index")
            ];
        }
        else {
            $callback = [
                'state' => 'error',
                'error_message' => '登录失败'
            ];
        }
        // 返回前端交互值：
        $this->ajaxReturn($callback);
    }
}