# Theme Includes

A way to organize theme files.

## Directory Structure

```text
theme/
└─inc/
  ├─static.php     # wp_enqueue_style() and wp_enqueue_script()
  ├─posts.php      # register_post_type() and register_taxonomy()
  ├─menus.php      # register_nav_menus()
  ├─hooks.php      # add_filter() and add_action()
  ├─helpers.php    # Helper functions and classes
  ├─widgets/       # Theme widgets
  │ ├─{widget-name}/
  │ │ ├─class-widget-{widget-name}.php # class Widget_{Widget_Name} extends WP_Widget { ... }
  │ │ ├─some-file.php
  │ │ └─some-dir/
  │ │   └─...
  │ └─...
  └─includes/      # All .php files are auto included (no need to require_once)
    ├─some-file.php
    └─...
```

## File Descriptions

* `helpers.php`, `hooks.php`, `includes/*.php` are included right away
* `static.php` is included on [`wp_enqueue_scripts`](http://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts) action
* `posts.php` and `menus.php` are included on [`init`](http://codex.wordpress.org/Plugin_API/Action_Reference/init) action
* `widgets/{hello-world}/class-widget-{Hello_World}.php` are included on `widgets_init` action

## Install

1. [Download](https://github.com/ThemeFuse/Theme-Includes/releases/latest) the archive
* Extract it to your theme root directory
* Include the `init.php` file from your theme `functions.php`

	```php
	include_once get_template_directory() .'/inc/init.php';
	```
