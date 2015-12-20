<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
include'conn.php';
//更改
//$sql="UPDATE students SET classId=3 WHERE stuSex=1";
//删除
$sql="DELETE FROM students WHERE stuId=3";
mysql_query('set names utf-8');//设置数据库语言
if(mysql_query($sql)){
  echo '<br>更改数据成功！';  
}else{
  echo '<br>更改数据失败!';
}
mysql_close($link);