<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-07 09:57:12
  from 'D:\wamp\www\smarty_ci3\v\home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5cd15678395493_09386761',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '4315fe0ac999c7fb0f7a64dee4efd2ec15e5eb3b' => 
    array (
      0 => 'D:\\wamp\\www\\smarty_ci3\\v\\home\\home.tpl',
      1 => 1557220057,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5cd15678395493_09386761 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

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

    </body>
    
</html>

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script>

$(function(){
    $(document).on('click', '.insert-account', function(){        
        action = 'insert_account';
        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
home.php',
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
            success: function (response) {
                if (response) {
                    alert('Insert success');
                } else {
                    alert('Insert fail');
                }
            }
        });        
    }).on('click', '.show-input', function(){
        $(this).hide();
        $(".insert-block").show();
    })
})

</script><?php }
}
