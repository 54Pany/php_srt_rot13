<?php
/*
@Rot13编码/解码
@Author:Pany
@更新:2014年3月4日 19:37:21
@版权:Copyright (c) Pany版权所有
*/
function phpencode($code) {
$encode = str_rot13($code);// 开始编码
return $encode;
}
function phpdecode($code) {
$decode = str_rot13($code);
return $decode;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<meta charset="utf-8">
<title>Rot13编码/解码</title>
<style type="text/css" media="all">
html, body {margin: 0;padding: 0; }body {color: #333;font: 12px Tahoma,Lucida Grande, sans-serif;margin: 9%;}a {color: #0055CC; }img {border: 0px solid #CCC;}h1 {margin: 0;}h3 {color: #555;font-size: 1.6em;font-weight: normal;margin: 0; }pre {color: #0055CC;font-size: 1.1em;line-height: 1.2;margin: 0.25em 0; }p {margin: 0.65em 0;}#ads {border-left: 1px solid #eee;float: right;margin: 0 0 2em 2.5em;padding-left: 3px;width: 160px;}#source {margin-bottom: 2.5em; }pre {overflow: auto;padding:1em 0; }h2 {position: relative;top: 0.5em;}
</style>
<h3>Rot13加密/解密</h3>
<form method="post">
<textarea name="source" cols="55" rows="8">
<?php
if(!empty($_POST['source'])) {
if($_POST['button']=='编码') {
echo  htmlspecialchars(phpencode(stripcslashes($_POST['source'])));
}
if($_POST['button']=='解码') {
echo  htmlspecialchars(phpdecode(stripcslashes($_POST['source'])));
}
}
?>
</textarea>
<?php
if(!empty($_POST['source'])){
if($_POST['button']=='编码') {
echo '<br /><br />编码成功.';
}
if($_POST['button']=='解码') {
echo '<br /><br />解码成功.';
}
}else{
echo '<br /><br />ROT13（回转13位，rotateby13places，有时中间加了个减号称作ROT-13）是一种简易的置换暗码。';
}
?>
<br /><br />
<input type="submit" name="button" value="编码">
<input type="submit" name="button" value="解码">
</form>
<br />
<h3>Just for fun.</h3>
<br />
<h4>Copyright (c) Pany版权所有</h4>