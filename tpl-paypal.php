<?php
/**
 * The template for displaying all pages.
   Template Name: Paypal page template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<div class="container-fluid">
<!-- Banner -->
	<div class="row-fluid">
    	<div class="contact-banner">
        
        </div>
    </div>
<!-- end Banner -->
	<div class="row-fluid">
		<div class="about-head">
        	<input type="submit" value="Pay Us">
        </div>
	</div>
	
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="dharmendra25d@gmail.com">
    <input type="hidden" name="item_name" value="Donation">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="lc" value="AU">
    <input type="hidden" name="bn" value="PP-BuyNowBF">
    


	
		<div class="row-fluid">
       <div class="span12 amt_txt">
	   <div class="span6 offset1 ">
	   <input type="text" name="amount" value="" placeholder="Type Amount">
	   </div>
	   <div class="span5">
	   <input type="image" src="<?php echo get_template_directory_uri();?>/img/pay-now.png ?>" name="submit" alt="PayPal - The safer, easier way to pay online.">
	   </div>
	   </div>
	   </form>
	   </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>