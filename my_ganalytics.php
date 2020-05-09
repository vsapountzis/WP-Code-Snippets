<?php 

// Add this snippet to your child theme's functions.php file. Replace UA-XXXXXΧΧΧ-YΥ with your Analytics Tracking ID.

function my_ganalytics() { ?>
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXΧΧΧ-YΥ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-XXXXXΧΧΧ-YΥ');
  </script>
 
<?php }
add_action('wp_head', 'my_ganalytics');
