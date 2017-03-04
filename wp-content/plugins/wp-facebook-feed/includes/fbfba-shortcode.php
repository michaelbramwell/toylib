<?php 
add_shortcode( 'arrow_fb_feed', 'fbfba_arrow_feed_shortcode' );
function fbfba_arrow_feed_shortcode($atts , $content){

extract( shortcode_atts( array( 'id' => null ) , $atts ) );
$fbfba_show_photos_from = get_post_meta( $id,'_fbfba_show_photos_from',true);
if($fbfba_show_photos_from == 'userid'){
$instagram_query =  get_post_meta( $id,'_fbfba_user_id',true);
}
if($fbfba_show_photos_from == 'hashtag'){
$instagram_query = get_post_meta( $id,'_fbfba_hashtag',true);
}
$fbfba_number_of_photos = get_post_meta( $id,'_fbfba_number_of_photos',true);
$fbfba_date_posted = get_post_meta($id, '_fbfba_date_posted', true);
$fbfba_profile_picture = get_post_meta($id, '_fbfba_profile_picture', true);
$fbfba_caption_text = get_post_meta($id, '_fbfba_caption_text', true);
$fbfba_show_photos_only = get_post_meta($id, '_fbfba_show_photos_only', true);
$fbfba_feed_style = get_post_meta($id, '_fbfba_feed_style', true);
$fbfba_thumbnail_size = get_post_meta($id, '_fbfba_thumbnail_size', true);
$fbfba_limit_post_characters = get_post_meta($id, '_fbfba_limit_post_characters', true);
$fbfba_column_count = get_post_meta($id, '_fbfba_column_count', true);
$fbfba_theme_selection = get_post_meta($id, '_fbfba_theme_selection', true);
$fbfba_private_access_token = get_post_meta($id, '_fbfba_private_access_token', true);

ob_start();

?>
<style>
.social-feed-container-<?php echo $id; ?> .social-feed-element a{
color: #0088cc !important;
text-decoration: none !important;
}
.social-feed-container-<?php echo $id; ?> .pull-left{

<?php if($fbfba_profile_picture != '1'){echo 'display: none !important;';}?>
}
.social-feed-container-<?php echo $id; ?> .pull-right{

<?php if($fbfba_date_posted != '1'){echo 'display: none !important;';}?>
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{

<?php if($fbfba_caption_text != '1'){echo 'display: none !important;';}?>
}
.social-feed-container-<?php echo $id; ?> .content{

<?php if($fbfba_show_photos_only == '1' || $fbfba_feed_style == 'thumbnails'){echo 'display: none !important;';}?>
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{

<?php if($fbfba_show_photos_only == '1' || $fbfba_feed_style == 'thumbnails'){echo 'display: none !important;';}?>
}
.social-feed-container-<?php echo $id; ?> .pull-right{

<?php if($fbfba_show_photos_only == '1' || $fbfba_feed_style == 'thumbnails'){echo 'display: none !important;';}?>
}
.social-feed-container-<?php echo $id; ?> p.social-feed-text{
<?php if($fbfba_show_photos_only == '1' || $fbfba_feed_style == 'thumbnails'){echo 'display: none !important;';}?>
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body{
<?php if($fbfba_show_photos_only == '1' || $fbfba_feed_style == 'thumbnails'){echo 'display: none !important;';}?>
}
<?php if($fbfba_theme_selection == 'default' || $fbfba_theme_selection == 'template0'){  ?>

<?php  if($fbfba_feed_style == 'thumbnails'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element{
width: <?php echo $fbfba_thumbnail_size; ?>px !important;
display: inline-block !important;
background-color:white !important;
padding: 0 !important;
margin: 5px !important;
vertical-align: middle !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .muted{
color: #6d6d6d;
}
.grid-item {
display: inline-block !important;
} 
.social-feed-container-<?php echo $id; ?> {
text-align: center !important;

}<?php } if($fbfba_feed_style == 'blog_style' || $fbfba_feed_style == 'vertical' ){ ?>

<?php if($fbfba_feed_style == 'vertical'){?> 
.social-feed-container-<?php echo $id; ?> {
width: 400px !important;
margin: 0 auto !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element {
	margin-bottom: 10px !important;
}
.social-feed-container-<?php echo $id; ?> .pull-right{
float: right !important;
}
<?php } ?>
<?php if($fbfba_feed_style == 'vertical' && $fbfba_theme_selection == 'template0'){?> 

.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text{
color: white !important;
}.social-feed-container-<?php echo $id; ?> .pull-right{
float: right !important;
}
.social-feed-container-<?php echo $id; ?> .content .media-body p{
	margin: 0 !important;
}
<?php } ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element{
box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
transition: 0.25s !important;
-webkit-backface-visibility: hidden !important;
background-color: <?php if($fbfba_theme_selection == 'template0'){echo '#414141';}else{echo '#fff ';} ?> !important;
color: #333 !important;
text-align: left !important;
font-size: 14px !important;
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
line-height: 16px !important;
color: black  !important;
padding: 0 !important;
width: 100% !important;
margin-bottom: 5px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element:hover {
box-shadow: 0 0 20px 0 rgba(10, 10, 10, 0.4) !important;
}
.social-feed-container-<?php echo $id; ?> .author-title{
color: <?php if($fbfba_theme_selection == 'template0'){echo 'white';}else{echo 'black';} ?> !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-text{
margin: 0 !important;
}
.social-feed-container-<?php echo $id; ?>  {

text-align: center !important;
}
.social-feed-container-<?php echo $id; ?> .content .media-body p{
	margin: 0 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text{
color: <?php if($fbfba_theme_selection == 'template0'){echo 'white';}else{echo 'black';} ?> !important;
}
 .social-feed-container-<?php echo $id; ?> .content .media-body p{
	margin: 0 !important;
}
<?php } if($fbfba_feed_style == 'masonry'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element{
box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
transition: 0.25s !important;
-webkit-backface-visibility: hidden !important;
background-color: <?php if($fbfba_theme_selection == 'template0'){echo '#414141';}else{echo '#fff ';} ?> !important;
color: #333 !important;
text-align: left !important;
font-size: 14px !important;
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
line-height: 16px !important;
color: black  !important;
padding: 0 !important;
margin: 0 !important;

}
.grid-item {
padding: 3px;
} 
.social-feed-container-<?php echo $id; ?> .social-feed-element:hover {
box-shadow: 0 0 20px 0 rgba(10, 10, 10, 0.4) !important;
}
.social-feed-container-<?php echo $id; ?> .author-title{
color: <?php if($fbfba_theme_selection == 'template0'){echo 'white';}else{echo 'black';} ?> !important;
text-decoration: none !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-text{
margin: 0 !important;
color: black !important;
}
.social-feed-container-<?php echo $id; ?>  {

text-align: center !important;
}
.social-feed-container-<?php echo $id; ?>{
column-gap: 0 !important;
column-count: <?php echo $fbfba_column_count; ?> ;
}
.social-feed-container-<?php echo $id; ?> .content{
padding-top: 15px !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text{
width: 100% !important;
font-size: 14px !important;
color: <?php if($fbfba_theme_selection == 'template0'){echo 'white';}else{echo 'black';} ?> !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
font-size: 15px !important;
font-weight: bold !important;
color: <?php if($fbfba_theme_selection == 'template0'){echo 'white';}else{echo 'black';} ?> !important;
text-decoration: none !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element  {
break-inside: avoid;
padding: 0 !important;
vertical-align: top !important;
margin: 0 !important;

}

.social-feed-element .media-body > p{
	margin: 0 !important;
}
@media (max-width: 600px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 2;
}
}
@media (max-width: 360px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 1;
}
}
<?php } } if($fbfba_theme_selection == 'template1'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element {
padding: 10px !important;
background: transparent !important;
border: none !important;
box-shadow: none !important;
margin: 0 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .muted{
color: #6d6d6d;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element:hover{
box-shadow: none !important;
background-color: #e6e6e6 !important;
border-radius: 10px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .attachment{
border-radius: 10px !important;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
margin: 5px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .pull-right{
float: left !important;
margin: 0 !important;
margin-top: -5px !important;
}
<?php if($fbfba_feed_style == 'thumbnails'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element{
width: <?php echo $fbfba_thumbnail_size; ?>px !important;
display: inline-block !important;
background-color:white !important;
padding: 0 !important;
vertical-align: middle;
margin: 0px !important;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
	display: block !important;
}
.grid-item {
display: inline-block !important;
} 
.social-feed-container-<?php echo $id; ?> .content{
display: block !important;
padding: 0 !important;
}
.social-feed-container-<?php echo $id; ?> p.social-feed-text{
display: none !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body{
display: none !important;
}
<?php } ?>
<?php if($fbfba_feed_style == 'blog_style' || $fbfba_feed_style == 'masonry'|| $fbfba_feed_style == 'vertical' ){ ?>

<?php if($fbfba_feed_style == 'vertical'){?> 
.social-feed-container-<?php echo $id; ?> {
width: 400px !important;
margin: 0 auto !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element {
	margin-bottom: 10px !important;
}
<?php } ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element .content{
padding: 0 !important;
display: block !important;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
	display: block !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text{
color: black !important;
margin-top: 10px !important;
margin-bottom: 0px;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element p{

margin-bottom: 5px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
color: black !important;
font-weight: bold !important;
text-decoration: none !important;

}
<?php } if($fbfba_feed_style == 'masonry'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element .content {
padding: 0 !important;
display: block !important;

}.grid-item {
padding: 3px;
} 
.social-feed-container-<?php echo $id; ?> .social-feed-element  {
break-inside: avoid;
padding: 0 !important;
vertical-align: top !important;
margin: 0 !important;

}
.social-feed-container-<?php echo $id; ?>{
column-gap: 0;
column-count: <?php echo $fbfba_column_count; ?> ;
}
@media (max-width: 600px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 2;
}
}
@media (max-width: 360px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 1;
}
}

<?php	} } if($fbfba_theme_selection == 'template2' || $fbfba_theme_selection == 'template3'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element {
border: none !important;
margin: 0 !important;
box-shadow: none !important;
background-color: <?php if($fbfba_theme_selection == 'template2'){echo 'white';}else{echo '#414141';} ?> !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element .muted{
color: <?php if($fbfba_theme_selection == 'template2'){echo '#6d6d6d';}else{echo '#ababab ';} ?> !important;
}
<?php if($fbfba_theme_selection == 'template2') { ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element:hover{
border-radius: 10px !important;
}
<?php } ?>
.social-feed-container-<?php echo $id; ?> .text-wrapper{
margin: 0px 15px !important;
line-height: 18px;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .pull-right{
float: none;
margin: 15px;
display: block;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .content{
border-top: 2px solid #dfdfdf;
margin: 10px;
display: block;
height: 55px;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element, .social-feed-element .media-body{
margin-top: 5px;
}
<?php if($fbfba_feed_style == 'thumbnails'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element{
width: <?php echo $fbfba_thumbnail_size; ?>px !important;
display: inline-block !important;
background-color:white !important;
padding: 0 !important;
vertical-align: middle;
margin: 5px !important;

}
.social-feed-container-<?php echo $id; ?>{
	text-align: center;
}
.grid-item {
display: inline-block !important;
} 
.social-feed-container-<?php echo $id; ?> .pull-right{
	display: none !important;
}
.social-feed-container-<?php echo $id; ?> .content{
	display: none !important;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
	display: none !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element{
width: <?php echo $fbfba_thumbnail_size; ?>px !important;
display: inline-block !important;
background-color:white !important;
}
<?php } ?>
<?php if($fbfba_feed_style == 'blog_style' || $fbfba_feed_style == 'vertical' ){ ?>

<?php if($fbfba_feed_style == 'vertical'){?> 
.social-feed-container-<?php echo $id; ?> {
width: 400px !important;
margin: 0 auto !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element{
margin: 10px !important;
}
<?php } ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element .content{
margin: 5px 5px 25px 3px !important;
padding: 15px 0 0 15px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .pull-right{
float: none;
margin: 15px;
display: block;
}
.social-feed-container-<?php echo $id; ?>.social-feed-element a{
color: #0088cc !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element {
border: none !important;
box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
padding: 0 !important;
margin: 0 !important;
width: 100% !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text {
color: <?php if($fbfba_theme_selection == 'template2'){echo 'black';}else{echo 'white ';} ?> !important;
margin: 0 !important;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
margin-top: 10px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
color: <?php if($fbfba_theme_selection == 'template2'){echo 'black';}else{echo 'white ';} ?> !important;
font-weight: bold;
text-decoration: none !important;

}
<?php if($fbfba_feed_style == 'vertical'){?> 
.social-feed-container-<?php echo $id; ?> {
width: 400px !important;
margin: 0 auto !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element{
margin: 10px !important;
}
<?php } ?>
<?php } if($fbfba_feed_style == 'masonry'){ ?>
.social-feed-container-<?php echo $id; ?>{
column-gap: 0;
column-count: <?php echo $fbfba_column_count; ?> ;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
margin-top: 10px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .content{
margin: 5px 5px 0px 3px !important;
padding: 15px 0 0 15px !important;
height: 75px;
}.grid-item {
padding: 3px;
} 
.social-feed-container-<?php echo $id; ?> .social-feed-element {
border: none !important;
box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
padding: 0 !important;
margin: 0 !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text {
color: <?php if($fbfba_theme_selection == 'template2'){echo 'black';}else{echo 'white ';} ?> !important;
margin: 0 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
color: <?php if($fbfba_theme_selection == 'template2'){echo 'black';}else{echo 'white ';} ?> !important;
font-weight: bold;
text-decoration: none !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element  {
break-inside: avoid;
padding: 0 !important;
vertical-align: top !important;
margin: 0 !important;

}
@media (max-width: 600px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 2;
}
}
@media (max-width: 360px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 1;
}
}

<?php	} } if($fbfba_theme_selection == 'template4') { ?>

<?php if($fbfba_feed_style == 'thumbnails'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element{
width: <?php echo $fbfba_thumbnail_size; ?>px !important;
display: inline-block !important;
background-color:white !important;
padding: 0 !important;
vertical-align: middle;
margin: 5px;
}
.grid-item {
display: inline-block !important;
} 
.social-feed-container-<?php echo $id; ?>{
	text-align: center !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element{
width: <?php echo $fbfba_thumbnail_size; ?>px !important;
display: inline-block !important;
background-color:white !important;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
display: none !important;
}
.social-feed-container-<?php echo $id; ?> .pull-right{
display: none !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text{
display: none !important;
}

<?php }	if($fbfba_feed_style == 'blog_style'|| $fbfba_feed_style == 'vertical' ){ ?>



.social-feed-container-<?php echo $id; ?> .social-feed-element:hover {
box-shadow: 0 0 20px 0 rgba(10, 10, 10, 0.4) !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .content{
padding: 10px 0 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .pull-left{
display: block !important;
width: 100% !important;
float: none !important;
margin: 0;
text-align: center !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .pull-right{
display: block !important;
width: 100% !important;
float: none !important;
margin: 0;
text-align: center !important;
color: #969696;
height: 17px;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-object{
margin: 0 auto !important;
width: 70px !important;
border-radius: 0 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element {
border: none !important;
box-shadow: none !important;
padding: 0 !important;
width: 100% !important;
background: white !important;
box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
transition: 0.25s !important;
-webkit-backface-visibility: hidden !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text {
color: black !important;
margin: 0 !important;
line-height: 1.3 !important;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
margin-top: 10px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
color: black !important;
font-weight: bold;
margin: 5px !important;
font-size: 17px !important;
text-decoration: none !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body{
text-align: center !important;
line-height: 1 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body > p{
margin: 0 !important;
padding: 0 !important;
color: white !important;
margin-top: 5px !important;
text-align: center !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .attachment{
width: 95%;
margin: 0 auto !important;
display: block;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
width: 95%;
text-align: center;
margin: 0 auto !important;
display: block;
margin-top: 15px !important;
font-size: 1.4em;
padding-bottom: 15px !Important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body{
overflow: none !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .social-feed-element .media-body{
overflow: none !important;
}
<?php }	 if($fbfba_feed_style == 'vertical'){?> 
.social-feed-container-<?php echo $id; ?> {
width: 400px !important;
margin: 0 auto !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element {
	margin-bottom: 10px !important;
}
.social-feed-container-<?php echo $id; ?>  .social-feed-element .social-feed-text{
color: white !important;
}
<?php } if($fbfba_feed_style == 'masonry'){ ?>
.social-feed-container-<?php echo $id; ?> .social-feed-element:hover {
box-shadow: 0 0 20px 0 rgba(10, 10, 10, 0.4) !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .content{
padding: 10px 0 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .pull-left{
display: block !important;
float: none !important;
margin: 0;
text-align: center !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .pull-right{
display: block !important;
width: 100% !important;
float: none !important;
margin: 0;
text-align: center !important;
color: #969696;
height: 17px;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-object{
margin: 0 auto !important;
width: 70px !important;
border-radius: 0 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element {
border: none !important;
box-shadow: none !important;
padding: 0 !important;
background: white !important;
box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
transition: 0.25s !important;
-webkit-backface-visibility: hidden !important;
margin: 0 !important;

}.grid-item {
padding: 3px;
} 
.social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text {
color: black !important;
margin: 0 !important;
line-height: 1.3 !important;
}

.social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
color: black !important;
font-weight: bold;
margin: 5px !important;
font-size: 17px !important;
text-decoration: none !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body{
text-align: center !important;
line-height: 1 !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body > p{
margin: 0 !important;
padding: 0 !important;
color: white !important;
margin-top: 5px !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element .attachment{
width: 90%;
margin: 0 auto !important;
display: block;
}
.social-feed-container-<?php echo $id; ?> .text-wrapper{
width: 90%;
text-align: center;
margin: 0 auto !important;
display: block;
margin-top: 15px !important;
font-size: 16px;
padding-bottom: 15px !important;
line-height: 1.5 !important;

}
.social-feed-container-<?php echo $id; ?> .social-feed-element .media-body{
overflow: none !important;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element, .social-feed-element .media-body{
overflow: none !important;
}
.social-feed-container-<?php echo $id; ?>{
column-gap: 0;
column-count: <?php echo $fbfba_column_count; ?> ;
}
.social-feed-container-<?php echo $id; ?> .social-feed-element  {
break-inside: avoid;
padding: 0 !important;
vertical-align: top !important;
margin: 0 !important;

}
@media (max-width: 600px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 2;
}
}
@media (max-width: 520px) {
.social-feed-container-<?php echo $id; ?> {
column-count: 1;
}
}
<?php	} } ?>
#fbfba-loader{
  zoom:1;/* Increase this for a bigger symbole*/
  
  display:block;
  
  width:32px;
  height:32px;
  
  margin:20px auto;
  
  animation: wait .80s steps(1, start) infinite;
  
  background: linear-gradient(0deg, #f4f5fa 1px, transparent 0, transparent 8px, #f4f5fa 8px),   /* 6  */
              linear-gradient(90deg, #f4f5fa 1px, #f6f9fb 0, #f6f9fb 3px, #f4f5fa 3px),
    
              linear-gradient(0deg, #ececf5 1px, transparent 0, transparent 8px, #ececf5 8px),   /* 5  */
              linear-gradient(90deg, #ececf5 1px, #f2f3f9 0, #f2f3f9 3px, #ececf5 3px),
    
              linear-gradient(0deg, #e7eaf4 1px, transparent 0, transparent 8px, #e7eaf4 8px),   /* 4  */
              linear-gradient(90deg, #e7eaf4 1px, #eef1f8 0, #eef1f8 3px, #e7eaf4 3px),
    
              linear-gradient(0deg, #b9bedd 1px, transparent 0, transparent 10px, #b9bedd 10px), /* 3  */
              linear-gradient(90deg, #b9bedd 1px, #d0d5e8 0, #d0d5e8 3px, #b9bedd 3px),
              
              linear-gradient(0deg, #9fa6d2 1px, transparent 0, transparent 15px, #9fa6d2 15px), /* 2  */
              linear-gradient(90deg, #9fa6d2 1px, #c0c5e1 0, #c0c5e1 3px, #9fa6d2 3px),
              
              linear-gradient(0deg, #8490c6 1px, transparent 0, transparent 15px, #8490c6 15px), /* 1  */
              linear-gradient(90deg, #8490c6 1px, #aeb5da 0, #aeb5da 3px, #8490c6 3px);  
  
  background-repeat: no-repeat;
  
  background-size: 4px 9px,   /* 6 */
                   4px 9px,
    
                   4px 9px,   /* 5 */
                   4px 9px,
    
                   4px 9px,   /* 4 */
                   4px 9px,
    
                   4px 11px,  /* 3 */
                   4px 11px,
    
                   4px 16px,  /* 2 */
                   4px 16px,
    
                   4px 16px,  /* 1 */
                   4px 16px;
  
  background-position:-4px 3px, -4px 3px, -4px 3px, -4px 3px, -4px 3px, -4px 3px, -4px 2px, -4px 2px, -4px 0, -4px 0, -4px 0, -4px 0;
    
}

@keyframes wait{
  12.5%{
    background-position:   -4px,  /* 6 */
                           -4px,
      
                           -4px,  /* 5 */
                           -4px,
                   
                           -4px,  /* 4 */
                           -4px,
                           
                           -4px,  /* 3 */
                           -4px,
      
                           -4px,  /* 2 */
                           -4px,
      
                              0 ,  /* 1 */
                              0 ;
  }
  25%{
    background-position: -4px,  /* 6 */
                           -4px,
      
                           -4px,  /* 5 */
                           -4px,
                   
                           -4px,  /* 4 */
                           -4px,
                           
                           -4px,  /* 3 */
                           -4px,
      
                              0,  /* 2 */
                              0,
      
                            6px,  /* 1 */
                            6px;
  }
  37.5%{
    background-position: -4px,  /* 6 */
                           -4px,
      
                           -4px,  /* 5 */
                           -4px,
                   
                           -4px,  /* 4 */
                           -4px,
                           
                               0,  /* 3 */
                               0,
      
                             6px,  /* 2 */
                             6px,
      
                            12px,  /* 1 */
                            12px;
  }
  50%{
    background-position: -4px,  /* 6 */
                           -4px,
      
                           -4px,  /* 5 */
                           -4px,
                   
                               0,  /* 4 */
                               0,
                           
                             6px,  /* 3 */
                             6px,
      
                            12px,  /* 2 */
                            12px,
      
                            -4px,  /* 1 */
                            -4px;
  }
  62.5%{
    background-position: -4px,  /* 6 */
                           -4px,
      
                               0,  /* 5 */
                               0,
                   
                             6px,  /* 4 */
                             6px,
                           
                            12px,  /* 3 */
                            12px,
      
                            -4px,  /* 2 */
                            -4px,
      
                            -4px,  /* 1 */
                            -4px;
  }
  75%{
    background-position:     0,  /* 6 */
                               0,
      
                             6px,  /* 5 */
                             6px,
                   
                            12px,  /* 4 */
                            12px,
                           
                            -4px,  /* 3 */
                            -4px,
      
                            -4px,  /* 2 */
                            -4px,
      
                            -4px,  /* 1 */
                            -4px;
  }
  87.5%{
    background-position:   6px,  /* 6 */
                             6px,
      
                            12px,  /* 5 */
                            12px,
                   
                            -4px,  /* 4 */
                            -4px,
                           
                            -4px,  /* 3 */
                            -4px,
      
                            -4px,  /* 2 */
                            -4px,
      
                            -4px,  /* 1 */
                            -4px;
  }
  100%{
    background-position:    12px,  /* 6 */
                            12px,
      
                            -4px,  /* 5 */
                            -4px,
                   
                            -4px,  /* 4 */
                            -4px,
                           
                            -4px,  /* 3 */
                            -4px,
      
                            -4px,  /* 2 */
                            -4px,
      
                            -4px,  /* 1 */
                            -4px;
  }
}


/* Boring body Style */
.fbfba-wrapper{
  text-align:center;
}

</style>

<div id="social-feed-container-<?php echo $id; ?>" class="social-feed-container-<?php echo $id; ?>"> 
<div class="fbfba-wrapper">
  <div id="fbfba-loader"></div>
</div>
</div>

<script>
setTimeout(function(){ 
	
var fbfba_access_token = '';
var fbfba_show_photos_from = '<?php echo $fbfba_show_photos_from; ?>';
var fbfba_private_access_token = '<?php echo $fbfba_private_access_token; ?>';
var instagram_query_string = '<?php echo $instagram_query; ?>';
var instagram_limit = '<?php echo $fbfba_number_of_photos; ?>';
var fbfba_theme_selection = '<?php echo $fbfba_theme_selection; ?>';
var fbfba_limit_post_characters = '<?php echo $fbfba_limit_post_characters; ?>';
jQuery(document).ready(function(){
	if(fbfba_private_access_token == ''){
	fbfba_access_token = '3115610306.54da896.ae799867a8074bcb91b5cd6995b4974e';
}else{
	fbfba_access_token = fbfba_private_access_token;
}
if(fbfba_show_photos_from == 'hashtag'){
fbfba_access_token = '3115610306.54da896.ae799867a8074bcb91b5cd6995b4974e';
}
jQuery('.social-feed-container-'+<?php echo $id; ?>).socialfeed({
	 facebook:{
        accounts: ['@'+instagram_query_string],  //Array: Specify a list of accounts from which to pull wall posts
        limit: instagram_limit,                                   //Integer: max number of posts to load
        access_token: '274376249625432|03d7cc70158f4b720a124c11aad5606e'  //String: "APP_ID|APP_SECRET"
    },
<?php if($fbfba_theme_selection == 'default' || $fbfba_theme_selection == 'template0') { ?>
template_html: '<div class="grid-item"><div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" social-feed-id = "{{=it.id}}"><div class="content"><a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a><div class="media-body"><p><span class="muted pull-right"> {{=it.time_ago}}</span><strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" ><span class="author-title">{{=it.author_name}}</span></a></strong></p><div class="text-wrapper"><p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p></div></div></div><a href="{{=it.link}}" target="_blank" class="">{{=it.attachment}}</a></div></div>',
<?php	} ?>
<?php if($fbfba_theme_selection == 'template1') { ?>
template_html: '<div class="grid-item"><div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" social-feed-id = "{{=it.id}}"><div class="content"><div class="text-wrapper"><a href="{{=it.link}}" target="_blank" class="">{{=it.attachment}}</a><p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p></div><div class="media-body"><a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a><p><strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" ><span class="author-title">{{=it.author_name}}</span></a></strong></p><span class="muted pull-right"> {{=it.time_ago}}</span></div></div></div></div>',
<?php	} ?>
<?php if($fbfba_theme_selection == 'template2' || $fbfba_theme_selection == 'template3') { ?>
template_html: '<div class="grid-item"><div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" social-feed-id = "{{=it.id}}"><a href="{{=it.link}}" target="_blank" class="">{{=it.attachment}}</a><span class="muted pull-right"> {{=it.time_ago}}</span><div class="text-wrapper"><p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p></div><div class="content"><a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a><div class="media-body"><p><strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" ><span class="author-title">{{=it.author_name}}</span></a></strong></p></div></div></div></div>',
<?php	} ?>
<?php if($fbfba_theme_selection == 'template4') { ?>
template_html: '<div class="grid-item"><div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" social-feed-id = "{{=it.id}}"><div class="content"><a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a><div class="media-body"><p><strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" ><span class="author-title">{{=it.author_name}}</span></a></strong></p><span class="muted pull-right"> {{=it.time_ago}}</span></div></div><a href="{{=it.link}}" target="_blank" class="">{{=it.attachment}}</a><div class="text-wrapper"><p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p></div></div></div>',
<?php	} ?>

date_format: "ll",                              //String: Display format of the date attribute (see http://momentjs.com/docs/#/displaying/format/)
date_locale: "en",   
// GENERAL SETTINGS
length:fbfba_limit_post_characters,                                     //Integer: For posts with text longer than this length, show an ellipsis.
show_media:true

});


});

jQuery( "#fbfba-loader" ).remove();
	jQuery( "#fbfba-wrapper" ).remove();
}, 1000);
</script>


<?php
return ob_get_clean();
}