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
