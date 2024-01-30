<?php

// 1ページあたりの取得件数
$maxResults = 1;

// ページ番号（1ページ目の情報を取得）

$startIndex = 0;  //欲しいページ番号-1 で設定

// APIの基本になるURL
$base_url = 'https://www.googleapis.com/books/v1/volumes/';

var_dump($_GET);
$base_url .= $_GET['t-d-id'];

// 書籍情報を取得
$json = file_get_contents($base_url);

// デコード（objectに変換）
$data = json_decode($json);

// 全体の件数を取得
$total_count = $data->totalItems;

if(isset($data->items)){
    // 書籍情報を取得
    $books = $data->items;

   // 実際に取得した件数
   $get_count = count($books);
}else{
    // 書籍情報を取得
    $books = [];

   // 実際に取得した件数
   $get_count = 0;
}


?>