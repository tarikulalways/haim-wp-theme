<?php get_header(); ?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>404 page</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="404-content">
                    <h4>Sorry not found you page!</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, beatae.</p>
                    <div class="col-md-6 ml-0">
                        <hr>
                    </div>
                    <a href="<?php echo esc_url(home_url());?>" class="btn btn-success">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>