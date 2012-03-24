=== iframe Wrapper ===
Contributors: RyanNutt
Tags: iframe, wrapper, wrap, frame, embed
Requires at least: 2.6
Tested up to: 3.0
Stable tag: 0.1.1

A small little plugin to embed an auto resizing iframe into a WordPress page or post.

== Description ==
iframes get a bad wrap, and rightly so in many cases. But when you want to embed
one website inside of another one in a single step, they're a really easy way to make it work.

= Usage =
Inside whatever post or page you want to embed another site, use the short code

[iframeWrapper url=http://example.com]

This will put an iframe linking to example.com into your page. The width will
be 100% of the contain it's in and the height will automatically adjust to the
contents of the frame.

This plugin was originally written to embed [ProofBuddy](http://www.proofbuddy.com)
sites within a WordPress theme without much fuss. But it should work well to embed
any site within a WordPress theme. 

== Installation ==
1. Upload the `iframe-wrapper` folder to the `/wp-content/plugins/` directory
1. Active the plugin through the Plugins menu in WordPress
1. Insert the short code into whichever pages and posts where ever you want an iframe embedded

== Frequently Asked Questions ==

None yet.

== Changelog ==

= 0.1 =
Initial Relese

= 0.1.1 =
Moved to a different host, nothing to upgrade if the old one is working for you