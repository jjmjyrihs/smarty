<?php
/* Smarty version 3.1.34-dev-7, created on 2019-08-11 09:56:28
  from 'D:\wamp\www\smarty\v\html\home\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d4fe64c73b619_12970418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d07c19993ebb6537a5166581e986b6d7e8a5c0' => 
    array (
      0 => 'D:\\wamp\\www\\smarty\\v\\html\\home\\test.tpl',
      1 => 1563981142,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5d4fe64c73b619_12970418 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
		<link rel="shortcut icon" href="#" />

	<title>test</title>
</head>
<body>
	<a id="link" href="#">点击一下进行测试</a>
	<ul id="tip">
		<li>显示mousedown mouseup click focus事件的触发顺序</li>
	</ul>
<script type="text/javascript">
	var a=document.getElementById("link");
	a.onclick=function(){
		var newele=document.createElement("li");
		newele.innerText="onclick";
		var ele=document.getElementById("tip");
		ele.appendChild(newele);
	};
	a.onfocus=function(){
		var newele=document.createElement("li");
		newele.innerText="onfocus";
		var ele=document.getElementById("tip");
		ele.appendChild(newele);
	};
	a.onmousedown=function(){
		var newele=document.createElement("li");
		newele.innerText="onmousedown";
		var ele=document.getElementById("tip");
		ele.appendChild(newele);
	};
	a.onmouseup=function(){
		var newele=document.createElement("li");
		newele.innerText="onmouseup";
		var ele=document.getElementById("tip");
		ele.appendChild(newele);
	};
</script>
</body>
</html>
<?php }
}
