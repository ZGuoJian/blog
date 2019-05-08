<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $cate = M('article');
        $this->display();
    }
    public function about(){
        $this->display();
    }
    public function blog(){
        $this->display();
    }
    public function contact(){
        $this->display();
    }
    public function links(){
        $this->display();
    }
    public function works(){
        $this->display();
    }
}