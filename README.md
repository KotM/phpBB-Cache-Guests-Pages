# Cache Guests Pages mod for phpBB 3.0.x forum
Content of pages displayed to guests and bots will be stored in file cache, and obtained from the cache on recurrent page visit. Installing this module will significantly decrease server load caused by guests and bots visits, but please note that cache size will be increased proportional to guests activity.

## Features:
 - Pages generation time **better in 10-50 times** (opened by guests and bots);
 - Cached pages: **index.php, viewforum.php, viewtopic.php, portal.php** (Board3 Portal related);
 - **Easy to apply** for almost any other page within phpBB;
 - **ETag/If-None-Match** headers support (caching on HTTP protocol layer as well);
 - **Write-through caching**: if anyone modifies topic content, corresponding topic and forums cache files will be removed.

## Note: 
For evaluating real page load time please pay attention on debug timing in the **left bottom corner of the page**. Debug information on standard place of your page displays time taken on generation of original page, without caching. Pay attention on the screenshot below -- page generation time is displayed in two places.

## Official phpBB version:
https://www.phpbb.com/customise/db/mod/cgp/
