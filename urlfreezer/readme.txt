=== URL Freezer ===
Contributors: urlfreezer, linker_blog
Tags: url check, seo, report, site health
Requires at least: 5.0
Tested up to: 5.8
Stable tag: 1.0.0
License: GPLv2 or later

Website broken links are past!

== Description ==

URL Freezer checks your website's URLs, notifies you if a link has gone offline (404) and
redirect your link to a snapshot of the original link content.

URL Freezer features include:

* Check your website links.
* Take a snapshot.
* Notify you for offline link.
* Automatically activate snapshot.

This plugin integrates with the external service at https://urlfreezer.com, 
once activated you need to configure your URL Freezer's User ID that you
can find in the installation page https://urlfreezer.com/app/script.html.

This plugin will install the URL Freezer script in all your pages, every time a user will
load one of the page of your site, the URL Freezer script will collect all the outgoing links in the 
page, and send them to http://urlfreezer.com to check if the links are still online,
if any of the links is offline URL Freezer will provide a link to a snapshot of the original
link and the script will automatically replace the link in the page with the link to 
the snapshot.

In the specific each time a page is load the script will send to URL Freezer

 * The URL Freezer User ID
 * The url of the page loaded
 * The outgoing links found in the current page

For outgoing links is meant all the links that go to a different domain than the one of the page that has the links
 

== Installation ==

Upload the URL Freezer plugin to your blog, activate it.

Get the URL Freezer's User Id from https://urlfreezer.com/app/script.html using your account.

Configure your URL Freezer's User ID and enable it.

You're ready to go!

== Changelog ==

= 1.0.0 =
*Release Date - 24 November 2021*

* Plugin publication
