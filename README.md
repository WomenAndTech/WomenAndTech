# Women && Tech


1. File Locations

2. Setting up Wordpress Locally

3. Posting!

4. Posting Interviews!

5. Art-Directed / Custom Content

6. Images in Custom Content




## 1\. File Locations

All our files are stored on Github. You're looking at it!

Please send me your username and I'll add you as admin so you can push changes back up.

The files you'll be interested in are located here: /wp/wp-content/themes/roots
/wp is the Wordpress folder
/wp-content is where plugins and themes go
/themes/roots is where our bootstrap theme 'roots' is located

Inside here you'll see all the Wordpress theme files that get everything up and running, but if you're doing art-directed content you'll be interested in the folders `/customer-content`, `/custom-css`, `/custom-js`
This is the place where per post custom content is read from when you're in WP. More about this below

There are 2 ways of working with the site: using your own local install of Wordpress and uploading or using an HTML editing program like Dreamweaver that allows you to edit files online so you don't have to keep uploading them. If you'd like more info on the latter, please let me know!

## 2\. Setting up Wordpress Locally

Because W&&T runs on Wordpress online it's nice to setup your own local Wordpress environment
so you can simulate the way things work online and run your custom content without uploading it.

To setup Wordpress you first need an Apache server to run the php files that power WP and a mySQL server to read from the database. To do this:
- Download MAMP on OSX, but there's also XAMP for Windows.

- Clone the Git repository to the htdocs location of MAMP or XAMP. In MAMP that's in `/Applications/MAMP/htdocs.` I'm not to sure how XAMP handles things so please look it up Windows folks.

- Run MAMP and start the servers (this may happen automatically). A new window should open up in your browser with the URL `http://localhost:8888/MAMP.`

The page that opens MAMP's homepage and will allow you to see settings, etc. Most importantly for us though it allows us to open phpMyAdmin which is the way you can see your local mySQL database.

- Click under MySQL, click phpMyAdmin

- Click the databases tab and create a new one called `'women_and_tech'` You'll see a message saying it has been created and it will appear in the list of databases on the left hand side.

- Click `women_and_tech` in the panel on the left

Next we have to import our development database. This will look different from our production one (the live site), but it's enough to get us up and running to preview content and work on it on our own machines.

- Go to the tab 'import'

- Click Choose file and navigate to `/Applications/MAMP/htdocs/wp/db/`

- choose the file `women_and_tech.sql` and click Go.

When the file has been imported you'll see all the database tables on the left. 

With MAMP running, you can now go to `http://localhost:8888/WomenAndTech/wp` in your browser and see the Wordpress install. 

Note: Somethings may look broken or act strange. That's ok. The purpose of this is to get you working with your own custom content so you shouldn't really worry about other sections of the site.

Login to Wordpress using the admin username and password (it's our usual one or ask someone), and you're set to go!

## 3\. Posting!

When creating a post or interview consider using the following:

### 1. Featured Images
  If you want a custom image to show up in the Archives/Past Interviews section, add a 'featured image' to your post or interview. You do this when creating the post itself. On the righthand side there should a _Featured Image_ section with an option to set a featured image. Upload one or choose it from the media library, change its title and description attributes for SEO/screen reader purposes, and click Set As Featured Image. Then save the details you've just entered.

  __Featured images are `380px x 260px`__

### 2. Publish Dates and Publish States Are Important
  If you want a link to your post/interview or just the featured image of a coming soon post/interview to show up in the Archives/Past Interviews section, you must give it a publish date and 'Publish' it. "Coming Soon" interviews will also show up in the site footer with the 'teaser image' `(see posting interviews below)`
  
  _Posts in the archives are ordered by publish date._

  __If you don't want your post to show up yet, save it as draft__


### 3. Excerpt for Archives
  The Archives/Past Intrviews section shows a list of past and upcoming posts and can optionally display an excerpt or message about that content. To add this to the list, you'll find an _"Archive Excerpt"_ WSYWIG editor in the post/interview.

  __The maximum number of characters for this section is about ~250. Longer excerpts will either break or be hidden from the page__

### 4. Author
  Double check that this select box at the bottom of the post is set to the correct author. It will default to you but you may be adding content for another contributor.

### 5. Categories / Tags
  These currently aren't used for the front or backend. Feel free to add them or not.

## 4\. Posting Interviews!
  
  Posting interviews requires 1 additional asset vs. regular posts, the 'teaser image.' This image shows up in the footer of the site. As mentioned above, a teaser image for a 'coming soon' interview (i.e. published, but with a future date) will show up in the 'Next Up' section of the footer. The Past Interviews footer section will show the closest interview to the post that you're currently viewing.

  __Teaser Images need to be `360px x 188px`__

## 5\. Art-Directed / Custom Content

As mentioned above, you can overwrite an interview, post, or page with your own custom HTML, append a custom stylesheet or javascript file to it. Stylesheets and JS files inherit from what's already on the page (`themes/roots/assets/css/base.css` for the base styles / jQuery and Bootstrap Javascript files that come with the theme)

To work with your own custom content (HTML) or update existing custom content first create or find the Interview/Post/Page that uses it in the Wordpress interface. Here, below the regular WYSIWYG editor you'll see 3 drop downs to select custom files to be used. Those options are listings of the files found in `/custom-content`, `/custom-css`, `/custom-js` in the roots theme folder.

These files must be .php, .css. and .js files. PHP extension files contant HTML, but can also contain PHP if you want something fancy or to use Wordpress' built in functions (see `past-interviews.php`)

So to recap: interviews, posts, and pages can be overwritten with custom HTML stored in .php files located in the `/custom-content` folder.

IMPORTANT: You'll need to put 'something' in the WYSIWYG content are on pages where you're using custom content. This content will show up in RSS feeds and are used in to search posts. For this reason, I recommend that 'something' be the actual HTML or interview document you're working from. When you're done, in the production environment of the post, just paste this into the WYSIWYG editor.

You can append a custom CSS file by added a .css file to the `/custom-css` folder and selecting it from the dropdown that appears in the Edit Post page. 

You can add a Javascript file that gets called at the bottom of the interview, post, or page by adding a .js file to the `/custom-js` folder.

Note: Any files you change/add on your local Wordpress need to be pushed back up to the Git Repo. These files will not be on the live web but will allow the webmaster to put the most current content online. When you're done with your custom content, email the webmaster or FTP it yourself.

On the live Wordpress site `(http://womenandtech.com/wp/login)` you'll need to hook up the custom content, css, or js you just created/edited with actual interviews, posts, and pages that exist online. Do this in the same way you did in your local environment.

## 6\. Images in Custom Content

If you're using images in your art direct content (.php files in `/custom-content`), add a folder to /assets/img/ to store all your images and reference them like:

```html
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/YOUR_FOLDER/youfile.png">
```
You can see an example of this in `/custom-content/the-plan.php`

If you're using background images in your css, you can reference them like this:
```css
#bg-img{
	background: url(../img/YOUR_FOLDER/yourfile.png)
}
```

