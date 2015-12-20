<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>痛苦源于快乐太多！</title>
  </head>
  <body>
    <?php
    // put your code here
   $link=@mysql_connect('localhost','root','');
   if($link){
     echo '连接数据库成功！';
   }else{
     die('连接数据库失败！错误编号：'.  mysql_errno().'<br>失败原因：'.  mysql_error().'<br>');
   }
  $db=  mysql_select_db('ltsds');
 
  if($db)
  {
    echo'<br>登录数据库成功！';
  }  elseif ($db.mysql_errno()=='1049') {
    echo'无此此数据库！';
    $dba="CREATE DATABASE ltsds";
    $re=  mysql_query($dba);
    if(!$dba){
       die('创建数据库失败！错误编号：'.  mysql_errno().'<br>失败原因：'.  mysql_error().'<br>');
      }else{
        echo '<br>数据库创建成功！';
      }
}    else{
  die('数据库连接失败！错误编号：'.  mysql_errno().'<br>失败原因：'.  mysql_error().'<br>');
}

 $dbb="DROP DATABASE ltsds";
  $re=  mysql_query($dbb); 
  
    ?>
  </body>
</html>
