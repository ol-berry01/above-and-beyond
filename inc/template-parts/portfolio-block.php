<?php 
    $portfolio_image        = get_field( 'portfolio_image' );
    $portfolio_title        = get_field( 'portfolio_title' );
    $portfolio_content      = get_field( 'portfolio_content' );
    $portfolio_buttton       = get_field( 'portfolio_buttton' );
    $portfolio_link         = get_field( 'portfolio_link' );
?>

<section id="portfolio" class="portfolio">

    <img class="portfolio-img" src="<?php echo $portfolio_image['url']; ?>" alt="<?php echo $portfolio_image['url']; ?>">

    <div class="portfolio-wrapper">
        <div class="portfolio-content">
            <h2 class="portfolio-content-title"><?php echo $portfolio_title; ?></h2>
            <div class="portfolio-content-description"><?php echo $portfolio_content; ?></div>
            <a href="<?php echo $portfolio_link ?>" class="anb-button-alt"><?php echo $portfolio_buttton; ?></a>
        </div>
    </div>

</section>