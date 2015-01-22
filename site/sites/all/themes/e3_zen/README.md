# E3 Zen - v1.0
---
This theme is a subtheme of Zen, so be sure to have both e3_zen
and Zen activated.

##Guidelines
---
+ **Performance**
	+ Minimize http requests on page load whenever possible.
+ **Clean, semantic markup**
	+ Optimize all templates and config to output useful and easy to read markup.
+ **Scalability**
	+ All code should be scalable and modular.
+ **Easily Maintainable**
	+ Align with all drupal coding standards and best practices.
+ **Future Friendly**
	+ Enhance progressively. Sites should be usable in IE7 and 8, but not limited to legacy constraints.

##Software Requirements
---
+ **Zen Base Theme** - This is a subtheme that should run on top of the most recent [dev release](http://drupal.org/node/1079736) of [Zen](http://drupal.org/project/zen).
	+ We need to run the dev release in order for the meta tag and responsive script toggles to work, as there is currently a bug in Zen 7.x-5.1's template.php in the zen_preprocess_html function where the value of these items is always set to TRUE in the render array. This is fixed in the dev release of Zen by adding array_filter to line 112 of template.php.
+ **SASS** - See theme [docs](docs/README.md) for required version.
	+ This should always be the latest version
+ **Compass** - See theme [docs](docs/README.md) for required version
	+ This should always be the latest version. [Worried about upgrading?](http://compass-style.org/help/tutorials/upgrading/im-scared/)
+ **Compass Extensions** - Compass extensions should be packaged with every project, in the sass-extensions directory, to ensure compatibility for future development.
	+ See theme [docs](docs/README.md) for required extensions and versions.

##Theme Structure
---
+ **.ruby-gemset** - Allows RVM to create or activate the required gemset for this theme.
+ ** .ruby-version** - Tells RVM which version of Ruby to use. This should never needs to be changed.
+ ** Gemfile** - Lists all gems required by this theme. Run `bundle install` to install all dependencies.
+ **config.rb** - All SASS configuration. Most of this shouldn’t need to be changed, with the exception of adding any extension dependencies.
+ **css** - CSS stylesheets compiled from the theme’s SASS directory. Do not directly edit these files.
+ **docs** - Contains handy snippets to be used during development, as well as a README.md file containing any theme notes applicable to the custom site.
+ **ds_layouts** - All Display Suite custom templates should be kept in the directory.
	+ [Instructions for adding custom layouts](http://drupal.org/node/1098068)
	+ **stacked_2col** - A two column, collapsible layout.
+ **e3_zen.info** - Main theme stylesheets and regions are added here. Also, defaults from theme-settings.php are set and any context layouts should be defined here. Do not add any additional JS or CSSs files here, those should be included in template.php via [drupal_add_js](http://api.drupal.org/api/drupal/includes%21common.inc/function/drupal_add_js/7) or [drupal_add_css](http://api.drupal.org/api/drupal/includes%21common.inc/function/drupal_add_css/7).
+ **js** - Theme javascript.
	+ **boxsizing.htc** - This is the polyfill for the box-sizing: border-box support for older browsers. In order for this to work, you'll need the correct absolute path set for $box-sizing-path in _base.scss and $legacy-support-for-ie6 or $legacy-support-for-ie7 set to true.
	+ **selectivzr-min.js** - Adds support for advanced CSS3 selectors. Be sure to check selectivizr.com for what selectors are supported in jQuery
	+ **utils.js** - Should contain any general js utilities related to the theme layer.
+ **page_layouts** - All page layout files.
	+ **includes** - Includes files used in context layout templates and page.tpl.php.
	+ **sidebar_both.tpl.php** - A sample context layout.
	+ **page.tpl.php** - Standard e3_zen page layout template.
+ **sass**
	+ **wysiwyg.scss** - Styles to be loaded into the wysiwyg and/or made available to site users to style site content through the wysiwyg editor. This file should only contain partial imports.
	+ **style.scss** - Styles to be applied to the user facing site. This file should only contain partial imports.
	+ **base** - Base partials
		+ **_base.scss** - Global variable definitions (fonts, colors, etc.)
		+ **_normalize.scss** -  A tweaked version of Zen’s normalize stylesheet. Should only include styles for base HTML elements.
		+ **_custom.scss** - All custom mixins and functions.
	+ **components** - Partials for sitewide components. The files in this directory are meant to serve as a starting point.
		+ **_header.scss**
		+ **_nav.scss**
		+ **_footer.scss**
		+ **_default.scss** - Styles retained from Zen starterkit.
		+ **_messages.scss** - Custom styles for Drupal messages.
	+ **_layout.scss** - All site layout styles. DS, context, etc.
	+ **_fresh.scss** - Theme styles.
+ **template.php** - All theme preprocess functions.
	+ Be sure to update function names and paths in this file if you change the name of the subtheme directory.
+ **templates** - All tpl files specfic to e3_zen.
	+ **block--nav.tpl.php** - Wrap menus in nav tag
	+ **menu-block-wrapper.tpl.php** - Wrap menu blocks items in ul, replacing core’s wrapper.
	+ **region--sidebar.tpl.php** - Overrides Zen's default sidebar template.
+ **theme-settings.php** - Theme settings added for e3_zen.
	+ Be sure to update function names in here if you change the name of the subtheme directory.
