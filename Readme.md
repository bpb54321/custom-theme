# Build A Custom WordPress Theme

## Useful Links
* WordPress Theme Developer Handbook : https://developer.wordpress.org/themes/
* WordPress Code Reference: https://developer.wordpress.org/reference/
* Google Fonts: https://fonts.google.com/

## Why build a custom theme?
* Build a theme because it let's you explore more than what is possible with themes that other people have made.
* Getting practice with web development skills
* You have a nice product that you can show to other people!

## Background
* Lynda.com: Web Development Foundations: Web Technologies: The importance of PHP https://www.lynda.com/Web-Foundations-tutorials/importance-PHP/158666/158696-4.html
* Code.org: How the Internet Works https://www.youtube.com/watch?v=Dxcc6ycZ73M&list=PLzdnOPI1iJNfMRZm5DDxco3UdsFegvuB7


## Setup
* Install a new website on your Domains account / Setup a new Domains account.
* Go to the WP-Admin area. 
* Download the theme starter folder: http://bit.ly/2FdnZJs
* Upload the theme and activate it. Verify that you can see Hello World.
* Edit the name and the description of your theme in the code editor.

## Challenge 1
* Separate out the code into header, index, and footer.
* Use the functions `get_header()` and `get_footer()`.
* Add `wp_head();` to header.php: this injects WP's built-in CSS style sheets.
* Add `wp_footer();` in footer.php: this injects WP's built-in Javascript scripts.
* Print out the site title using `echo get_bloginfo('name')`.
* Create a Home page, add a title and content.
* Print out the title and the content on your page using: the WordPress functions (template tags) found on this page: https://developer.wordpress.org/themes/basics/the-loop/#what-the-loop-can-display

## Challenge 2
* Enable feature images using instructions on this page: https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
* Upload a feature image to the home page: https://easywpguide.com/wordpress-manual/adding-images-other-media/setting-a-featured-image/
* Print out feature image in index.php.

## Challenge 3
* Add two menu locations to the theme: https://developer.wordpress.org/themes/functionality/navigation-menus/
* Create a menu with a a link to the homepage and an additional page, and assign it to one of the menu locations.
* Print out that menu in header.php. 

## Challenge 4
* Enqueue our custom style sheet: https://developer.wordpress.org/themes/basics/including-css-javascript/
* Make the title text be white and be centered over the image.
* Make the image stretch the width of the window.

## Challenge 5
* Add a custom font from Google Fonts.


