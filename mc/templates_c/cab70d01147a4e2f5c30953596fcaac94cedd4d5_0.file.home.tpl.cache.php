<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-07 12:54:23
  from 'D:\wamp\www\smarty\v\home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5cd17fff6d1b06_41933961',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'cab70d01147a4e2f5c30953596fcaac94cedd4d5' => 
    array (
      0 => 'D:\\wamp\\www\\smarty\\v\\home\\home.tpl',
      1 => 1557220057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd17fff6d1b06_41933961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20782425595cd17fff65c7e2_98360694';
?>
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

    </body>
    
</html>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

$(function(){
    $(document).on('click', '.insert-account', function(){        
        action = 'insert_account';
        $.ajax({
            url: '<?php echo '/*%%SmartyNocache:20782425595cd17fff65c7e2_98360694%%*/<?php echo $_smarty_tpl->tpl_vars[\'admin\']->value;?>
/*/%%SmartyNocache:20782425595cd17fff65c7e2_98360694%%*/';?>
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

<?php echo '</script'; ?>
><?php }
}
