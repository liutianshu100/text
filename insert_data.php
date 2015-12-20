<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require'conn.php';
include'conn.php';
$sql="INSERT INTO students(stuName,stuSex,stuBirth,classId)VALUES('jonny',default,'1988-05-07',1),('dfa',default,'1988-04-17',2),('aage','0','1986-12-29',3);";
if(mysql_query($sql)){
  echo '<br>插入数据成功！';  
}else{
  echo '<br>插入数据失败。错误号：'.mysql_errno.'<br>失败原因:'.  mysql_error();
}
mysql_close($link);