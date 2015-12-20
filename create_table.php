<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$link=@mysql_connect('localhost','root','');
if(!$link){
  die('连接数据库失败！错误号为：'.mysql_errno().'<br>失败原因：'.  mysql_error());    
}
$db=  mysql_select_db('lts');
if(!$db){
  die('选择数据库失败！错误号为：'.mysql_errno().'<br>失败原因：'.mysql_error());
}
//创建表定义表字段
$sql="CREATE TABLE studentsa(";
$sql.="stuId int(4) not null auto_increment primary key,";
$sql.="stuName varchar(200) not null,";
$sql.="stuSex tinyint not null default 1,";
$sql.="stuBirth date not null,";
$sql.="classId int(4) not null);";

if(mysql_query($sql)){
  echo'创建表成功！';
}else{
  echo'创建表失败。';
}
mysql_close();