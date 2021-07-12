<?php 
    $about_img      = get_field( 'about_image' );
    $about_title    = get_field( 'about_title' );
    $about_subtitle = get_field( 'about_subtitle' );
    $about_content  = get_field( 'about_content' );
    $about_button   = get_field( 'about_button' );
    $about_link     = get_field( 'about_link' );
?>
<section id="about" class="about">
    <div class="about-img">
        <img src="<?php echo $about_img['url']; ?>" alt="<?php echo $about_img['alt']; ?>">
    </div>
    <div class="about-content">
        <div class="about-content-wrapper">
            <h2 class="about-content-title"><?php echo $about_title; ?></h2>
            <p class="lead about-content-subtitle"><?php echo $about_subtitle; ?></p>
            <div class="about-content-text">
                <?php echo $about_content; ?>
            </div>
            <a href="<?php echo $about_link; ?>" class="anb-button"><?php echo $about_button; ?></a>
        </div>
    </div>
</section>