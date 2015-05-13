Bolt Picon Selector
===================

"Bolt Picon Selector" is an extension for the [Bolt CMS](http://bolt.cm) that creates a custom field for selecting a [Picons](https://picons.me).  Please note, you need to purchase the picons from [Picons](https://picons.me) before using this plugin.

Usage
-----

* Download the picon css and font files into your theme folder.
* Open the config file for this extension, and add the web path to the css file.  Here is an example:

```
# If you do no add the settings, the field will not show!
picon:
    css_directory: /theme/default/type/picons.css

```

* Add a new field with the type of "picon_selector".  Here is an example:


```
tagline_icon:
            type: picon_selector
            label: 'Tagline Icon'
            prepend_class: 'icon-picons-'
            values: ["abacus", "add", "airplay", "alert", "alert-2", "alert-error"]
```

**type** - Should be set to "picon_selector".

**label** - The label to display about the field.

**prepend_class** - The name of the class that all picons start with.  (You will need to add this to the value in your templates.  We only store the value)

**values** - An array of icons available with the prepend_cllass removed.


Development Notes
-----------------

This repository is following the branching technique described in [this blog post](http://nvie.com/posts/a-successful-git-branching-model/), and the semantic version set out on the [Semantic Versioning Website](http://semver.org/).  We also follow [FIG Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) for writing code.

License
-------
This script is created by Missional Digerati and is under the [GNU General Public License v3](http://www.gnu.org/licenses/gpl-3.0-standalone.html).