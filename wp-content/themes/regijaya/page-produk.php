<?php 
get_header();

$title = 'Produk Kami';
$lang = '_id';
$prefix = 'product_';

$post_per_page = 6;

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $title = 'Our Product'; 
        $lang = '_eng';
    }
}

?>

<!-- SECTION START -->
<section class="my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="section-header" data-aos="fade-up">
                    <h2><?= $title; ?></h2>
                </div>

                <div class="row">

                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                        $args = array( 
                            'posts_per_page'        => $post_per_page,
                            'post_type'             => 'product',
                            'paged' => $paged
                        );

                        $query = new WP_Query($args);

                        foreach($query->posts as $post_item){
                            $post_id = $post_item->ID;

                            $product_image = get_post_meta($post_id, $prefix . 'image_product',true);
                            $product_name = get_post_meta($post_id, $prefix . 'product_name' .$lang,true);
                            $product_subname = get_post_meta($post_id, $prefix . 'product_subname' .$lang,true);
                            $description = get_post_meta($post_id, $prefix . 'description' .$lang,true);
                            $function1_image = get_post_meta($post_id, $prefix . 'image_function1',true);
                            $function2_image = get_post_meta($post_id, $prefix . 'image_function2',true);
                            $function3_image = get_post_meta($post_id, $prefix . 'image_function3',true);
                            $function4_image = get_post_meta($post_id, $prefix . 'image_function4',true);

                            $function = '';

                            if($function1_image) {
                                $function .= '
                                <div class="col-3">
                                    <img src="'.wp_get_attachment_image_url($function1_image, 'large').'" class="img-fluid klien-img">
                                </div>
                                ';
                            }

                            if($function2_image) {
                                $function .= '
                                <div class="col-3">
                                    <img src="'.wp_get_attachment_image_url($function2_image, 'large').'" class="img-fluid klien-img">
                                </div>
                                ';
                            }

                            if($function3_image) {
                                $function .= '
                                <div class="col-3">
                                    <img src="'.wp_get_attachment_image_url($function3_image, 'large').'" class="img-fluid klien-img">
                                </div>
                                ';
                            }

                            if($function4_image) {
                                $function .= '
                                <div class="col-3">
                                    <img src="'.wp_get_attachment_image_url($function4_image, 'large').'" class="img-fluid klien-img">
                                </div>
                                ';
                            }

                            echo '
                            
                            <div class="col-lg-6" data-aos="fade-up">
                                <!-- Start Product -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 text-center-mobile">
                                        <img src="'.wp_get_attachment_image_url($product_image, 'large').'" class="img-fluid klien-img">
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12"></div>
                                    <div class="col-lg-7 col-md-7 col-sm-12 mb-5">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item pointer">
                                                <a class="nav-link active" id="tab1_'.$post_id.'" onclick="tabOnClick('.$post_id.',1);">Produk</a>
                                            </li>
                                            <li class="nav-item pointer">
                                                <a class="nav-link" id="tab2_'.$post_id.'"  onclick="tabOnClick('.$post_id.',2);">Penjelasan</a>
                                            </li>
                                            <li class="nav-item pointer">
                                                <a class="nav-link" id="tab3_'.$post_id.'"  onclick="tabOnClick('.$post_id.',3);">Kegunaan</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- Content Produk -->
                                            <div class="mt-4 tab-pane fade show active" id="content1_'.$post_id.'">
                                                <div class="uppercase"><p class="mb-2">'.$product_name.'</p></div>
                                                <div class="tab-subtitle uppercase"><p>'.$product_subname.'</p></div>
                                            </div>
                                            <!-- Content Penjelasan -->
                                            <div class="mt-4 tab-pane fade" id="content2_'.$post_id.'">
                                                <div class="tab-subtitle">
                                                    <p>'.$description.'</p>
                                                </div>  
                                            </div>
                                            <!-- Content Kegunaan -->
                                            <div class="mt-4 tab-pane fade" id="content3_'.$post_id.'">
                                                <div class="row">'.$function.'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product -->
                            </div>';
                        }

                    ?>

                </div>

                <!-- Start Paging -->
                <?php 
                if (function_exists("cpt_pagination")) {
				
                    cpt_pagination($query->max_num_pages); 
                              
                 }
                ?>
                <!-- End Paging -->
            </div>
            <div class="col-1"></div>
        </div>
    </div>  
</section>
<!-- SECTION END -->  

<script>
    /**
     * Tab JS
     */
    function tabOnClick(i, tab) {
        var tab1 = document.getElementById("tab1_" + i);
        var tab2 = document.getElementById("tab2_" + i);
        var tab3 = document.getElementById("tab3_" + i);

        var content1 = document.getElementById("content1_" + i);
        var content2 = document.getElementById("content2_" + i);
        var content3 = document.getElementById("content3_" + i);

        if(tab == '1'){
            tab1.classList.add("active");
            content1.classList.add("show");
            content1.classList.add("active");
        } else {
            tab1.classList.remove("active");
            content1.classList.remove("show");
            content1.classList.remove("active");
        }

        if(tab == '2'){
            tab2.classList.add("active");
            content2.classList.add("show");
            content2.classList.add("active");
        } else {
            tab2.classList.remove("active");
            content2.classList.remove("show");
            content2.classList.remove("active");
        }

        if(tab == '3'){
            tab3.classList.add("active");
            content3.classList.add("show");
            content3.classList.add("active");
        } else {
            tab3.classList.remove("active");
            content3.classList.remove("show");
            content3.classList.remove("active");
        }
    }
</script>

<?php get_footer() ?>