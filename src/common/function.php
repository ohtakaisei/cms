<?php
    /** ルートを取得する */
    function getRoot(){
        return $_SERVER['DOCUMENT_ROOT'];
    }

    /* URLのドメイン以降を取得する */
	function getRequestURL(){
		return $_SERVER["REQUEST_URI"];
    }
    
    /* DBの接続オブジェクトを取得します。 */
	function getDbh(){
			$dsn='mysql:dbname=test;host=127.0.0.1';
			$user='root';
			$pass='orehakami';
		try{
			$dbh = new PDO($dsn,$user,$pass);
			if ($dbh == null) {
				p('ごめんね。メンテナンス中です。');
			}else{
				p('ようこそ');
			}
			$dbh->query('SET NAMES utf8');
		}catch(PDOException $e){
			p('Error:'.$e->getMessage());
			p('あららららデータベースへの接続に失敗しました。');
			die();
		}
		return $dbh;
	}
    
    /* print関数の略 */
   function p($str){
	print $str;
   }

    
?>