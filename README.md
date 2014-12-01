# Theme Includes

Include theme files on right actions.

* `helpers.php`, `hooks.php`, `includes/*.php` are included right away
* `static.php` is included on `wp_enqueue_scripts` action
* `posts.php` and `menus.php` are included on `init` action
* `widgets/{hello-world}/class-widget-{Hello_World}.php` are included on `widgets_init` action

## Install

1. [Download](https://github.com/ThemeFuse/Theme-Includes/releases/latest) the archive
* Extract it to your theme root directory
* Include the `init.php` file from your theme `functions.php`

	```php
	include_once get_template_directory() .'/inc/init.php';
	```
