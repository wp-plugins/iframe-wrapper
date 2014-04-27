=== iframe Wrapper ===
Contributors: Aelora
Tags: iframe, wrapper, wrap, frame, embed
Requires at least: 2.6
Tested up to: 3.0
Stable tag: 0.1.1

A small little plugin to embed an auto resizing iframe into a WordPress page or post.

== Description ==

**This plugin has been abandoned. Because of browser security issues, it never really 
worked all that well anyway. **

iframes get a bad wrap, and rightly so in many cases. But when you want to embed
one website inside of another one in a single step, they're a really easy way to make it work.

= Usage =
Inside whatever post or page you want to embed another site, use the short code

[iframeWrapper url=http://example.com]

This will put an iframe linking to example.com into your page. The width will
be 100% of the contain it's in and the height will automatically adjust to the
contents of the frame.

== Installation ==
1. Upload the `iframe-wrapper` folder to the `/wp-content/plugins/` directory
1. Active the plugin through the Plugins menu in WordPress
1. Insert the short code into whichever pages and posts where ever you want an iframe embedded

== Frequently Asked Questions ==

= Why abandoned? =

Because of issues with browser security, this plugin really only ever worked well when the embedded page was on the same domain as the WordPress site. That worked okay for why the plugin was written originally, but not for most of the users that downloaded it.

== Changelog ==

= 0.1 =
Initial Relese

= 0.1.1 =
Moved to a different host, nothing to upgrade if the old one is working for you