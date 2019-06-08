<style>
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
<script src="{$admin}v/js/jquery.blockUI.js"></script>

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

</script>