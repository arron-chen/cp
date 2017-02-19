<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/1/25
 * Time: 9:55
 */
namespace Admin\Model;
use Think\Model;
class UserModel extends Model
{

    //实现表单项目验证
    //通过重写父类属性_validate实现表单验证
    protected $_validate = array(
        array('name','require','用户名必须！'), // 用户名必须
        array('name','','帐号名称已经存在！',1,'unique',1), // 验证用户名是否已经存在
        array('email','email','Email格式错误！',2), // 如果输入则验证Email格式是否正确
        array('password','6,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
        array('password1','password','确认密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
    );
}