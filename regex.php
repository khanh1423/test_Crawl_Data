<?php 

$content = file_get_contents(
    'https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm'
);

preg_match_all('#<article class="article-item" .*?><div class="article-thumb"><a (.+?)> <img .*? data-src="(.+?)" .*?> </a></div><h3 class="article-title"><a .*?>(.+?)</a></h3></article>#si', $content, $matches);
unset($matches[0]);
echo("Đọc nhiều trong Giáo dục");
print_r($matches);


preg_match_all('#<article class="article-item" .*?><a .*?> <img .*? data-src="(.+?)" .*?><h3 class="article-title"><a .*?>(.+?)</a></h3><div class="article-excerpt"><a (.+?)> (.+?)</a></div></div></article>#si', $content, $matches1);
unset($matches1[0]);
echo("Tin liên quan");
print_r($matches1);

preg_match_all('#<article class="article-item".*?><div.*?><img.*?src="(.+?)".*?></a></div><div class="article-content"><h3 class="article-title"><a.*?>(.+?)</a></h3><div class="article-excerpt"><a (.+?).*?>(.+?)</a></div></div></article>#si', $content, $matches2);
unset($matches2[0]);
echo("ĐANG ĐƯỢC QUAN TÂM");
print_r($matches2);
?>
