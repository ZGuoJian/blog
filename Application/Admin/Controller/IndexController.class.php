<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo __NAMESPACE__;
        $this->display();
    }
    public function add_flink(){
        $this->display();
    }
    public function readset(){
        $this->display();
    }
    public function setting(){
        $this->display();
    }
    public function update_categary(){
        $this->display();
    }
    public function update_flink(){
        $this->display();
    }
    public function check_login(){
        $cate = M('user');
        $username = I('username');
        $password = I('userpwd');
        $data = $cate->where(array('username'=>$username))->find();
        if(!$data || $password != $data['password']){
            $this->error("帐号或密码错误");
        }else{
            $this->redirect('Admin/Index/index');
        }
    }
}