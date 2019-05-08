
<form method="post" action="http://localhost/blog/2.php?action=request">
Name: <input type="text" name="fname">
<input type="submit" value="提交">
</form>

<?php
//超全局变量$_REQUEST的用法
if(!empty($_REQUEST['fname'])){
    $name = $_REQUEST['fname']; 
    echo $name; 
    var_dump($name);
}
elseif($_REQUEST['fname'] == null){
    echo "空"; 
}
