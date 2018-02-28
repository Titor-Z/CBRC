<?php
namespace Home\Controller;
use Think\Controller;

class DoctorController extends Controller {

    # 当前模块操作的数据表：
    protected $table = 'doctor';

    # ################ Index(分流 控制器) ############### #
    public function index()
    {
        $doctor = cookie('doctor');
        if ($doctor=='') {
            $this->loginTpl();
        }else{
            $this->redirect("Index");
        }
    }

    # ################ loginTpl(登录模板 控制器) ############### #
    public function loginTpl()
    {
        $this->assign([
            'action'    => U('login'),
        ])->display('login');
    }

    # ################ login(登录 控制器) ############### #
    public function login()
    {
        // 接收数据，并进行二次判决，防止未输入用户名或密码就进行程序执行：
        $data = I("post.data");
        # 接受值为空或内容为空，停止程序，返回提示：
        if ($data == '' || count($data)==0) {
            return $this->ajaxReturn('你没有输入任何信息');
        }

        # 密码为空，停止程序，返回提示：
        if ($data['password']=='') {
            return $this->ajaxReturn('请输入密码');
        }

        // 接收正常，查询指定数据：
        # 当上述操作完成，表示用户输入了完整的数据链，
        # 则可以开始进行记录查找工作：
        $result = M($this->table)->where("username='%s'",$data['username'])->find();

        # 数据库查询出错 或 结果集中记录状态为2（已删除），
        # 或 结果集中不存在用户名返回值，则该用户不存在:
        if ($result===false || $result['state']==2 || $result['username']=='') {
            return $this->ajaxReturn('用户不存在');
        }

        # 结果集中状态显示0（已禁用），用户需要联系管理员
        # 确定身份后，才可以正常登陆使用：
        if ($result['state']=='0') {
            return $this->ajaxReturn('你的账号存在异常，请于管理员联系');
        }

        // 判断密码是否正确
        # 当上述操作都完成，表示用户输入了完整的数据，
        # 且数据库查询到了正常的用户信息。
        # 那就进行密码的匹配，完成返回登陆成功，否则返回密码出错：
        if($data['password']==$result['password']) {
            # 写入session，在医生协助输入时，要进行录入操作：
            cookie('doctor', [
                'id'=> $result['id'],
                'name' => $result['username']
            ]);

            $this->ajaxReturn([
                'state' => 'login',
                'message' => '登陆成功',
                'target' => U('Index/applyTpl')
            ]);
        }else{
            return $this->ajaxReturn('密码错误');
        }
    }

    # ################ logout(登出 控制器) ############### #
    public function logout()
    {
        cookie('doctor',null);
    }

}