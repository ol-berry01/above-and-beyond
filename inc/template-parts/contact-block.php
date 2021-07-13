<?php 
    $contact_title          = get_field( 'contact_title' );
    $contact_subtitle       = get_field( 'contact_subtitle' );
    $contact_description    = get_field( 'contact_description' );
    $contact_button         = get_field( 'contact_button' );
    $contact_link           = get_field( 'contact_link' );
?>

<section id="contact" class="contact">

    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0">
                <div class="contact-wrapper">
                    <div class="contact-content">
                        <h2 class="contact-title"><?php echo $contact_title; ?></h2>
                        <p class="lead contact-subtitle"><?php echo $contact_subtitle; ?></p>
                        <p class="contact-description"><?php echo $contact_description; ?></p>
                        <a href="<?php echo $contact_link; ?>" class="anb-button contact-content-button"><i class="bi bi-envelope"></i> <?php echo $contact_button; ?> <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>