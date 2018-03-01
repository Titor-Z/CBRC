<?php
namespace Home\Controller;
use Think\Controller;

class DonorController extends Controller {

    # 当前模块操作的数据表：
    protected $table = 'donor';

    # ################ Index(分流 控制器) ############### #
    public function index()
    {
        $this->welcomeTpl();
    }

    # ################ welcome(欢迎页 控制器) ############### #
    public function welcomeTpl()
    {
        $this->assign([
            'target' => U('indexTpl')
        ])->display('Index/welcome');

    }

    # ################# Donate(捐献 控制器) #################### #
    public function indexTpl()
    {
        $this-> assign([
            'form_title' => '捐献申请表',
            'page_title' => '角膜捐献',
            'rec_controller' => U('saveData')
        ])-> display('Index:self-info');
    }

    # ################# saveDonate(捐献信息存储 控制器) #################### #
    public function saveData()
    {
        $data = I("post.data");
        $result = M($this->table)->data($data)->add();
        session('user',$result);
        $this->ajaxReturn(U("Index/contact?t=d&id=".$result));
    }

}