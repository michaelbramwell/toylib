<?php
wp_nonce_field( 'fbfba_ui_meta_box_nonce', 'fbfba_meta_box_nonce' );

global $post;
$fbfba_show_photos_from = get_post_meta($post->ID, '_fbfba_show_photos_from', true);
$fbfba_user_id = get_post_meta($post->ID, '_fbfba_user_id', true);
$fbfba_hashtag = get_post_meta($post->ID, '_fbfba_hashtag', true);
$fbfba_location = get_post_meta($post->ID, '_fbfba_location', true);
$fbfba_container_width = get_post_meta($post->ID, '_fbfba_container_width', true);
$fbfba_date_posted = get_post_meta($post->ID, '_fbfba_date_posted', true);
$fbfba_profile_picture = get_post_meta($post->ID, '_fbfba_profile_picture', true);
$fbfba_caption_text = get_post_meta($post->ID, '_fbfba_caption_text', true);
$fbfba_link_photos_to_instagram = get_post_meta($post->ID, '_fbfba_link_photos_to_instagram', true);
$fbfba_show_photos_only = get_post_meta($post->ID, '_fbfba_show_photos_only', true);
$fbfba_number_of_photos = get_post_meta($post->ID, '_fbfba_number_of_photos', true);
$fbfba_feed_style = get_post_meta($post->ID, '_fbfba_feed_style', true);
$fbfba_limit_post_characters = get_post_meta($post->ID, '_fbfba_limit_post_characters', true);
$fbfba_thumbnail_size = get_post_meta($post->ID, '_fbfba_thumbnail_size', true);
$fbfba_column_count = get_post_meta($post->ID, '_fbfba_column_count', true);
$fbfba_feed_post_size = get_post_meta($post->ID, '_fbfba_feed_post_size', true);
$fbfba_theme_selection = get_post_meta($post->ID, '_fbfba_theme_selection', true);
$fbfba_private_access_token = get_post_meta($post->ID, '_fbfba_private_access_token', true);


?>
<script type="text/javascript">
  jQuery(document).ready( function($) {
    var selected_feed_style = $('input[name=fbfba_feed_style]:checked', '#fbfba_style_selection_option').val();
    if(selected_feed_style == 'thumbnails'){
      $('#fbfba_thumbnail_style_options').show();
      $('#fbfba_column_count_settings').hide();
      $('#fbfba_thumbnails_image').css('border','2px inset #858585');
      $('#fbfba_masonry_image').css('border','none');
      $('#fbfba_blog_image').css('border','none');
    }
    if(selected_feed_style == 'blog_style' ){
      $('#fbfba_blog_masonry_style_options').show();
      $('#fbfba_column_count_settings').hide();
      $('#fbfba_blog_image').css('border','2px inset #858585');
      $('#fbfba_thumbnails_image').css('border','none');
      $('#fbfba_masonry_image').css('border','none');

    }
    if(selected_feed_style == 'masonry'){
      $('#fbfba_blog_masonry_style_options').show();
      $('#fbfba_column_count_settings').show();
      $('#fbfba_masonry_image').css('border','2px inset #858585');
      $('#fbfba_blog_image').css('border','none');
      $('#fbfba_thumbnails_image').css('border','none');


    }
    if(selected_feed_style == 'vertical' ){
      $('#fbfba_blog_masonry_style_options').show();
      $('#fbfba_column_count_settings').hide();
      $('#fbfba_vertical_image').css('border','2px inset #858585');
      $('#fbfba_blog_image').css('border','none');
      $('#fbfba_thumbnails_image').css('border','none');
      $('#fbfba_masonry_image').css('border','none');

    }
    $('#fbfba_style_selection_option input').on('change', function() {
      var feed_style_selection = $('input[name=fbfba_feed_style]:checked', '#fbfba_style_selection_option').val(); 
      if(feed_style_selection == 'thumbnails'){
        $('#fbfba_thumbnail_style_options').show();
        $('#fbfba_blog_masonry_style_options').hide();
      $('#fbfba_column_count_settings').hide();
        $('#fbfba_thumbnails_image').css('border','2px inset #858585');
        $('#fbfba_vertical_image').css('border','none');
        $('#fbfba_masonry_image').css('border','none');
        $('#fbfba_blog_image').css('border','none');
      }
      if(feed_style_selection == 'blog_style' ){
        $('#fbfba_thumbnail_style_options').hide();
        $('#fbfba_blog_masonry_style_options').show();
      $('#fbfba_column_count_settings').hide();
        $('#fbfba_blog_image').css('border','2px inset #858585');
         $('#fbfba_vertical_image').css('border','none');
        $('#fbfba_thumbnails_image').css('border','none');
        $('#fbfba_masonry_image').css('border','none');
      }
      if(feed_style_selection == 'vertical' ){
        $('#fbfba_thumbnail_style_options').hide();
        $('#fbfba_blog_masonry_style_options').show();
      $('#fbfba_column_count_settings').hide();
        $('#fbfba_vertical_image').css('border','2px inset #858585');
        $('#fbfba_blog_image').css('border','none');
        $('#fbfba_thumbnails_image').css('border','none');
        $('#fbfba_masonry_image').css('border','none');
      }
      if(feed_style_selection == 'masonry'){
        $('#fbfba_thumbnail_style_options').hide();
        $('#fbfba_blog_masonry_style_options').show();
      $('#fbfba_column_count_settings').show();
       $('#fbfba_vertical_image').css('border','none');
        $('#fbfba_masonry_image').css('border','2px inset #858585');
        $('#fbfba_blog_image').css('border','none');
        $('#fbfba_thumbnails_image').css('border','none');
      }
    });
  });
</script>
<style type="text/css">

  main {
    background: #FFF;
    width: 98%;
    padding: 1%;
    margin-top: 1%;
    box-shadow: 0 3px 5px rgba(0,0,0,0.2);
  }
  main p {
    font-size: 13px;
  }
  main #fbfba-tab1, main #fbfba-tab2, main #fbfba-tab3, main #fbfba-tab4, main section {
    clear: both;
    padding-top: 30px;
    display: none;
  }
  #fbfba-tab1-label, #fbfba-tab2-label,  #fbfba-tab3-label,  #fbfba-tab4-label {
    font-weight: bold;
    font-size: 14px;
    display: block;
    float: left;
    padding: 10px 30px;
    border-top: 2px solid transparent;
    border-right: 1px solid transparent;
    border-left: 1px solid transparent;
    border-bottom: 1px solid #DDD;
  }
  main label:hover {
    cursor: pointer;
    text-decoration: underline;
  }
  #fbfba-tab1:checked ~ #fbfba-content1, #fbfba-tab2:checked ~ #fbfba-content2, #fbfba-tab3:checked ~ #fbfba-content3, #fbfba-tab4:checked ~ #fbfba-content4 {
    display: block;
  }
  main input:checked + #fbfba-tab1-label, main input:checked + #fbfba-tab2-label, main input:checked +  #fbfba-tab3-label, main input:checked +  #fbfba-tab4-label {
    border-top-color: #FFB03D;
    border-right-color: #DDD;
    border-left-color: #DDD;
    border-bottom-color: transparent;
    text-decoration: none;
  }
  #fbfba_show_photos_from_id , #fbfba_show_photos_from_location , #fbfba_show_photos_from_hashtag{
    margin-top: 2px;
  }
  .fbfba_checkbox{
    width: 25px !important;
    height: 25px !important;
    border: 1px solid lightgrey !important;
    border-radius: 5px !important;
    margin-left: 10px !important;
  }
  .fbfba_checkbox:checked:before{
    font-size: 30px !important;
  }
  #fbfba_theme_selection_table tr td{
    vertical-align: top;
    display: inline-block;
  }
</style>
<main>
  <input id="fbfba-tab1" type="radio" name="fbfba-tabs" checked>
  <section id="fbfba-content1">
    <h2 style="font-size: 17px;">Select Feed Style:</h2>
    <table id="fbfba_style_selection_option">
      <tr>
       <td>
          <p style="text-align: center;margin: 0;">
            <input id="fbfba_feed_style_vertical" type="radio" name="fbfba_feed_style" value="vertical" <?php echo ($fbfba_feed_style == 'vertical')? 'checked="checked"':''; ?> /> 
            <label for="fbfba_feed_style_vertical"><strong>Vertical</strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
            <label for="fbfba_feed_style_vertical">
              <img id="fbfba_vertical_image" src="<?php echo plugins_url('images/vertical.png',__FILE__); ?>" />
            </label>
          </p>
        </td>
        <td>
          <p style="text-align: center;margin: 0;">
            <input id="fbfba_feed_style_blog_style" type="radio" name="fbfba_feed_style" value="blog_style" <?php echo ($fbfba_feed_style == 'blog_style')? 'checked="checked"':''; ?> /> 
            <label for="fbfba_feed_style_blog_style"><strong>Blog Style</strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
            <label for="fbfba_feed_style_blog_style">
              <img id="fbfba_blog_image" class="fbfba_style_image" src="<?php echo plugins_url('images/blog_style.png',__FILE__); ?>" />
            </label>
          </p>
        </td>
           <td>
          <p style="text-align: center;margin: 0;">
            <input disabled id="fbfba_feed_style_thumbnails" type="radio" name="fbfba_feed_style" value="" /> 
            <label for="fbfba_feed_style_thumbnails"><strong>Thumbnails</strong> <a href="http://www.arrowplugins.com/wordpress-facebook-feed" target="_blank">Locked</a></label>
          </p>
          <p style="text-align: center;margin: 5px;">
            <label for="fbfba_feed_style_thumbnails">
              <img id="fbfba_thumbnails_image" src="<?php echo plugins_url('images/thumbnails.png',__FILE__); ?>" />
            </label>
          </p>
        </td>
        <td>
          <p style="text-align: center;margin: 0;">
            <input disabled id="fbfba_feed_style_masonry" type="radio" name="fbfba_feed_style" value="" /> 
            <label for="fbfba_feed_style_masonry"><strong>Masonry</strong> <a href="http://www.arrowplugins.com/wordpress-facebook-feed" target="_blank">Locked</a></label>
          </p>
          <p style="text-align: center;margin: 5px;">
            <label for="fbfba_feed_style_masonry">
              <img id="fbfba_masonry_image" class="fbfba_style_image" src="<?php echo plugins_url('images/masonry.png',__FILE__); ?>" />
            </label>
          </p>
        </td>
      </tr>
    </table>


    <table id="fbfba_general_options">
      <tr>
        <td style="vertical-align: top;">
          <h3 style="margin: 6px;">Enter Facebook Page name:</h3>
        </td>
        <td>
          <table id="fbfba_selection_table">
            <tr>
              <td>
                <input checked="checked" type="radio" id="fbfba_show_photos_from_id" name="fbfba_show_photos_from" value='userid'<?php checked( "userid", $fbfba_show_photos_from); ?>  />
                <label for="fbfba_show_photos_from_id"><strong>http://www.facebook.com/</strong></label> 
              </td>
              <td>
                <input type="text" id="fbfba_show_photos_from_id_value" name="fbfba_user_id" placeholder="subway" value="<?php echo $fbfba_user_id; ?>" /> 
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <h3>Number of Feeds to Show: </h3> 
        </td>
        <td>
          <input style="margin-left: 15px;" type="number" min="1" max="100" id="fbfba_number_of_photos" name="fbfba_number_of_photos" value="<?php if($fbfba_number_of_photos == ''){ echo '20' ;}else{ echo $fbfba_number_of_photos; } ?>" /> 
        </td>
      </tr>
      <tr>
        <td>
          <h3>Change Date Posted Language: </h3> 
        </td>
        <td>
        <select name="" id="" value= >
            <option value="en"  >English (Default)</option>
            <option disabled value="ar"  >Arabic (Premium)</option>
            <option disabled value="bn"  >Bangali (Premium)</option>
            <option disabled value="cs"  >Czech (Premium)</option>
            <option  disabled value="da" >Danish (Premium)</option>
            <option disabled value="nl" >Dutch (Premium)</option>
            <option disabled value="fr" >French (Premium)</option>
            <option disabled value="de"  >German (Premium)</option>
            <option disabled value="it" >Italian (Premium)</option>
            <option disabled value="ja"  >Japanese (Premium)</option>
            <option disabled value="ko"  >Korean (Premium)</option>
            <option disabled value="pt" >Portuguese (Premium)</option>
            <option disabled value="ru" >Russian (Premium)</option>
            <option disabled value="es"  >Spanish (Premium)</option>
            <option disabled value="tr" >Turkish (Premium)</option>
            <option disabled value="uk"  >Ukranian (Premium)</option>
        </select>
        </td>
      </tr>
    </table>

    <table id="fbfba_thumbnail_style_options" style="display: none;">
      <tr>
        <td>
          <h3>Thumbnail Size: </h3> 
        </td>
        <td>
          <input style="width: 70px;margin-left: 106px;" type="number"  id="fbfba_thumbnail_size" name="fbfba_thumbnail_size" value="<?php if($fbfba_thumbnail_size == ''){ echo '250' ;}else{ echo $fbfba_thumbnail_size; } ?>" /> px 
        </td>
      </tr>
    </table>

<table id="fbfba_column_count_settings" style="display: none;">
      <tr>
        <td>
          <h3>Number of Columns in a Row: </h3> 
        </td>
        <td>
          <input style="width: 70px;margin-left: ;" type="number"  id="fbfba_column_count" name="fbfba_column_count" value="<?php if($fbfba_column_count == ''){ echo '2' ;}else{ echo $fbfba_column_count; } ?>" /> 
        </td>
      </tr>
    </table>

    <table id="fbfba_blog_masonry_style_options" style="display: none;">
      <tr>
        <td>
          <h3>Limit Post Caption Text: </h3> 
        </td>
        <td>
          <input type="number" min="50" max="600" id="fbfba_limit_post_characters" name="fbfba_limit_post_characters" value="<?php if($fbfba_limit_post_characters == ''){ echo '300' ;}else{ echo $fbfba_limit_post_characters; } ?>" /> Characters <span>Minimum value is 50 & Maximum value is 600</span>
        </td>
      </tr>
      <tr>
        <td>
          <h3>Show Facebook Photos Only: </h3> 
        </td>
        <td>
          <input type="checkbox" class="fbfba_checkbox" name="fbfba_show_photos_only" id="fbfba_show_photos_only"  value='1'<?php checked(1, $fbfba_show_photos_only); ?> /> <span style="font-size: 13px;"><strong>(This will hide Post Caption Text, Profile Picture & Date Posted from your feed card)</strong></span>
        </td>
      </tr>
      <tr>
        <td>
          <h3>Show/Hide Date Posted: </h3> 
        </td>
        <td>
          <input type="checkbox" class="fbfba_checkbox" name="fbfba_date_posted" id="fbfba_date_posted"  value='1'<?php checked(1, $fbfba_date_posted); ?> />
        </td>
      </tr>
      <tr>
        <td>
          <h3>Show/Hide Profile Picture: </h3> 
        </td>
        <td>
          <input type="checkbox" class="fbfba_checkbox" name="fbfba_profile_picture" id="fbfba_profile_picture" value='1'<?php checked('1', $fbfba_profile_picture); ?> />
        </td>
      </tr>
      <tr>
        <td>
          <h3>Show/Hide Post Caption Text: </h3> 
        </td>
        <td>
          <input type="checkbox" class="fbfba_checkbox" name="fbfba_caption_text" id="fbfba_caption_text" value='1'<?php checked('1', $fbfba_caption_text); ?> />
        </td>
      </tr>
    </table>
<br/>

<h2 style="    font-size: 18px; margin: 0;padding: 3px;">Select Feed Template:</h2>
<br/>
    
    <table id="fbfba_theme_selection_table">
      <tr>
        <td>
          <p style="text-align: center;margin: 0;">
            <input type="radio" id="fbfba_theme_selection_default" name="fbfba_theme_selection" value="default" <?php echo ($fbfba_theme_selection == 'default')? 'checked="checked"':''; ?> />
            <label for="fbfba_theme_selection_default"><strong>Default</strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
          <label for="fbfba_theme_selection_default">
            <img style="    box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important; width: 200px;" src="<?php echo plugins_url('images/default.png',__FILE__); ?>">
            </label>
          </p>
        </td>
        <td>
          <p style="text-align: center;margin: 0;">
            <input disabled type="radio" id="fbfba_theme_selection_template0" name="fbfba_theme_selection" value="template0"  />
            <label for="fbfba_theme_selection_template0"><strong>Dark <a href="http://www.arrowplugins.com/wordpress-facebook-feed" target="_blank">Locked</a></strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
          <label for="fbfba_theme_selection_template0">
            <img style="width: 200px;" src="<?php echo plugins_url('images/template0.png',__FILE__); ?>">
            </label>
          </p>
        </td>
        <td>
          <p style="text-align: center;margin: 0;">
            <input disabled type="radio" id="fbfba_theme_selection_template1" name="fbfba_theme_selection" value="" />
            <label for="fbfba_theme_selection_template1"><strong>Pinterest Like Layout <a href="http://www.arrowplugins.com/wordpress-facebook-feed" target="_blank">Locked</a></strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
          <label for="fbfba_theme_selection_template1">
            <img style="width: 200px;" src="<?php echo plugins_url('images/template1.png',__FILE__); ?>">
            </label>
          </p>
        </td>
        <td>
          <p style="text-align: center;margin: 0;">
            <input disabled type="radio" id="fbfba_theme_selection_template2" name="fbfba_theme_selection" value="" />
            <label for="fbfba_theme_selection_template2"><strong>Modern Light <a href="http://www.arrowplugins.com/wordpress-facebook-feed" target="_blank">Locked</a></strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
          <label for="fbfba_theme_selection_template2">
            <img style="    box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important; width: 200px;" src="<?php echo plugins_url('images/template2.png',__FILE__); ?>">
            </label>
          </p>
        </td>
        <td>
          <p style="text-align: center;margin: 0;">
            <input disabled type="radio" id="fbfba_theme_selection_template3" name="fbfba_theme_selection" value="" />
            <label for="fbfba_theme_selection_template3"><strong>Modern Dark <a href="http://www.arrowplugins.com/wordpress-facebook-feed" target="_blank">Locked</a></strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
          <label for="fbfba_theme_selection_template3">
            <img style="    box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important; width: 200px;" src="<?php echo plugins_url('images/template3.png',__FILE__); ?>">
            </label>
          </p>
        </td>
        <td>
          <p style="text-align: center;margin: 0;">
            <input disabled type="radio" id="fbfba_theme_selection_template4" name="fbfba_theme_selection" value="" />
            <label for="fbfba_theme_selection_template4"><strong>Space White <a href="http://www.arrowplugins.com/wordpress-facebook-feed" target="_blank">Locked</a></strong></label>
          </p>
          <p style="text-align: center;margin: 5px;">
          <label for="fbfba_theme_selection_template4">
            <img style="    box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important; width: 200px;" src="<?php echo plugins_url('images/template4.png',__FILE__); ?>">
            </label>
          </p>
        </td>
      </tr>
    </table>
  </section>
  <section id="fbfba-content2">
   
  </section>
  <section id="fbfba-content3">
    <h3>Heading Text</h3>
    <p>Fusce pulvinar porttitor dui, eget ultrices nulla tincidunt vel. Suspendisse faucibus lacinia tellus, et viverra ligula. Suspendisse eget ipsum auctor, congue metus vel, dictum erat. Aenean tristique euismod molestie. Nulla rutrum accumsan nisl, ac semper sapien tincidunt et. Praesent tortor risus, commodo et sagittis nec, aliquam quis augue. Aenean non elit elementum, tempor metus at, aliquam felis.</p>
  </section>
  <section id="fbfba-content4">
    <h3>Here Are Many Words</h3>
    <p>Vivamus convallis lectus lobortis dapibus ultricies. Sed fringilla vitae velit id rutrum. Maecenas metus felis, congue ut ante vitae, porta cursus risus. Nulla facilisi. Praesent vel ligula et erat euismod luctus. Etiam scelerisque placerat dapibus. Vivamus a mauris gravida urna mattis accumsan. Duis sagittis massa vel elit tincidunt, sed molestie lacus dictum. Mauris elementum, neque eu dapibus gravida, eros arcu euismod metus, vitae porttitor nibh elit at orci. Vestibulum laoreet id nulla sit amet mattis.</p>
  </section>
</main>
