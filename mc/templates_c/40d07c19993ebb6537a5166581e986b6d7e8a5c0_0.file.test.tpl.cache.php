<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-25 07:17:18
  from 'D:\wamp\www\smarty\v\html\home\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d39577e9dcd83_57918390',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5d39577e9dcd83_57918390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8846945515d39577dd5f1c9_72658006';
?>
<!doctype html>
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
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
