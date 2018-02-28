<?php
namespace Home\Controller;
use Think\Controller;

class ApplyController extends Controller {

    protected $table = 'applicant';

    # ########################### index（入口状态识别 控制器） ############################ #
    public function index()
    {
        $result = M($this->table)->where("state=1")->select();

        $this->assign([
            "href"                  => U("User/show"),
            "result"                => $result,
            "add_user_page_title"   => "添加申请人",
            "add_user_page_href"    => U("userAddTpl"),
            "edit_user_page_title"  => "编辑申请人",
            "edit_user_page_href"   => U("userInfoTpl"),
            "disable_user_href"     => U("userDisableData")
        ])->display();
    }

    # ########################### userList（用户信息 控制器） ############################ #
    public function userInfoTpl()
    {
        $result = M($this->table)->where("id='%s'",I('get.id'))->find();
        $this->assign([
            'modality'  => 'edit',
            'page_title'=> '修改用户信息',
            'result'    => $result,
            'action'    => U('userAddData')
        ]);
        $this->display("add");
    }


    # ########################### userAddTpl（添加用户模板 控制器） ############################ #
    public function userAddTpl()
    {
        $this->assign([
            'page_title'=> '添加用户信息',
            'modality'  => 'add',
            'action'    => U('userAddData'),
        ]);
        $this->display("add");
    }

    # ########################### userAddTpl（添加用户 控制器） ############################ #
    public function userAddData()
    {
        $data = I('post.data');
        $modality = $data['modality'];
        $table = M($this->table);

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
//                $this->ajaxReturn($result);
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
                    $result = M($this->table)->where("id=$id")->save(['state'=>'2']);
                }
                $result === false ? $this->ajaxReturn('无法删除'): $this->ajaxReturn('已删除');
                break;
            case 'delete':
                $result = M($this->table)->where("id=".$data['id'])->save(['state'=>2]);
                $result === false ? $this->ajaxReturn('删除&nbsp;'.$data['username'].'失败') : $this->ajaxReturn('成功删除&nbsp;'.$data['username']);
                break;
            default:
                $result = M($this->table)->where("id=".$data['id'])->save(['state'=>'0']);
                $result === false ? $this->ajaxReturn('禁用&nbsp;'.$data['username'].'失败') : $this->ajaxReturn('成功禁用&nbsp;'.$data['username']);
                break;
        }
    }


}