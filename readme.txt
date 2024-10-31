=== Plugin Name ===
Contributors: Openvatar
Donate link: 
Tags: Openid,avatar,avatars
Requires at least: 2.0.2
Tested up to: 2.3.3
Stable tag: 0.2

== Description ==
Openvatar is your Openid avatar image (80x80). Your avatar appear beside your name when you participate (comments or other contents)
 on Openvatar enabled sites.
The Openvatar Wordpress plugin enables the openvatar avatars in Wordpress blogs.
First, your users must to get an openvatar account (http://www.openvatar.com), Openid enabled site.


== Installation ==
1. Upload `openvatar.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Usage: Openvatar has the following syntax: `<?php openvatar(); ?>`
4. If you want the size of the image changed as well, supply the pixel dimension as the argument (defaults to 80): `<?php openvatar(40); ?>`
5. If you want to use your own image as a default graphic you'd do this: `<?php openvatar(40, "http://www.mysite.com/avatar.jpg"); ?>`

== Frequently Asked Questions ==

= What is a Openvatar? =

Openvatar is your Openid avatar image (80x80). Your avatar appear beside your name when you participate
 (comments or other contents) on Openvatar enabled sites.

= How do I get a Openid account? =

There are a lot of services to get an Openid Account. Visit public Openid servers(http://wiki.openid.net//OpenIDServers).
The first time you log in Openvatar, it will take your email and nickname from the Openid service. That data is necessary for your Openvatar account.

= How do I get a Openvatar? =

Login with your Openid account, edit your account and upload your avatar picture, it`s all.

= How do I get Openvatar on my site? = 

If you want to enable Openvatar on your site, you don't need any Openvatar account.
You only need to have your site Openid enabled, then install a plugin or setup your site yourself.
To request the Openvatar images, add an image (<img>) in comments area with an "src" attribute that points to our Openvatar
 image generator and MD5 hash of the commenter's Openid URL.