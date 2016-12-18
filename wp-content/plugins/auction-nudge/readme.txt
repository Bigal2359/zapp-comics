=== eBay Seller Tools by Auction Nudge ===
Contributors: morehawes
Tags: Auction Nudge, auctionnudge.com, eBay, plugin, widget, widgets, embed, display, sidebar, integrate, integration, listings, item, items, pagination, profile, feedback, free, products, ad, ads, adverts, banner, banners, shop, store, advertise, advertising, on your own site, automatic, automatically, update, category, keywords, seller, user, username, links, images, pictures, international, US, UK, Canada, Australia, Belgium, Germany, France, Spain, Austria, Italy, Netherlands, Ireland, Switzerland, ebay.com, ebay.co.uk, ebay.ca, ebay.com.au, ebay.be, ebay.de, ebay.fr, ebay.at, ebay.it, ebay.nl, ebay.ie, ebay.pl, ebay.es, ebay.ch
Requires at least: 2.8
Tested up to: 4.7
Stable tag: 4.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display your live eBay listings, profile and feedback information on your site in just a few clicks.

== Description ==

This plugin enables you to display your live eBay information on your WordPress site using <a href="https://www.auctionnudge.com/">Auction Nudge</a>. Once installed, all tools will update automatically to display your most recent eBay information.

= Plugin introduction =

[vimeo https://vimeo.com/186452560]

The following tools are available to integrate eBay into your own website:

* **Your eBay Listings** - displays your active items, with lots of options and filters to choose from. Show up to 100 items per page, and navigate multiple pages
* **Your eBay Profile** - displays your eBay profile information like feedback rating and date of registration as a badge
* **Your eBay Feedback** - displays your most recent feedback comments

This plugin allows you to add Auction Nudge within your posts and pages using shortcodes, as widgets or directly from within your theme.

**Most common issues are solved by reading the <a target="_blank" href="https://www.auctionnudge.com/help">Help</a> page. Bugs and errors can be reported <a target="_blank" href="https://www.auctionnudge.com/contact">here</a>. Please do this before leaving a poor review.**

Available for the following international eBay sites:

* eBay US
* eBay UK
* eBay Canada
* eBay Australia
* eBay Belgium
* eBay Germany
* eBay France
* eBay Spain
* eBay Austria
* eBay Italy
* eBay Netherlands
* eBay Ireland
* eBay Switzerland

The following shows just some of the options available for the Your eBay Listings tool:

= Feed options =

* **eBay username** - the eBay account name you want to display items for
* **eBay site** - which international eBay site your items are listed on

= Display options =

* **Theme** - there are a number of themes and options to choose from, including a responsive design theme
* **Number of items to show** - how many items you wish to show per page
* **Show multiple pages?** - multiple pages can show all of your items for sale
* **Open links in new tab?** - decide if your visitors should be taken to eBay in a new tab or the current one
* **Image size** - large item images can be displayed (up to 500px by 500px)

= Advanced options =

* **Sort order** - choose in which order your items are displayed (items ending first, newly-listed first, price + shipping: lowest first, price + shipping: highest first or best match)
* **Filter by keyword** - specify to only show items which match a certain keyword/keywords
* **Filter by category ID** - specify to only show items listed in a certain category/categories

*Auction Nudge is not owned or operated by eBay Inc. eBay and the eBay logo are trademarks of eBay Inc. As a member of the eBay Partner Network we may receive anonymous referral commissions from eBay if a successful transaction occurs after clicking an Auction Nudge link to eBay, at no cost to the user.*

== Installation ==

**Most common issues are solved by reading the <a target="_blank" href="https://www.auctionnudge.com/help">Help</a> page. Bugs and errors can be reported <a target="_blank" href="https://www.auctionnudge.com/contact">here</a>. Please do this before leaving a poor review.**

= Installation video =

[vimeo https://vimeo.com/120632674]

Once you have installed and activated the plugin you are able to add your eBay information in a number of ways:

= Within your pages/ posts =

1. On the edit page/post admin pages specify the desired options in the Auction Nudge box which appears 
2. You can then specify where the content is output using the Auction Nudge `[auction-nudge]` shortcode.
3. Update or publish the page and Auction Nudge will now display on your site!

Shortcodes (to be added to a page/post through the content editor) :

`<!-- To display Your eBay Listings -->
[auction-nudge tool="listings"]

<!-- To display Your eBay Profile -->
[auction-nudge tool="profile"]

<!-- To display Your eBay Feedback -->
[auction-nudge tool="feedback"]`

= As widgets =

Once the plugin is activated, Auction Nudge widgets for each tool will appear on the *Appearance > Widgets* page. Here you can create widgets with the full range of options and add them to widgetized areas specified in your theme.

= From within your theme =

As well as adding Auction Nudge content to your pages/posts using the `[auction-nudge]` shortcode you can also call the plugin directly from your theme files.

To use this feature, generate your code snippets from the <a target="_blank" href="https://www.auctionnudge.com">Auction Nudge website</a> and paste them in to the appropriate boxes in the <em>Settings &gt; Auction Nudge &gt; Within Your Theme</em> page. You can then use the following functions to add Auction Nudge within your theme files:

`/* To display Your eBay Listings */
<?php an_items(); ?>

/* To display Your eBay Profile */
<?php an_profile(); ?>

/* To display Your eBay Feedback */
<?php an_feedback(); ?>`

= Nothing displaying? =

A common reason for Auction Nudge not loading is the use of ad blocking browser plugins (like Adblock Plus). If you are using such a plugin, disable it, or add an exception to see if Auction Nudge loads without it.

== Frequently Asked Questions ==

**Most common issues are solved by reading the <a target="_blank" href="https://www.auctionnudge.com/help">Help</a> page. Bugs and errors can be reported <a target="_blank" href="https://www.auctionnudge.com/contact">here</a>. Please do this before leaving a poor review.**

You can also <a href="https://wordpress.org/plugins/auction-nudge/installation/">watch the plugin tutorial</a> to ensure you have the plugin set up correctly.

= Auction Nudge isn't loading, what's wrong? =

A common reason for Auction Nudge not loading is the use of ad blocking browser plugins (like Adblock Plus). If you are using such a plugin, disable it, or add an exception to see if Auction Nudge loads without it.

Another reason for Auction Nudge failing to load on your page is Javascript errors from other scripts. You can check for these in your browser's error console.

= How do I add Auction Nudge to my pages / posts? =

Once the plugin has been enabled, an Auction Nudge box will appear on your edit page/post admin pages underneath the content editor. This box enables you to specify the desired options for the Your eBay Listings, Your eBay Profile and Your eBay Feedback tools.

Once you have set the desired options, you can add the Auction Nudge `[auction-nudge]` shortcode to your page/post to specify where the content is displayed.

Each Auction Nudge tool has it's own shortcode format:

`<!-- To display Your eBay Listings -->
[auction-nudge tool="listings"]

<!-- To display Your eBay Profile -->
[auction-nudge tool="profile"]

<!-- To display Your eBay Feedback -->
[auction-nudge tool="feedback"]`

= How do I use the plugin from within theme files? =

As well as adding Auction Nudge content to your pages/posts using the `[auction-nudge]` shortcode you can also call the plugin directly from your theme files.

To use this feature, generate your code snippets from the <a target="_blank" href="https://www.auctionnudge.com">Auction Nudge website</a> and paste them in to the appropriate boxes in the <em>Settings &gt; Auction Nudge &gt; Within Your Theme</em> page. You can then use the following functions to add Auction Nudge within your theme files:

`/* To display Your eBay Listings */
<?php an_items(); ?>

/* To display Your eBay Profile */
<?php an_profile(); ?>

/* To display Your eBay Feedback */
<?php an_feedback(); ?>`

= How can I modify the appearance of Auction Nudge? =

As well as choosing from different themes when you generate your Auction Nudge code you can also change the appearance using simple CSS rules. Auction Nudge will automatically use the default CSS rules for your web page, for example the default font and link colours so it integrates nicely with your page.

You can change the CSS rules for Auction Nudge by adding them to the Auction Nudge CSS Rules section of the plugin options page. See the Auction Nudge <a href="https://www.auctionnudge.com/customize">Customize page</a> for more information and examples.

As a quick example, to make all of the product titles bold you would add this rule to your style sheet :

`div#auction-nudge-items td.title {
  font-weight: bold;
}`

To change the alternating background colours when displaying rows of items you would add this rule to your style sheet :

`div#auction-nudge-items table.columns tr {
  background-color: red;  /* Change to desired colour */
}
div#auction-nudge-items table.columns tr.alt {
  background-color: blue;  /* Change to desired colour */
}`

All themes can be adjusted in this way.

= How often does Auction Nudge update? =

To reduce server load, Auction Nudge does not update every time it is loaded on your site. The tools update as follows:

* Your eBay Listings – updates every 15 minutes
* Your eBay Profile – updates every 12 hours
* Your eBay Feedback – updates every 12 hours

These update times aim to optimise server resources by updating the most important feeds (i.e. those displaying active eBay items) more frequently than ones that change only occasionally (i.e. profile/feedback information).

= Some of the Your eBay Feedback features no longer work as expected or are no longer available. What happened? =
		
Due to an unforeseen issue with the eBay data source which powers the Your eBay Feedback tool, the <em>Show X Entries</em> option is now limited to a maximum of 5 entries (was previously 25) and the <em>Feedback Type</em> option has been removed.
		
No changes are required and where these options were in use the following behaviour will now occur:

* **Show X Entries** – If a number over 5 was specified, only 5 feedback entries will now display
* **Feedback Type** – No matter which option was previously selected ("Feedback received as a seller", "All feedback received", "All feedback left for others" or "Feedback received as a buyer"), the feedback entries returned will now be "All feedback received"
		
This was not a planned change and I apologise for this reduction in features.

= What happened to the Your eBay Ads tool? Will my ads stop working? =

As of version 4.3 of the plugin, the Your eBay Ads tool has been retired. This was due to very poor performance by the tool in converting website visitors into potential buyers on eBay. Please find more information about this decision <a target="_blank" href="https://www.auctionnudge.com/help#faq-ads-retired">on the Auction Nudge website</a>.

**All existing snippets will continue to function indefinitely**. This will be handled by the plugin after the 4.3 update as follows:

* Existing users of the plugin (i.e. you have previously used one of the Auction Nudge tools in the WordPress install) will be able to use the Your eBay Ads tool **without change**
* New plugin users will not see the Your eBay Ads option when using the plugin
* All users who do not upgrade past version 4.2, or chose to downgrade to 4.2 will be able to use the Your eBay Ads tool as before

For existing users we highly recommend switching to the Your eBay Listings tool to display your items, where you are over twelve times more likely to have one of your website visitors become a potential buyer on eBay.

= How is such an awesome tool free? =

Auction Nudge funds itself through referral commissions from eBay. As a member of the eBay Partner Network we may receive anonymous commissions from eBay if a successful transaction occurs after clicking an Auction Nudge link to eBay, at no cost to the user.

This means Auction Nudge is free to use and there are no 'pay to unlock' type restrictions and no signups - just obtain your code snippet and install it on your site!

= Where can I find more help? =

The following links should help with most questions and issues:
	
* Watch the <a href="https://wordpress.org/plugins/auction-nudge/installation/">plugin screencast tutorial</a>
* Read through the <a target="_blank" href="https://www.auctionnudge.com/help">Help/FAQ page</a>
* Read through the <a target="_blank" href="https://www.auctionnudge.com/customize">Customize page</a>

== Screenshots ==

1. Once installed on your site, Auction Nudge will display your active eBay information and will update automatically. There are many themes and options to choose from, this example shows the Your eBay Listings tool using the 'Responsive' theme.
2. Widgets are available for all tools. This example shows the Your eBay Profile tool using the 'Overview' theme.
3. Show your recent eBay feedback using the Your eBay Feedback tool, which will automatically update. This example shows the 'Profile Table' theme.
4. Add any of the tools to your page or posts using the Auction Nudge box that appears under the content editor. This shows the options for the Your eBay Listings tool.
5. The options for the Your eBay Profile tool.
6. The options for the Your eBay Feedback tool.
7. The Auction Nudge settings page (Admin > Settings > Auction Nudge), allowing you to set the default eBay username (to save you entering it each time) and the ability to add custom CSS rules. Be sure to check out the <a target="_blank" href="https://wordpress.org/plugins/auction-nudge/installation/">installation video</a> to find out how to use the plugin.

== Changelog ==

= 4.4.2 =

<a href="https://wordpress.org/support/topic/undefined-index-error-31/#topic-8557716-replies">More</a> bug fixes

= 4.4.1 =

Minor <a href="https://wordpress.org/support/topic/undefined-index-error-31/">bug</a> fix. Thanks to kemco1969 for bringing this to my attention

= 4.4 =

* Should your eBay username change, you can now update every instance of Auction Nudge in one go through the Settings page, instead of having to update each manually
* Resolved a conflict with the WooCommerce plugin, which was causing a "No parameters were provided" error for some users

= 4.3.5 =

Fixed a bug with the Your eBay Listings tool where usernames containing the star ('*') character were causing an error. Thanks to Daniel for bringing this to my attention

= 4.3.4 =

Minor bug fix.

= 4.3.3 =

Minor bug fixes.

= 4.3.2 =

Another small bug fix.

= 4.3.1 =

Small bug fix. Thanks to Orlandoo for bringing this to my attention.

= 4.3 =

* Added new 'Overview' theme to the Your eBay Profile tool
* Retired Your eBay Ads tool, see <a target="_blank" href="https://www.auctionnudge.com/help#faq-ads-retired">here</a> for more information

= 4.2 =

* Updated Your eBay Feedback tool options, as explained <a href="https://www.auctionnudge.com/help#faq-feedback-features">here</a>
* Updated plugin FAQ section
* Minor updates to admin area pages

= 4.1.3 =

Small bug fixes. Thanks to moleroda for bringing this to my attention.

= 4.1.2 =

Minor text updates

= 4.1.1 =

Minor text updates

= 4.1 =

Added 'Responsive' theme to the Your eBay Listings tool

= 4.0.3 = 

Fixed minor WordPress admin JavaScript bug which was causing conflicts with some other plugins. Thanks to Tamara for bringing this to my attention.

= 4.0.2 = 

Minor plugin user interface improvements.

= 4.0.1 = 

Fixed bug with setting the eBay site. Thanks to legacy_dzynes for bringing this to my attention on the support forum.

= 4.0 =
* **Pagination** – there is no longer a limit to the total number of items Auction Nudge can display using the Your eBay Listings tool. Each page can show up to 100 items at once, if you have more listed "Previous" and "Next" buttons will allow users to navigate through multiple pages. Use the "Show multiple pages?" option to enable this feature
* **Larger images** – Your eBay Listings item image sizes can now be increased up to 500px x 500px using the "Image Size" option (the previous maximum was 140px x 140px)
* **Reduced cache time** – the Your eBay Listings and Your eBay Ads tools now automatically update 4 times more frequently. These tools now update every 15 minutes (was previously every 60 minutes)
* New 'Profile Table' theme added to the Your eBay Feedback tool

= 3.2 =
* Made wording on Settings page a little clearer
* Added 'Open links in new tab?' option to Your eBay Listings, Your eBay Profile and Your eBay Feedback tools

= 3.1 =
Fixed issue with older versions of PHP which do not suport anonymous functions. Thanks Jeff for pointing this out to me.

= 3.0 =
* Added <a href="https://www.auctionnudge.com/your-ebay-ads">Your eBay Ads</a> tool to plugin
* All tools now available as widgets
* Added eBay Switzerland support
* Small tweaks and bug fixes

= 2.1 =
Fixed bug with special characters in seller IDs. Thanks Jon-Paul for pointing this out to me.

= 2.0 =
* Plugin completely rewritten
* Your eBay Listing, Your eBay Profile and Your eBay Feedback tools can now be added through the page/post edit page
* Allows for feeds to be created on a page-by-page basis, useful if you require multiple item feeds

= 1.0 =
* Minor updates
* Plugin hosted on WordPress Plugin Directory

= 0.2 =
Added the ability to specify custom CSS rules within the plugin to modify the appearance of Auction Nudge.

= 0.1 =
WordPress plugin released.

== Upgrade Notice ==

= 4.4 =

This update is recommended for all users as it contains a fix for a conflict with the WooCommerce plugin, as well as other bug fixes and improvements

= 4.0.1 = 

Fixed bug with setting the eBay site. This bug fix is recommended for all users

= 4.0 =
A major update with lots of new features: faster feed updates, multiple pages of items, larger item images and more