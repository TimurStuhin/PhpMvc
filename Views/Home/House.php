<?php include 'Views/Layout/Header.php';?>  
<section class="description">
    <div class="container">
    <?php if(!$house['grid_type']):?>
        <h1>Donec a gravida</h1>

        <div class="row">

            <div class="col-lg-4 col-md-4">
                <img src="<?php echo $image[0];?>" />
            </div>

            <div class="col-lg-8 col-md-8">
                <div class="row">

                    <div class="col-lg-8 col-md-8">
                        <img src="<?php echo $image[1];?>" />
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <img src="<?php echo $image[2];?>" />
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 top">
                        <img src="<?php echo $image[3];?>" />
                    </div>
                    <div class="col-lg-6 col-md-6 top">
                        <img src="<?php echo $image[4];?>" />
                    </div>
                </div>
            </div>

        </div>
    <?php else:?>
        <div class="row">

            <div class="col-lg-6 col-md-6 ">
                <img class="extend_grid" src="<?php echo $image[0];?>" />
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <img src="<?php echo $image[1];?>" />
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <img src="<?php echo $image[2];?>" />
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-5 top">
                        <img class="extend_grid_sec" src="<?php echo $image[3];?>" />
                    </div>
                    <div class="col-lg-6 col-md-6 top">

                        <img src="<?php echo $image[4];?>" />
                    </div>
                </div>
            </div>

        </div>
    <?php endif;?>
        <div class="container">

            <h1>Description</h1>
            <div class="row">

                <div class="col-lg-7">

                    <h4 class="descr_text gre"><?php echo $house['name'];?></h4>

                    <p class="descr_text">
                        <?php echo $house['description'];?>
                    </p>

                </div>

                <div class="col-lg-4">
                    <h4 class="gre">Libero</h4>

                    <ul>
                        <li><svg></svg>Suspendisse venenatis leo feugiat</li>
                        <li><svg></svg>Est in sagittis cursus</li>
                        <li><svg></svg>Pretium interdum nibh non</li>
                        <li><svg></svg>Praesent volutpat vulputate lobortis</li>
                        <li><svg></svg>Vulputate lobortis, quam leo</li>
                        <li><svg></svg>Purus id tellus eleifend tempus auctor</li>
                    </ul>

                    <h3 class="gre">Nullam</h3>
                    <h3 class="price_n"><?php echo $house['price'];?> y.e.</h3>
                </div>
            </div>

            <button class="to_order_l">To order</button>
            <button class="see_more">See more</button>
        </div>
    </div>
</section>

<!--<section class="description">
    <div class="container">

        <h1>Donec a gravida</h1>

        <div class="row">

            <div class="col-lg-6 col-md-6 ">
                <img class="extend_grid" src="~/Content/Images/Description_2/Exterior.png" />
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <img src="~/Content/Images/Description_2/Interior_1.png" />
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <img src="~/Content/Images/Description_2/Interior_2.png" />
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-5 top">
                        <img class="extend_grid_sec" src="~/Content/Images/Description_2/Interior_3.png" />
                    </div>
                    <div class="col-lg-6 col-md-6 top">

                        <img src="~/Content/Images/Description_2/Interior_4.png" />
                    </div>
                </div>
            </div>

        </div>


        <div class="container">

            <h1>Description</h1>
            <div class="row">

                <div class="col-lg-7">

                    <h4 class="descr_text gre">Mauris eleifend ornare ante ac malesuada</h4>

                    <p class="descr_text">
                        Vestibulum condimentum auctor ligula vel tincidunt. 
                        Nulla luctus lacinia diam. In hac habitasse platea dictumst. 
                        Cras finibus neque vitae eleifend pellentesque. Quisque sed ante nec diam tincidunt suscipit a eget magna. 
                        Aliquam ut nisi id est iaculis ultricies sit amet a elit. Praesent congue velit odio, in tempor velit tempor ac.
                        Duis mattis neque est, eu lobortis augue sodales in. Proin at consectetur purus. Maecenas ut varius orci. 
                        Donec feugiat, orci quis accumsan bibendum, enim justo cursus orci, ac tristique purus elit a risus.
                        Nullam a lectus consequat, tincidunt augue ac, volutpat metus. Vestibulum vestibulum mauris non nisl convallis scelerisque.
                        Donec eu tellus dapibus, accumsan augue et, scelerisque justo. In auctor ultrices diam, nec posuere ligula accumsan ac.
                    </p>

                </div>

                <div class="col-lg-4">
                    <h4 class="gre">Libero</h4>

                    <ul>
                        <li><svg></svg>Nulla id ligulasit amet sem</li>
                        <li><svg></svg>Maecenas sagittis est a velit lobortis</li>
                        <li><svg></svg>Ut ac sem sit amet</li>
                        <li><svg></svg>Nullam elit nunc, congue</li>
                        <li><svg></svg>Nam tristique vitae massa</li>
                        <li><svg></svg>Nulla ullamcorper, leo id facilisis</li>
                    </ul>

                    <h3 class="gre">Nullam</h3>
                    <h3 class="price_n">8 700 y.e.</h3>
                </div>
            </div>

            <button class="to_order_l">To order</button>
            <button class="see_more">See more</button>
        </div>
    </div>
</section>-->
<?php include 'Views/Layout/Footer.php';?>  