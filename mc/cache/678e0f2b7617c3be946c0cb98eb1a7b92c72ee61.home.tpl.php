<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-29 15:05:25
  from 'D:\wamp\www\smarty\v\html\home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5cee9fb5c01332_82768428',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '226512bd98326bec82fa51794b713316a144ac8f' => 
    array (
      0 => 'D:\\wamp\\www\\smarty\\v\\html\\home\\home.tpl',
      1 => 1559142279,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5cee9fb5c01332_82768428 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    div {
        word-break:break-all;
    }
</style>
<html>

    <head></head>

    <body>
        Hi! you <br/><br/>
        

        <button class='show-input'>Insert Data</button><br/><br/>
        <div class='insert-block' hidden>
            帳號<input type="text" name="email" /><br/>            
            密碼<input type="text" name="pwd" /><br/>
            名字<input type="text" name="name" /><br/>
            地址<input type="text" name="addr" /><br/>
            電話<input type="text" name="phone" /><br/>
            身分<input type="text" name="identity" value="1" /><br/>
            <button class='insert-account'>Submit Data</button>
        </div>        

        <br>

----下面是div 輸入框-----
        <div id="test" name="test" contenteditable="true" style="width:50%"><span></span></div>
----上面是div 輸入框-----
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
    }).on('click', '.show-input', function(){
        $(this).hide();
        $(".insert-block").show();
    })

    debugger;
})

</script><?php }
}
