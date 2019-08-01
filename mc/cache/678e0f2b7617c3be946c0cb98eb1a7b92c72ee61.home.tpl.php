<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-24 14:33:21
  from 'D:\wamp\www\smarty\v\html\home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d386c31e7b1a3_82680439',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '226512bd98326bec82fa51794b713316a144ac8f' => 
    array (
      0 => 'D:\\wamp\\www\\smarty\\v\\html\\home\\home.tpl',
      1 => 1563978800,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5d386c31e7b1a3_82680439 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="zh-TW">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

    <body>
		<marquee direction="up" scrollamount="10" style="width: 310px;height: 300px" id="">
			<a href="#"><span style="font-size:20px">南南東 南南東 南南東 南南東</span></a><br />
			<a href="#"><span style="font-size:20px">南南東 南南東 南南東 南南東</span></a><br />
			<a href="#"><span style="font-size:20px">南南東 南南東 南南東 南南東</span></a><br />
			<a href="#"><span style="font-size:20px">南南東 南南東 南南東 南南東</span></a><br />
		</marquee>
		<br/>

		<ul>
			<li id="li_1">1</li>
			<li id="li_2">2</li>
		</ul>



        <button class='show-input-insert'>Insert Data</button><br/><br/>
        <div class='input-block-insert' hidden>
            帳號<input type="text" name="email" /><br/>
            密碼<input type="text" name="pwd" /><br/>
            名字<input type="text" name="name" /><br/>
            地址<input type="text" name="addr" /><br/>
            電話<input type="text" name="phone" /><br/>
            身分<input type="text" name="identity" value="1" /><br/>
            <button class='insert-account'>Submit Data</button>
        </div>

		<button class='show-input-update'>Update Data</button><br/><br/>
        <div class='input-block-update' hidden>
            帳號<input type="text" name="email" /><br/>
            密碼<input type="text" name="pwd" /><br/>
            名字<input type="text" name="name" /><br/>
            地址<input type="text" name="addr" /><br/>
            電話<input type="text" name="phone" /><br/>
            身分<input type="text" name="identity" value="1" /><br/>
            <button class='update-account'>Submit Data</button>
        </div>

        <button class="ajax">ajax</button>
        <div id="ajax"></div>

        <br>

    </body>

</html>

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
v/js/jquery.blockUI.js"></script>

<script>

$(function(){
    $(document).on('click', '.insert-account', function(){
        action = 'insert_account';

        $.ajax({
            url: 'home.php',
            method: 'post',
            dataType: 'json',
            data: {
                action: action,
                email: $('input[name="email"]').val(),
                pwd: $('input[name="pwd"]').val(),
                name: $('input[name="name"]').val(),
                addr: $('input[name="addr"]').val(),
                phone: $('input[name="phone"]').val(),
                identity: $('input[name="identity"]').val()
            },
            beforeSend:function(res){
                //$.blockUI();
            },
            success: function(response) {
                if (response) {
                    alert('Insert success');
                } else {
                    alert('Insert fail');
                }
            },
            complete: function(){
                //$.unblockUI();
            }
        });
    }).on('click', '.update-account', function(){
        action = 'update_account';

        $.ajax({
            url: 'home.php',
            method: 'post',
            dataType: 'json',
            data: {
                action: action,
                email: $('.input-block-update input[name="email"]').val(),
                pwd: $('.input-block-update input[name="pwd"]').val(),
                name: $('.input-block-update input[name="name"]').val(),
                addr: $('.input-block-update input[name="addr"]').val(),
                phone: $('.input-block-update input[name="phone"]').val(),
                identity: $('.input-block-update input[name="identity"]').val()
            },
            beforeSend:function(res){
                $.blockUI();
            },
            success: function(response) {
                if (response) {
                    console.log('aa');
                } else {
                    alert('Insert fail');
                }
            },
            complete: function(){
                $.unblockUI();
            }
        });
	}).on('click', '.show-input-insert', function(){
        $(this).hide();
        $(".input-block-insert").show();
    }).on('click', '.show-input-update', function(){
		$(this).hide();
        $(".input-block-update").show();
	}).on('click', '.ajax', function(){
		action = 'get_ajax';
        $.ajax({
             url: 'home.php',
			 method: 'post',
             data: {
                 action: action
             },
             dataType: 'html',
			 success: function(res){
				 $("#ajax").html(res);
			 }
		});
    }).on('click', '#li_1', function() {
		alert('www');
	})



})

</script>
<?php }
}
