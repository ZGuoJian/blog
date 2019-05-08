<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\ArticleModel;
class ArticleController extends Controller {
    public function add_article(){
        if(!IS_POST){
            $this->display();
        }else{
        $title = I('title');
        $column = I('column');
        $label = I('label');
        $data[] = array(
            'title' => $title,
            'column' => $column,
            'label' => $label
        );
        $cate = M('article');
        $result = $cate->addAll($data);
        // $sql = $cate->getLastSql();
        // echo $sql;
        if($result){
            $this->redirect("Admin/Article/article");
        }else{
            $this->error('修改失败');
        }
        }
        
    }
    public function article(){
        if(IS_POST){
            $article = M('article');
            $para = I('para');
            $list['title'] = array("LIKE", '%' . $para . '%');
            $count = $article->where($list)->count();
            $p = getpage($count, 5);
            $data = $article->field(true)->where($list)->order('id')->limit($p->firstRow, $p->listRows)->select();
            if(empty($data)){
                $this->error("用户不存在",U("admin/article/article"));
            }else{
                $this->assign('arr', $data);
                $this->assign('page', $p->show());
                $this->display();
            } 
        }else{
            $article = M('article');
            $count = $article->where("id>0")->count();
            $p = getpage($count, 5);
            $data = $article->field(true)->where("id>0")->order('id')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('arr', $data);
            $this->assign('page', $p->show());
            $this->display();
          }
    }
    public function update_article($id){
        if (!IS_POST) {
            $cate = M('article');
            $data = $cate->find($id);
            $this->assign('arr', $data);
            $this->display();
        } else{
            $cate = M('article');
            $title = I('title');
            $column = I('category');
            $label = I('tags');
            $data = [
                'title' => $title,
                'column' => $column,
                'label' => $label
            ];
            $result = $cate->where("id=$id")->save($data);
            if($result){
                $this->redirect("Admin/article/article");
            }else{
                $this->error('修改失败');
            }
        }
        
    }
    public function delete_article($id){
        $cate = M('article');
        $cate->delete($id);
        $this->redirect("Admin/article/article");
    }
    public function category(){
        $this->display();
    }
    public function comment(){
        $this->display();
    }
    public function notice(){
        $notice = new ArticleModel();
        $data = $notice->get_notice();
        $this->assign('arr',$data);
        $this->display();
    }
    public function flink(){
        $this->display();
    }
    public function add_category(){
        $this->display();
    }
    public function add_notice(){
        $this->display();
    }

}