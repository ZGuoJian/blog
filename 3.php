<?php
    
    //魔术变量
    echo "第".__LINE__."行".'<br>';
    echo "文件名".__FILE__.'<br>';
    echo "文件路径".__DIR__.'<br>';
    function Aa(){
        echo "函数名".__FUNCTION__.'<br>';
    }
    function Bb(){
        echo "函数名".__METHOD__.'<br>';
    }
    Aa();
    Bb();
    class test{
        public function bb(){
            echo "类名".__CLASS__.'<br>';
            echo "类方法".__FUNCTION__.'<br>';
        }
    }
    $test = new test();
    $test->bb();