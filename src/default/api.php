<?php

// 検索条件を配列にする
$params = array();
$str1=$str2=$str3='';
//書籍タイトル
if(isset($_POST['intitle'])){
    if($_POST['intitle']!=''){
        $str1=trim($_POST['intitle']);
        $str1=str_replace(" ", "", $str1);
        $params = array_merge($params,array('intitle'=>$str1));
    }
}
//著者
if(isset($_POST['inauthor'])){
    if($_POST['inauthor']!=''){
        $str2=trim($_POST['inauthor']);
        $str2=str_replace(" ", "", $str2);
        $params = array_merge($params,array('inauthor'=>$str2));
    }
}
//出版社
if(isset($_POST['inpublisher'])){
    if($_POST['inpublisher']!=''){
        $str3=trim($_POST['inpublisher']);
        $str3=str_replace(" ", "", $str3);
        $params = array_merge($params,array('inpublisher'=>$str3));
    }
    // else{
    //     unset($params['inpublisher']);
    // }
}

// 1ページあたりの取得件数
$maxResults = 10;

// ページ番号（1ページ目の情報を取得）
if(isset($_POST['p+'])){
    $startIndex = $_POST['p+'];
}else if(isset($_POST['p-'])){
    $startIndex = $_POST['p-'];
}else{
    $startIndex = 0;  //欲しいページ番号-1 で設定
}

// APIの基本になるURL
$base_url = 'https://www.googleapis.com/books/v1/volumes?q=';

$count = count($params);

if($count!=0){
    // 配列で設定した検索条件をURLに追加
    foreach ($params as $key => $value) {
        $base_url .= $key.':'.$value.'+';
    }

    // 末尾につく「+」をいったん削除
    $params_url = substr($base_url, 0, -1);

    // 件数情報を設定
    $url = $params_url.='&maxResults='.$maxResults.'&startIndex='.$startIndex;
}else{
    $params_url = $base_url;
    // 件数情報を設定
    $url = $params_url.='maxResults='.$maxResults.'&startIndex='.$startIndex;
}

// 書籍情報を取得
$json = file_get_contents($url);

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
    // $books = [];

   // 実際に取得した件数
   $get_count = 0;
}


?>