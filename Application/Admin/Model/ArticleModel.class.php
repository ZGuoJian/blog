<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {
    public function get_notice(){
        $cate = M('notice');
        $data = $cate->select();
        return $data;
    }

}