<?php

namespace App\Http\Controllers\User;

use App\Acct_user;
use App\Http\Controllers\Admin\CommonController;
use myframe\Captcha;

class RegisterController extends CommonController
{
    protected $checkLoginExclude = ['index', 'register', 'captcha'];

    /**
     * 用户注册页面
     * @return string 视图文件
     */
    public function index()
    {
        //渲染注册页面
        return $this->fetch('user/register');
    }

    /**
     * 处理登录表单数据
     * @param Acct_user 用户表模型
     * @throws \myframe\HttpException 通过HttpException异常来返回数据
     */
    public function register(Acct_user $user)
    {
        //获取用户名和密码
        $username = $this->request->post('username', '');
        $password = $this->request->post('password'. '');
        $phone = $this->request->post('phone'. '');
        $email = $this->request->post('email'. '');
        //获取验证码
        $captcha = $this->request->post('captcha', '');
        //判断验证码
        if (!$this->checkCaptcha($captcha)) {
            $this->error('验证码不正确');
        }
        //根据用户名获取用户信息
        $data = $user->where('pau_name', $username)->first();
        //判断用户名是否存在
        if ($data) {
            //返回结果
            $this->error('用户名已存在');
        }
        $salt = rand(1000,9999);
        //根据提交的密码计算加密后的密码
        $psMD5 = $this->passwordMD5($password,$salt);
        $id='US'.(1000000000+$user->count());
        $data = [
            'pau_user_id'=>$id,
            'pau_name'=>$username,
            'pau_password'=>$psMD5,
            'pau_regi_time'=>date('Y-m-d h:i:s', time()),
            'pau_email'=>$email,
            'pau_salt'=>$salt,
            'pau_phone'=>$phone
        ];
        $user->insert($data);
        //保存登录态
        //session_start();
        $this->setLogin([
            'user_name' => $data['pau_name'],
            'user_id' => $data['pau_user_id']
        ]);
        //返回结果
        $this->success('注册成功');
    }

    /**
     * 输出验证码图片
     * @param Captcha $captcha Captcha对象
     * @throws \myframe\HttpException
     */
    public function captcha(Captcha $captcha)
    {
        //生成验证码字符串
        $code = $captcha->create();
        //保存验证码
        $this->setCaptcha($code);
        //生成验证码图片
        $captcha->show($code);
    }

    /**
     * 验证验证码
     * @param $code 验证码
     * @return bool 验证结果，true正确，false错误
     */
    public function checkCaptcha($code)
    {
        if (isset($_SESSION['pss']['captcha'])) {
            $captcha = $_SESSION['pss']['captcha'];
            unset($_SESSION['pss']['captcha']);
            return strtolower($code) == strtolower($captcha);
        }
        return false;
    }

    /**
     * 将验证码保存到session中
     * @param $code验证码
     */
    public function setCaptcha($code)
    {
        $_SESSION['pss']['captcha'] = $code;
    }
    /**
     * 密码加密
     * @param $password 明文密码
     * @param $salt 盐
     * @return string 加密密码
     */
    public function passwordMD5($password, $salt)
    {
        return md5(md5($password).$salt);
    }

    /**
     * 保存用户信息
     * @param array $user 用户信息
     */
    public function setLogin(array $user = []) {
        $_SESSION['pss']['user'] = $user;
    }
}