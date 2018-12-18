# php-ddd-sample
phpを使ったDDDサンプル

## サンプルの概要

事前予約、日中予約、夜間予約の3パターンそれぞれで異なる料金を算出する処理をドメイン駆動設計ライクに作ってみました
(現時点ではValueObjectとFactoryパターンのみ実装しています)

## ざっくり説明

- index.php以外で使用するファイルはautoload.phpで読み込んでいます
- index.php内でFactoryパターンを使ったクラスを呼び出しています
- Factoryパターンのクラス群を生成する過程でValueObjectを使用しています

## 動作方法

ルートディレクトリで `php index.php` を実行して下さい
