<?php include 'Views/Layout/Header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <form action="#" method="post" enctype="multipart/form-data">
                <h4>Name</h4>
                <input type="text" name="name"/>
                <h4>inner_title</h4>
                <input type="text" name="inner_title"/>
                <h4>short_description</h4>
                <input type="text" name="short_description"/>
                <h4>description</h4>
                <input type="text" name="description"/>
                <h4>category</h4>
                <select name="category">

                </select>
                <h4>status</h4>
                <input type="text" name="status"/>
                <h4>grid_type</h4>
                <input type="text" name="grid_type"/>
                <h4>image</h4>
                <input type="file" name="image0"/>
                <input type="file" name="image1"/>
                <input type="file" name="image2"/>
                <input type="file" name="image3"/>
                <input type="file" name="image4"/>
                <h4>miniature</h4>
                <input type="file" name="miniature"/>
                <h4>price</h4>
                <input type="text" name="price"/>
                <input type="submit" name="submit"/>
            </form>
        </div>
    </div>
</div>
<script>
    $.post('ListCategoryAjax', null, function (data) {
        var list = JSON.parse(data);
        $(list).each(function (index, data) {
            $('select').append('<option value="' + data.id + '">' + data.name + '</option>');
        })
    })
</script>
<?php include 'Views/Layout/Footer.php'; ?>