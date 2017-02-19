<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller
{
    //用户注册
    public function register()
    {
        $user = new \Home\Model\UserModel();
        if (!empty($_POST)) {
            if (!$user->create()) {
                echo $user->getError();
                exit();
            } else {
                //把爱好由数组变为字符串
                //使用AR方式处理爱好的字段信息
                // $user->user_hobby=implode(',',$_POST['user_hobby']);
                $rst = $user->add();
                if ($rst) {
                    $this->redirect('Index/index',array(),2,'注册成功！跳转至主页');
                } else {
                    $this->redirect('User/register',array(),2,'注册失败！请返回注册');
                }
            }
        } else {
            $this->display();
        }

    }

    //用户登陆
      public function login()
    {
        if(!empty($_POST))
        {
            //验证码校验
            $verify=new \Think\Verify();
            if(!$verify->check($_POST['captcha']))
            {
                echo "验证码错误";
            }else {
                //判断用户名和密码，在model模型中制作一个专门的方法验证
                $user = new \Home\Model\UserModel();
                $rst = $user->checkNamePwd($_POST['u_name'], $_POST['u_pwd']);
                if ($rst === false) {
                    echo "用户名或密码错误";
                } else {
                    //登陆信息持久化$_SESSION
                    session('u_name', $rst['u_name']);
                    session('u_id', $rst['u_id']);

                    //session(name,value) 设置session
                    // session(mg_username); //获取session
                    //session(name,null) 删除指定session
                    //session(null) 清空全部session

                    //页面跳转到后台受首页redirect()
                    $this->redirect('Index/index');

                }
            }
        }else{
            $this->display();
        }

    }


    public function logout()
    {
        session(null);
        redirect('login');
    }


    //制作专门的方法实现验证码的生成
    public function verifyImg()
    {
        $config=array(
            'useImgBg'  =>  false,           // 使用背景图片
            'fontSize'  =>  14,              // 验证码字体大小(px)
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  true,            // 是否添加杂点
            'imageH'    => 26,               // 验证码图片高度
            'imageW'    =>  110,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '',              // 验证码字体，不设置随机获取
            'bg'        =>  array(243, 251, 254),  // 背景颜色
            'reset'     =>  true,           // 验证成功后是否重置
        );
        $verify= new \Think\Verify($config);
        $verify->entry();
    }
}