<div class="line">© 2017</div>


    <script src="/Animation.js"></script>
    <script>
//        $('.some').click(function(){
//            $.ajax({
//                url: 'Mail.php',
//                type: 'post',
//                dataType: 'html',
//                data: 'aaaaaaaaaaaaaa'
//                
//            }).done(function() {
//          console.log('success');   
//        }).fail(function() {
//          console.log('fail');
//        });
//        });
        $('.confirmation').click(function(){
            var param = $(this).parent().serialize();                
            $.post('Mail.php', param , function(data){
                
            });
        })
        
             $('.tocart').click(function (){
            $.post('/index.php/Cart/AddToCartAjax/'+ $(this).val(), null, function(data){
                $('.cart').html(data);
            })
        });
        $('.delcart').click(function(){
            $.post('DeleteProductFromSessionAjax/'+$(this).val(), null, function(data){
                
            });
        });
    </script>
</body>
</html>