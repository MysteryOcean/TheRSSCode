<?php
include_once("include/settings.php");
?>
<?php
	//头部
	echo '<?xml version="1.0" encoding="utf-8" ?>';
	echo "\n".'<rss version="2.0">';
	echo "\n".'<channel>';
	echo "\n".'<pubData>'.date("Y-m-d H:i:s").'</pubData>';
	echo "\n".'<generator>NotePad</generator>';
	//文档描述
	echo "\n".'<docs>'.$site_address.'</docs>';
	echo "\n".'<description>'."描述".'</description>';
	echo "\n".'<link>'.$site_address.'</link>';
	echo "\n".'<title>'.$site_title.'</title>';
	//图片描述
	echo "\n".'<image>';
	echo "\n".'<title>'.$site_title.'</title>';
	echo "\n".'<url>'.$site_address."/qwe.gif".'</url>';
	echo "\n".'<link>'.$site_address.'</link>';
	echo "\n".'<description>'."描述".'</description>';
	echo "\n".'</image>';
	//列表
	echo "\n".'<item>';
	echo "\n".'<title>'."标题".'</title>';
	echo "\n".'<link>'."链接".'</link>';
	echo "\n".'<category>'."分类".'</category>';
	echo "\n".'<pubData>'."发布时间".'</pubData>';
	echo "\n".'<guid>'."链接".'</guid>';
	echo "\n".'</item>';
	//尾部
	echo "\n".'</channel>';
	echo "\n".'</rss>';
?>