<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{
    //实现表单项目验证
    //通过重写父类属性_validate实现表单验证
    protected $_validate = array(
        array('u_name','require','用户名必须！'), // 用户名必须
        array('u_name','','帐号名称已经存在！',1,'unique',1), // 验证用户名是否已经存在
        array('u_pwd','6,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
        array('u_pwd1','u_pwd','确认密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
        array('u_email','email','Email格式错误！',2), // 如果输入则验证Email格式是否正确
        array('u_qq','/^[1-9]\d{4,9}$/','qq格式不正确'),//验证qq
        //array('user_xueli','2,3,4,5','必须选择一个学历',0,'in'),
       // array('user_hobby','check_hobby','爱好必须两项以上',0,'callback'),

    );
    //自定义方法验证爱好信息
    public function check_hobby($name)
    {
        if(count($name)<2)
        {
            return false;
        }else{
            return true;
        }
    }

    //制作一个方法对用户名和密码进行验证
    public function checkNamePwd($name,$pwd)
    {
        //getByxxx()函数返回一维数组
        $info=$this->getByU_name($name);
        //$info=null 说明用户名错误
        //$info= 一维数组 说明用户名正确
        //  print_r($info);
        //$info不为null，就可以继续验证密码
        if($info !== null)
        {
            //验证密码（查询出来的密码与用户输入的密码比较）
            if($info['u_pwd'] != $pwd)
            {
                return false;
            }else{
                return $info;
            }

        }else
        {
            return false;
        }


    }

}