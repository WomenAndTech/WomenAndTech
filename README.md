WomenAndTech
============


1. File Locations

2. Setting up Wordpress Locally

3. Art-Directed / Custom Content

4. Images in Custom Content

5. Posting Interviews

6. Posting other content



1. File Locations

All our files are stored on Github: CHECK THIS
Please send me your username and I'll add you as admin so you can push changes back up.

The files you'll be interested in are located here: /wp/wp-content/themes/roots
/wp is the Wordpress folder
/wp-content is where plugins and themes go
/themes/roots is where our bootstrap theme 'roots' is located

Inside here you'll see all the Wordpress theme files that get everything up and running, but if you're doing art-directed content you'll be interested in the folders /customer-content, /custom-css, /custom-js
This is the place where per post custom content is read from when you're in WP. More about this below

There are 2 ways of working with the site: using your own local install of Wordpress and uploading or using an HTML editing program like Dreamweaver that allows you to edit files online so you don't have to keep uploading them. If you'd like more info on the latter, please let me know!

2. Setting up Wordpress Locally

Because W&&T runs on Wordpress online it's nice to setup your own local Wordpress environment
so you can simulate the way things work online and run your custom content without uploading it.

To setup Wordpress you first need an Apache server to run the php files that power WP and a mySQL server to read from the database. To do this:
- Download MAMP on OSX, but there's also XAMP for Windows.

- Clone the Git repository to the htdocs location of MAMP or XAMP. In MAMP that's in /Applications/MAMP/htdocs. I'm not to sure how XAMP handles things so please look it up Windows folks.

- Run MAMP and start the servers (this may happen automatically). A new window should open up in your browser with the URL http://localhost:8888/MAMP.

The page that opens MAMP's homepage and will allow you to see settings, etc. Most importantly for us though it allows us to open phpMyAdmin which is the way you can see your local mySQL database.

- Click under MySQL, click phpMyAdmin

- Click the databases tab and create a new one called 'women_and_tech' You'll see a message saying it has been created and it will appear in the list of databases on the left hand side.

- Click women_and_tech in the panel on the left

Next we have to import our development database. This will look different from our production one (the live site), but it's enough to get us up and running to preview content and work on it on our own machines.

- Go to the tab 'import'

- Click Choose file and navigate to /Applications/MAMP/htdocs/wp/db/

- choose the file women_and_tech.sql and click Go.

When the file has been imported you'll see all the database tables on the left. 

With MAMP running, you can now go to http://localhost:8888/WomenAndTech/wp in your browser and see the Wordpress install. 

Note: Somethings may look broken or act strange. That's ok. The purpose of this is to get you working with your own custom content so you shouldn't really worry about other sections of the site.

Login to Wordpress using the admin username and password (it's our usual one or ask Brett), and you're set to go!

3. Art-Directed / Custom Content

As mentioned above, you can overwrite an interview, post, or page with your own custom HTML, append a custom stylesheet or javascript file to it. Stylesheets and JS files inherit from what's already on the page (base.css for the base styles / jQuery and Bootstrap Javascript files that come with the theme)

To work with your own custom content (HTML) or update existing custom content first create or find the Interview/Post/Page that uses it in the Wordpress interface. Here, below the regular WYSIWYG editor you'll see 3 drop downs to select custom files to be used. Those options are listings of the files found in /custom-content, /custom-css, /custom-js in the roots theme folder.

These files must be .php, .css. and .js files. PHP extension files contant HTML, but can also contain PHP if you want something fancy or to use Wordpress' built in functions (see past-interviews.php)

So to recap: interviews, posts, and pages can be overwritten with custom HTML stored in .php files located in the /custom-content folder.

IMPORTANT: You'll need to put 'something' in the WYSIWYG content are on pages where you're using custom content. This content will show up in RSS feeds and are used in to search posts. For this reason, I recommend that 'something' be the actual HTML or interview document you're working from. When you're done, in the production environment of the post, just paste this into the WYSIWYG editor.

You can append a custom CSS file by added a .css file to the /custom-css folder and selecting it from the dropdown that appears in the Edit Post page. 

You can add a Javascript file that gets called at the bottom of the interview, post, or page by adding a .js file to the /custom-js folder.

Note: Any files you change/add on your local Wordpress need to be pushed back up to the Git Repo. These files will not be on the live web but will allow the webmaster to put the most current content online. When you're done with your custom content, email the webmaster or FTP it yourself.

On the live Wordpress site (http://womenandtech.com/wp/login) you'll need to hook up the custom content, css, or js you just created/edited with actual interviews, posts, and pages that exist online. Do this in the same way you did in your local environment.

4. Images in Custom Content

If you're using images in your art direct content (.php files in /custom-content), add a folder to /assets/img/ to store all your images and reference them like `<img src="<?php echo get_template_directory_uri(); ?>/assets/img/YOUR_FOLDER/youfile.png">`. You can see an example of this in /custom-content/the-plan.php

If you're using background images in your css, you can reference them like this:

#bg-img{
	background: url(../img/YOUR_FOLDER/yourfile.png)
}