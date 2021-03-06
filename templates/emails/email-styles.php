<?php
/**
 * Email Styles
 *
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// Load Template
$template = '';
if (defined('YITH_WCET_PREMIUM')){
    $template        = get_option( 'yith-wcet-email-template-' . $mail_type );
}else{
    $template        = get_option( 'yith-wcet-email-template' );
}

// used for preview
global $template_id;
if ( isset($template_id)){
    $template = $template_id;
}

$meta            = get_post_meta( $template, '_template_meta', true);

$bg              = ( isset( $meta['bg_color'] ) ) ? $meta['bg_color'] : '#F5F5F5';
$body            = ( isset( $meta['body_color'] ) ) ? $meta['body_color'] : '#FFFFFF';
$base            = ( isset( $meta['base_color'] ) ) ? $meta['base_color'] : '#2470FF';
$base_text       = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text            = ( isset( $meta['txt_color'] ) ) ? $meta['txt_color'] : '#000000';

// PREMIUM
$page_width                     = ( isset( $meta['page_width'] ) ) ? $meta['page_width'] . 'px' : '800px';
$page_border_radius             = ( isset( $meta['page_border_radius'] ) ) ? $meta['page_border_radius'] . 'px': '3px' ;
$header_position                = ( isset( $meta['header_position'] ) ) ? $meta['header_position'] : 'center';
$header_color                   = ( isset( $meta['header_color'] ) ) ? $meta['header_color'] : $body ;
$h1_size                        = ( isset( $meta['h1_size'] ) ) ? $meta['h1_size'] . 'px': '30px' ;
$h2_size                        = ( isset( $meta['h2_size'] ) ) ? $meta['h2_size'] . 'px': '18px' ;
$h3_size                        = ( isset( $meta['h3_size'] ) ) ? $meta['h3_size'] . 'px': '16px' ;
$body_size                      = ( isset( $meta['body_size'] ) ) ? $meta['body_size'] . 'px': '14px' ;
$table_border_width             = ( isset( $meta['table_border_width'] ) ) ? $meta['table_border_width'] . 'px': '1px' ;
$table_border_width_plus2       = ( isset( $meta['table_border_width'] ) ) ? ( intval($meta['table_border_width']) + 2) . 'px': '2px' ;
$table_border_color             = ( isset( $meta['table_border_color'] ) ) ? $meta['table_border_color'] : '#cccccc' ;
$table_bg_color                 = ( isset( $meta['table_bg_color'] ) ) ? $meta['table_bg_color'] : 'transparent' ;

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
?>

li.yith-wcet-socials-icons{
    height: 20px;
    width: 20px;
    padding: 0 5px;
    display: inline-block;
}

li.yith-wcet-socials-icons img{
    height: 20px;
    width: 20px;
}


#wrapper {
    background-color: <?php echo esc_attr( $bg ); ?>;
    margin: 0;
    padding: 70px 0 70px 0;
    -webkit-text-size-adjust: none !important;
    width: 100%;
}

#template_container {
    content: '<?php echo $mail_type; ?>';
    box-shadow: 0 1px 4px rgba(0,0,0,0.1) !important;
    background-color: <?php echo esc_attr( $body ); ?>;
    border: 1px solid $bg_darker_10;
    border-radius: <?php echo esc_attr( $page_border_radius ); ?> !important;
    width: <?php echo $page_width; ?>;
    overflow: hidden;
}

#template_header_image {
    background-color: <?php echo esc_attr( $header_color ); ?>;
    color: <?php echo $base_text; ?>;
    border-bottom: 0;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-weight: bold;
    line-height: 100%;
    vertical-align: middle;
    text-align: <?php echo $header_position ?>;
    width: <?php echo $page_width ?>;
}

#template_header_image img{
    height:100px;    
    margin-top: 10px;
    margin-bottom :10px;
}

#template_header {
    background-color: <?php echo esc_attr( $base ); ?>;
    color: <?php echo $base_text; ?>;
    border-bottom: 0;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-weight: bold;
    line-height: 100%;
    vertical-align: middle;
    width: <?php echo $page_width; ?>;
}

#template_header h1 {
    color: <?php echo $base_text; ?>;
}

#template_custom_links {
    background: rgba(255,255,255,0.4);
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    vertical-align: middle;
    width: <?php echo $page_width; ?>;
    text-align: right;
}
#template_custom_links a{
    color: <?php echo esc_attr( $base ); ?>;
    font-size: 12px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 600;
}
#template_custom_links td{
    padding: 0 48px;
}
#template_custom_links ul{
    margin: 5px 0;
}
#template_custom_links li{
    display: inline-block;
    padding: 0 10px;
    vertical-align: middle;
}

#template_custom_links li.yith-wcet-socials-icons{
    height: 20px;
    width: 20px;
    padding: 0 5px;
}

#template_body {
    width: <?php echo $page_width; ?>;
}

#template_footer {
    width: <?php echo $page_width; ?>;
}

#template_footer img{
    height:70px;
    margin-left: 48px;
    margin-bottom: 48px;
}

#template_footer td {
    padding: 0;
}

#template_footer #credit {
    padding: 0 48px 48px 48px;
}

#body_content {
    background-color: <?php echo esc_attr( $body ); ?>;
}

#body_content table td {
    padding: 48px;
}

#body_content table td td {
    padding: 12px;
}

#body_content table td th {
    padding: 12px;
}

#body_content p {
    margin: 0 0 16px;
}

#body_content_inner {
    color: <?php echo $text_lighter_20;?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: <?php echo esc_attr( $body_size ) ?>;
    line-height: 150%;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h1 {
    color: <?php echo esc_attr( $base ); ?>;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: <?php echo esc_attr( $h1_size ) ?>;
    font-weight: 300;
    line-height: 150%;
    margin: 0;
    padding: 36px 48px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
    text-shadow: 0 1px 0 <?php echo $base_lighter_20; ?>;
    -webkit-font-smoothing: antialiased;
}

h2 {
    color: <?php echo esc_attr( $base ); ?>;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: <?php echo esc_attr( $h2_size ) ?>;
    font-weight: bold;
    line-height: 130%;
    margin: 16px 0 8px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
    color: <?php echo esc_attr( $base ); ?>;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: <?php echo esc_attr( $h3_size ) ?>;
    font-weight: bold;
    line-height: 130%;
    margin: 16px 0 8px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
    color: <?php echo esc_attr( $base ); ?>;
    font-weight: normal;
    text-decoration: underline;
}

img {
    border: non;
    display: inline;
    font-size: 14px;
    font-weight: bold;
    height: auto;
    line-height: 100%;
    outline: none;
    text-decoration: none;
    text-transform: capitalize;
}

#yith-wcet-order-items-table{
    border: <?php echo esc_attr( $table_border_width ); ?> solid <?php echo esc_attr( $table_border_color ); ?>;
    background: <?php echo esc_attr( $table_bg_color ); ?>;
    border-collapse: collapse;
}

.yith-wcet-order-items-table-element{
    border: <?php echo esc_attr( $table_border_width ); ?> solid <?php echo esc_attr( $table_border_color ); ?>;
    border-collapse: collapse;
    border-spacing: 0;
}

.yith-wcet-order-items-table-element-bigtop{
    border: <?php echo esc_attr( $table_border_width ); ?> solid <?php echo esc_attr( $table_border_color ); ?>;
    border-top-width: <?php echo esc_attr( $table_border_width_plus2 ); ?>;
}

<?php
