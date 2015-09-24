=== Pinterest Pin Display ===
Contributors: screenwave
Tags: pinterest, pinterest display shortcode, pinterest display, wordpress plugin, pinterest shortcode
Requires at least: 3.0.1
Tested up to: 4.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Pinterest Pin Display is a Shortcode Plugin for Wordpress. Pinterest Pin Display helps you to display Pinterest Profile or Board on your wordpress website.

== Description ==

Pinterest is a very popular website.

A few specific feature which made our widget unique than other available wordpress pinterest widgets :

*   Fully Customizable. You can take control over everything as this module is not just display stuffs from Pinterest Website.
*   Pinterest API for XML Feed Implemented.
*   Show Latest Pins from Pinterest Profile or Board Display.
*   Tested on all latest wordpress versions. Also we've tested it on older versions to make sure everything work smoothly for you.
*   Stable Version Released.

== Installation ==

This section describes how to install the plugin (Widget) and get it working.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

How to Display the Plugin Shortcode in Wordpress Website:

Shortcode:

[pinterest-pin]

You can put that on your wordpress post or page. It will display intially a Pinterest Profile with all default values setup on the plugin.

To Put your own Pinterest Profile you have to setup few attributes. They are describing below --

Pinterest Profile Display Shortcode:

[pinterest-pin display='Profile' pin_account='YOUR_PINTEREST_PROFILE_WILL_BE_HERE']

If your Pinterest Profile URL is : http://www.pinterest.com/britneyspears

Then This Field value will be : britneyspears

example: [pinterest-pin display='Profile' pin_account='britneyspears']

Pinterest Board Display Shortcode:

[pinterest-pin display='Board' pin_account='YOUR_PINTEREST_BOARD_WILL_BE_HERE']

For Board: If you Board URL is : http://www.pinterest.com/pinterest/pin-pets

Then this field value will be : pinterest/pin-pets

example: [pinterest-pin display='Board' pin_account='pinterest/pin-pets']

Their are other attributes available to make your life easy - They are described below:



* Display Title: YES to Display - NO to Hide

display_title='yes' OR title='no'

* Display Description: YES to Display - NO to Hide

display_description='yes' OR title='no'

* Number of Image: No. of image you like to display in your module.

img_show='NUMERIC_NUMBER_LIMIT' - example: img_show='20'

* Image Width: Width of your pin image in px.

img_width='60'

* Image Height: Height of your pin image in px.

img_heigh='60'

* Image Spacing: Spacing between images in px.

img_distance='3'

* Box Width: Box Width of your image in px.

box_width='280'

* Box Height: Box Height of your image in px.

box_height='350'

* Border Color: Border Color - Can be pick from the color picker.

border_color='#000000'

* Border Width: Border Size in px.

border_size='3'

Border Radius: Border Radius Size.

border_radius='5'

* Box Background Color: Box Background color can pick using the color picker from Joomla Module manager Backend.

bg_color='#DEDEDE'

Show Follow Button: YES to Display - NO to Hide.

follow='yes' OR follow='no'

== Frequently Asked Questions ==

= Can I display both Pinterest Profile and Pinterest Board in same page using this widget? =

Yes you can. Make sure the CSS overrides.

== Screenshots ==

1. Display of our Plugin

== Changelog ==

= 1.0 =
* Stable version released