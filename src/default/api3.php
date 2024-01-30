<?php

// 1ページあたりの取得件数
$maxResults = 1;

// ページ番号（1ページ目の情報を取得）

$startIndex = 0;  //欲しいページ番号-1 で設定

// APIの基本になるURL
$base_url = 'https://www.googleapis.com/books/v1/volumes/';

// var_dump($_GET);
$base_url .= $book['book_id'];

// 書籍情報を取得
$json = file_get_contents($base_url);

// デコード（objectに変換）
$data = json_decode($json);


?>