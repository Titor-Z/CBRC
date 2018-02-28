<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    public $result;

    public function checkLogin()
    {
        $doctor = cookie('doctor');
        # 医生未登录，显示默认的入口文件，
        # 以达到让以上可以找到登陆入口的目的：
        $doctor === null ? $this->IndexTpl() : $this->applyTpl();
    }

    # ################ Index(分流 控制器) ############### #
    public function index()
    {
//        session_destroy();
        $this->checkLogin();
    }

    public function common() {
        $this->assign([
            'logout_target' => U('Doctor/logout')
        ]);
    }

    # ################ IndexTpl(默认入口模板 控制器) ############### #
    public function IndexTpl()
    {
        $this->assign([
            'left'    => '患者入口',
            'right'   => '医生入口',
            'left_target'   => U('applyTpl'),
            'right_target'  => U('Doctor/index')
        ]);
        $this->common();
        $this->display();
    }

    # ################ apply(申请入口 控制器) ############### #
    public function applyTpl()
    {
        $this->common();
        $this->assign([
            'left'  => '捐献者',
            'right' => '申请者',
            'left_target'   => U('Donor/index'),
            'right_target'  => U('Apply/index'),
        ])->display('index');
    }

    # ################ patient(患者入口 控制器) ############### #
    public function doctorTpl()
    {
        $this->assign([

        ])->display(' ');
    }

    # ################# contact(联系人 控制器) #################### #
    public function contact()
    {
        $this->assign([
            'rec_controller' => U("saveContact")
        ])->display('Index:contact');
    }

    # ################# saveContact(联系人信息存储 控制器) #################### #
    public function saveContact()
    {
        $data = I("post.data");
        $result = M('donor')->where('id=%s',I('session.user'))->save($data);
        $this->ajaxReturn(U("state?s=success"));
    }

    # ################# state(状态 控制器) #################### #
    public function state($s = 'success') {
        if ($s == 'success') {
            $this->assign([
                'title' => '申请成功',
                'info' => '您的申请，我们已经收到<br>我们会尽快联系您。'
            ]);
        }
        else{
            $this->assign([
                'title' => '申请失败',
                'info' => '系统错误，请稍后重试。'
            ]);
        }


        $this->display('index:alert');
    }

}