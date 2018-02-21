<?php include 'Views/Layout/Header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <form action="#" method="post" enctype="multipart/form-data">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <img src="<?php echo $productdao->GetImageRoute($images[$i]); ?>">
                    <input type="file" name="image<?php echo $i; ?>" />
                <?php endfor; ?>
                <input type="text" name="name" value="<?php echo $product['name']; ?>"/>
                <input type="text" name="inner_title" value="<?php echo $product['inner_title']; ?>"/>
                <input type="text" name="short_description" value="<?php echo $product['short_description']; ?>"/>
                <input type="text" name="description" value="<?php echo $product['description']; ?>"/>
                <select name="category">
                    
                </select>
                <input type="text" name="status" value="<?php echo $product['status']; ?>"/>
                <input type="text" name="grid_type" value="<?php echo $product['grid_type']; ?>"/>
                <input type="text" name="price" value="<?php echo $product['price']; ?>"/>
                <input type="submit" name="submit" value="Edit" />
            </form>
        </div>
    </div>
</div>
<style>
    img{
        height: 250px;
        width: 250px;
    }
</style>
<script>
    $.post('ListCategoryAjax', null, function (data) {
        var list = JSON.parse(data);
        $(list).each(function (index, data) {
            $('select').append('<option value="' + data.id + '">' + data.name + '</option>');
        })
    })
</script>
<?php include 'Views/Layout/Footer.php'; ?>

