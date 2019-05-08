<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        $this->display();
    }
    public function loginlog(){
        $this->display();
    }
    public function manage_user(){
        if(IS_POST){
            $blog_user = M('blog_user');
            $para = I('para');
            $list['username'] = array("LIKE", '%' . $para . '%');
            $count = $blog_user->where($list)->count();
            $p = getpage($count, 5);
            $data = $blog_user->field(true)->where($list)->order('id')->limit($p->firstRow, $p->listRows)->select();
            if(empty($data)){
                $this->error("用户不存在",U("admin/user/manage_user"));
            }else{
                $this->assign('arr', $data);
                $this->assign('page', $p->show());
                $this->display();
            }      
        }else{
            $blog_user = M('blog_user');
            $count = $blog_user->where("id>0")->count();
            $p = getpage($count, 5);
            $data = $blog_user->field(true)->where("id>0")->order('id')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('arr', $data);
            $this->assign('page', $p->show());
            $this->display();
          }
    }
    public function update_blog_user($id){
        $blog_user = M('blog_user');
        $this->display();
    }
    public function add_blog_user(){
        $blog_user = M('blog_user');
        $username = I('username');
        $data[] = array(
            'name' => I('name'),
            'username' => I('username'),
            'password' => I('password'),
            'mail' => I('mail')
        );
        $confirm = $blog_user->where("username = $username")->select();
        if($confirm){
            $this->error("用户名已经存在");
        }
        else{
            $result = $blog_user->addAll($data);
            if($result){
                $this->redirect("admin/user/manage_user");
            }else{
                $this->error("新增失败");
            }
        } 
        $this->display();
    }
    public function delete_blog_user($id){
        $blog_user = M('blog_user');
        $blog_user->delete($id);
        $this->redirect("admin/user/manage_user");
    }
    public function manage_admin(){
        if(IS_POST){
            $user = M('user');
            $para = I('para');
            $list['username'] = array("LIKE", '%' . $para . '%');
            $count = $user->where($list)->count();
            $p = getpage($count, 5);
            $data = $user->field(true)->where($list)->order('id')->limit($p->firstRow, $p->listRows)->select();
            if(empty($data)){
                $this->error("用户不存在",U("admin/user/manage_admin"));
            }else{
                $this->assign('arr', $data);
                $this->assign('page', $p->show());
                $this->display();
            }      
        }else{
            $user = M('user');
            $count = $user->where("id>0")->count();
            $p = getpage($count, 5);
            $data = $user->field(true)->where("id>0")->order('id')->limit($p->firstRow, $p->listRows)->select();
            // var_dump($data);
            $this->assign('arr', $data);
            $this->assign('page', $p->show());
            $this->display();
          }
    }
    public function add_admin_user(){
        $user = M('user');
        $username = I('username');
        $data[] = array(
            'name' => I('name'),
            'username' => I('username'),
            'password' => I('password'),
        );
        $confirm = $user->where("username = $username")->select();
        if($confirm){
            $this->error("用户名已经存在");
        }
        else{
            $result = $user->addAll($data);
            if($result){
                $this->redirect("admin/user/manage_admin");
            }else{
                $this->error("新增失败");
            }
        } 
        $this->display();
    }
}