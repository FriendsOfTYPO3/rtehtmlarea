# TYPO3 Extension "rtehtmlarea" - A Rich Text Editor based on HTMLarea

## The short story
Back in the early days, TYPO3 did not have an RTE, then there was one that was
only supported by IE5, and no Netscape. And then there was HTMLArea. The TYPO3
Core Development put this extension in place in 2006. Stanislas Rolland then
maintained this extension for quite some time, added HTML5 functionality, and
migrated everything UI-wise to ExtJS. Andreas Fernandez migrated away from
ExtJS to RequireJS modules and jQuery to stay compatible with the TYPO3 Core.

This extension was part of TYPO3 Core until 2017, where it was superseeded
by CKeditor (extension "rte_ckeditor"), which is the new default.

However, the TYPO3-based CKEditor implementation does not provide all the
functionality out-of-the-box - and especially not in the same way.

### Inline Images & Magic Images
Integration of Magic Images within text is built-in and tightly couple
to TYPO3's APIs, and works just fine with HtmlArea.

### Accessibility
Various accessibility features can be configured via PageTSconfig to activate
special links etc..

### Custom plugins
There are various plugins that are solely implemented by HtmlArea, and have
been there for years, if you've used these plugins, there is no equivalent.

### Configuration
Specific selection of anchorClasses, classes to select from, and custom
dropdowns can all be configured via PageTSconfig - see the Extensions'
documentation on that.

### RTE Plugin API
Although CKEditor has a plugin system as well, the one built by HTMLarea integrates
tightly in TYPO3's PHP world. Migrating the same functionality in any other
RTE can be tough.

## Installation
The latest version can be installed via TER (http://typo3.org) or via composer
by adding ''composer require friendsoftypo3/rtehtmlarea'' in a TYPO3 v8 installation.

## Current state
The latest version here reflects a feature-complete state. There are bugs, we know,
there are possible feature requests - we know. But it's highly likely that this
extensions gets no new features, unless somebody steps up and continues the development
(see further below).

## Contribution
Feel free to submit any pull request, or add documentation, tests, as you please.
We will publish a new version every once in a while, depending on the amount of changes
and pull requests submitted.

If you want to keep adding features, and keep HtmlArea compatible with the latest
browser versions, and TYPO3 versions, feel free to contact Markus Klein (markus.klein@typo3.org).

### License
The extension is published under GPL v2+, all included third-party libraries are
published under their respective licenses.

### Authors
A lot of contributors have been working on this area while this functionality was part of
the TYPO3 Core. This package is now maintained by a loose group of TYPO3 enthusiasts inside
the TYPO3 Community.
