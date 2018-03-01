<?php
namespace Home\Controller;
use Think\Controller;

class ApplyController extends Controller {

    # 当前模块操作的数据表：
    protected $table = 'applicant';

    # ################ Index(分流 控制器) ############### #
    public function index()
    {
        $this->welcomeTpl();
    }

    # ################ welcome(欢迎页 控制器) ############### #
    public function welcomeTpl()
    {
        $this->assign([
            'target' => U('IndexTpl')
        ])->display('Index/welcome');

    }

    # ################# IndexTpl(申请模板 控制器) #################### #
    public function IndexTpl()
    {
        $this-> assign([
            'form_title' => '移植申请表',
            'page_title' => '角膜移植',
            'rec_controller' => U('saveData')
        ])-> display('apply');
    }

    # ################# saveData(申请信息存储 控制器) #################### #
    public function saveData()
    {
        $data = I("post.data");
        $result = M($this->table)->data($data)->add();
        session('user',$result);
        $this->ajaxReturn(U('Index/contact?t=apply&id='.$result));
    }

}