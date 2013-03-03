<?php
include "include/ShowRSS.php";
include "include/simplepie/autoloader.php";

$url=array('http://www.sososoft.com/feed','http://www.shareany.com/blog/feed/');
$feed=new SimplePie();  
$feed->enable_order_by_date(true);
$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/rss/include/cache');
$feed->set_feed_url($url);  
$feed->init();  

$rss=new RSS("你好","http://www.baidu.com","miaoshu","");

foreach ($feed->get_items() as $item)
{  

  
	$rss->AddItem($item->get_title(), $item->get_permalink(), $item->get_content() ,$item->get_date() );
}  

$rss->Display();
?>