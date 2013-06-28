# ACF { YouTube Video Field

Adds a 'YouTube Video' field type for the [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/) WordPress plugin.

### Compatibility

This add-on will work with version 4 and up.

### Requirements

This add-on is only supported on PHP 5.3 and up.

### Installation

This add-on can be treated as both a WP plugin and a theme include.

**Install as Plugin**

1. Copy the 'acf-youtube-video' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

**Include within theme**

1.	Copy the 'acf-youtube-video' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
2.	Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-youtube-video.php file)

```php
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
	include_once('acf-youtube-video/acf-youtube-video.php');
}
```

### Running Tests

To run the test suite, [install](http://phpunit.de/manual/current/en/installation.html) PHPUnit first.

Then, make sure you are in the add-on root directory and get [Composer](http://getcomposer.org/):

    $ curl -s http://getcomposer.org/installer | php

Install dependencies:

    $ php composer.phar install

Finally, run the test suite from the add-on root directory with the following command:

    $ phpunit

