<?php
$post_type = 'doctor';
$taxonomy = 'doctor-category';
extract(shortcode_atts(array(
    'numbers_of_doctor'	=> 4,
), (array) get_field('numbers_of_doctor', 'option') ));

// $doctor_cat_terms = get_terms( $taxonomy, array('parent' => 0, 'hide_empty' => true ) );
$doctor_cat_terms = false;
$count_doctor = pll_count_posts( pll_current_language(), array('post_type' => 'doctor') );
if ($count_doctor) :
    ?>
    <div class="top-doctor container">
        <div class="top-heading-area text-center">
            <h2 class="c-heading-2"><a href="<?php echo site_url('doctors') ;?>"><?php site_text('DOCTOR'); ?></a></h2>
            <div class="list-tab">
                <!-- <ul class="list-item-tabs">
                <?php if($doctor_cat_terms) : foreach ($doctor_cat_terms as $key => $doctor_id) :
                $list_doctor_name = $doctor_id->name;
                $list_doctor_id = $doctor_id->term_id;
                ?>
                <li class="tab-item <?php echo ($key == 0) ? 'active' : ''; ?>" data-tab="#doctor-<?php echo $list_doctor_id; ?>"><span><?php echo $list_doctor_name; ?></span></li>
            <?php endforeach; else : ?>
            <li class="tab-item active" data-tab="#doctor-full"></li>
        <?php endif;?>
    </ul> -->
    <div class="arrow-group hidden-sp">
        <span class="arrow-left owlNextBtn"></span>
        <span class="arrow-right owlPrevBtn"></span>
    </div>
</div>
</div>
<div class="list-content-tab">
    <?php
    if($doctor_cat_terms) :
        foreach ($doctor_cat_terms as $key => $doctor_id) :
            $list_doctor_id = $doctor_id->term_id;
            $args = array(
                'post_type' => $post_type,
                'posts_per_page' => $numbers_of_doctor,
                'public'         => true,
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'term_id',
                        'terms' => $list_doctor_id
                    )
                )
            );
            $query = new WP_Query( $args );
            ?>
            <div id="doctor-<?php echo $list_doctor_id; ?>" class="tab-content <?php echo ($key == 0) ? 'active-tab-content' : ''; ?>">
                <div class="team-slider owl-carousel">
                    <?php
                    while($query->have_posts()): $query->the_post();
                    $featured_img_thumb = get_the_post_thumbnail_url($post->ID, 'large');
                    if ($featured_img_thumb == '') {
                        $featured_img_thumb = site_get_assets('img/common/default_doctor.png');
                    }
                    ?>
                    <div class="doctor-item open-popup" data-target="popup" data-id="<?php echo $post->ID; ?>" data-url="<?php echo admin_url('admin-ajax.php');?>">
                        <img src="<?php echo $featured_img_thumb; ?>" alt="">
                        <p><?php the_title(); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php
    endforeach;
    else :
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => $numbers_of_doctor,
        );
        $query = new WP_Query( $args );
        ?>
        <div id="doctor-full" class="tab-content active-tab-content">
            <div class="team-slider owl-carousel">
                <?php
                while($query->have_posts()): $query->the_post();
                $featured_img_thumb = get_the_post_thumbnail_url($post->ID, 'large');
                if ($featured_img_thumb == '') {
                    $featured_img_thumb = site_get_assets('img/common/default_doctor.png');
                }
                ?>
                <div class="doctor-item open-popup" data-target="popup" data-id="<?php echo $post->ID; ?>" data-url="<?php echo admin_url('admin-ajax.php');?>">
                    <img src="<?php echo $featured_img_thumb?>" alt="">
                    <p><?php the_title(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
</div>
<div class="arrow-group hidden-pc text-center">
    <span class="arrow-left owlNextBtn"></span>
    <span class="arrow-right owlPrevBtn"></span>
</div>
</div>
<div id="popup" class="popup popup-doctor hidden">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <button class="is-large delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div class="content">
                <div class="doctor_list-item">
                    <div class="item_image">
                        <img src="" alt="">
                    </div>
                    <div class="item_info">
                        <div class="item_content">
                            <p class="item_info-title"></p>
                            <p class="item_info-subtitle"></p>
                            <div class="content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php endif; ?>
