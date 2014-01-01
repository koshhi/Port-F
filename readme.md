# Port F
## A Wordpress Starter Theme 

**Port F** is a starter theme for Wordpress theme development with lots of features and almost no default design. It's meant as starting point for the development of fully customized wordpress themes. 

**Port F** uses **grunt** to preprocess LESS, minify and combine javascript and optimize images. 
Use `grunt watch` to process LESS and JS on the fly. `grunt build` additionally optimizes all images.

## Features

### CSS

+ [LESS](http://lesscss.org/)
+ uses [LESSHAT](http://lesshat.com/) for auto-prefixing 
+ including [normalize.css](http://necolas.github.io/normalize.css/)
+ main breakpoint (768px) for RWD, syncd between CSS and JS 
+ lots of tiny typography fixes

### Javascript 

+ [media query dependant asset loader](http://modernizr.com/docs/#mq), automatically synced with major breakpoint set in LESS.
+ global debug switch
+ object oriented JS-boilerplates 
+ [modernizr](http://modernizr.com/) boilerplate

### functions.php

+ Smart include system to resuse template snippets depending on post types
+ `<head>` cleaned from WP-bloat 
+ Custom Post Type and Custom Taxonomy defaults 
+ Primary header navigation
+ Secondary footer navigation 
+ Footer widget area 
+ Custom image size default 
+ Custom JPEG compression quality 
+ Options to hide admin menu entries
+ Options to hide admin dashboard widgets 
+ tinyMCE button/feature configuration 
+ Custom excerpt length 
+ `the_super_title()` shortcode, consisting of Custom Post Type name and title 
+ rewrite search url to èxample.com/search/query` 

