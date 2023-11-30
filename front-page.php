<?php 

//Site Header
get_header(); 

//Hero section
get_template_part('parts/content-hero');

//Main Wrapper
echo " <main id='main'>" ;

//Client logo carousel
get_template_part('parts/content-clients');

//About Section
get_template_part('parts/content-about');

//Counts / Statistics
get_template_part('parts/content-counts');

//Tabs Section
get_template_part('parts/content-tabs');

//Services Section
get_template_part('parts/content-services');

//Portfolio Section
get_template_part('parts/content-portfolio');

//Testimonial Section
get_template_part('parts/content-testimonial');

//Pricing Section
get_template_part('parts/content-pricing');

//FAQ Section
get_template_part('parts/content-faq');

//Team Section
get_template_part('parts/content-team');

//Contact Section
get_template_part('parts/content-contact'); 

//FOOTER
get_footer();


?>

