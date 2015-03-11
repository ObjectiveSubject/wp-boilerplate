#ObSub Boilerplate
===

The Objective Subject Boilerplate. Adapted from the "\_s" theme: http://underscores.me

##Getting Started
===

If you want to change the theme's namespace, you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'obsub'` (inside single quotations) to capture the text domain.
2. Search for `obsub_` to capture all the function names.
3. Search for `Text Domain: obsub` in style.css.
4. Search for <code>&nbsp;obsub</code> (with a space before it) to capture DocBlocks.
5. Search for `obsub-` to capture prefixed handles.

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

###Defining Admin styles
===
Support for custom admin styles is provided in functions.php under "Custom Admin Styles" and "Custom Admin Color Scheme". Comment out or delete this code to disable support custom styles in the admin area.

Custom admin *colors* are defined within `admin/color-scheme/admin-colors.scss`. All color related overrides get compiled in this file. By editing the `_variables.scss` file, it's easy to create new color palettes.

All other custom styles should be defined within `admin/admin-style.scss`.
