<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$link=@mysql_connect('localhost','root','');
if($link){
  echo'连接数据库成功！<br>';
}else{
  die('连接数据库失败！错误号为：'.  mysql_errno().'失败原因:'.  mysql_error());
}
$db=mysql_select_db('lts');
if($db){
  echo '选择数据库成功！';
}else{
  die('选择数据库失败！错误号为：'.  mysql_errno().'失败原因:'.  mysql_error());
}