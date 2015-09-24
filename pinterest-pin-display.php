<?php
/**
 * @package pinterest-pin-display
*/
/*
Plugin Name: Pinterest Pin Display
Plugin URI: http://www.screenwave.net
Description: Pinterest Pin Display is a Shortcode Plugin for Wordpress. Pinterest Pin Display helps you to display Pinterest Profile or Board on your wordpress website.
Version: 0.0.1
Author: Michael Wilkinson
Author URI: http://www.screenwave.net
*/

add_shortcode('pinterest-pin', 'pinterest_pin_display');

function pinterest_pin_display($atts){
    $atts = shortcode_atts(array(
 		'display' => 'Profile',
 		'pin_account' => 'britneyspears',
                'display_title' => 'yes',
 		'display_description' => 'yes',
                'img_show' => '20',
 		'img_width' => '60',
                'img_height' => '60',
 		'img_distance' => '3',
                'box_width' => '280',
 		'box_height' => '350',
                'border_color' => '#000000',
                'border_size' => '3',
 		'border_radius' => '5',
                'bg_color' => '#DEDEDE',
 		'follow' => 'yes'
 	), $atts);
    extract($atts);
         /*
         * Starting Action
         */
        
        // Profile or Board
        if($display == 'Board'){
	$xml_url = "http://pinterest.com/$pin_account/rss";
	}
        else{
	$xml_url = "http://pinterest.com/$pin_account/feed.rss";
	}
        
        $xml = simplexml_load_file($xml_url);
        
	$image_show  = $img_show+1;
        
        ?>
<!-- Internal Stylesheets of the Plugin -->  
<style>
  .pin{ width:<?php echo $box_width;?>px; height:<?php echo $box_height;?>px; border:<?php echo $border_size;?>px solid <?php echo $border_color;?>; margin:0 auto; border-radius:<?php echo $border_radius;?>px; background:<?php echo $bg_color;?>; padding:5px}
  .pin img{ height:<?php echo $img_height;?>px; width:<?php echo $img_width;?>px; float:left; border:1px solid #333; margin:<?php echo $img_distance;?>px; padding:1px }
  .pin p {margin: 0;}
  .pin img:hover{ -ms-transform: scale(3,3); /* IE 9 */
    -webkit-transform: scale(3,3); /* Chrome, Safari, Opera */
    transform: scale(3,3); z-index:1000 !important}
	.follow {padding-bottom: 10px;}	 
	.title h4 { margin: 0; text-align: center;}
   .title p { margin: 0; padding-bottom: 10px;}
</style>
<div class="pinterest_pin_display_widget">
<?php
    $pin = $xml->channel;
    $tiles = "";
    $descriptions = "";
    ?>
    <div class="title">
        <h1> <?php if ($display_title=='yes') {?><a href=<?php echo "$pin->link";?> target="_blank"><?php echo $pin->title;?></a>
    <?php } else { echo $tiles; } ?></h1>
             <?php if ($display_description=='yes') {?> <p> <?php  echo $pin->description;?></p><?php } else { echo $descriptions; }?>
         </div>
	<!-- follow button start here -->
	<div class="follow">	
         <?php  $follows='';?>
         
         <?php if($follow == 'yes'){?> 
            <a data-pin-do="buttonFollow" href="http://www.pinterest.com/<?php echo $account;?>/">Pinterest</a>
            <!-- Please call pinit.js only once per page -->
            <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
         <?php } else{ echo $follows; } ?>
    </div>
	<!-- follow button end here -->
   <div class="pin">
	
       <?php 
	$l = $image_show;
        $c = 0 ;
        foreach($xml->channel->item as $pinterest){
                   $c++;
	if($c == $l)
                    break;
                 $pin_desc = $pinterest->description ;
                 $link     = $pinterest->link ;
                 $doc = new DOMDocument();
                 $doc->loadHTML($pin_desc);
                 $imageTags = $doc->getElementsByTagName('img');
                 $pin_print = "";
             
        foreach($imageTags as $tag)    {
               echo "<a href='" . $link . "' target='_blank'>" . "<img src='" . $tag->getAttribute('src') . "'/></a>";
             }
          } /*<!--end first foreach bracket-->*/
?>
   </div>
</div>
<div style="font-size: 9px; color: #808080; font-weight: normal; font-family: tahoma,verdana,arial,sans-serif; line-height: 1.28; direction: ltr; position: relative; top: -13px"><a href="http://procurbappealconcrete.com/our-services/concrete-patios/" target="_blank" style="color: #808080;" title="Visit the website">Concrete Patio Bellevue</a></div>

<?php
    return;
}