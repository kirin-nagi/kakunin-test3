<h1>確認テスト__PiGly</h1>

<br>
<h2>環境構築</h2>
<br>

<h3>Dockerビルド</h3>
<br>

１，git clone リンク　


２．docker-compose up -d --build　
<br>




<h3>Laravel環境構築</h3>　
<br>

１，docker-compose exec php bash　　


２，composer install　


３，.env.exampleファイルから.envを作成し、環境変数を変更　


４，php artisan key:generate　


５，php artisan migrate　



<h3>github環境構築</h3>
<br>

1,git clone git@github.com:kirin-nagi/kakunin-test3.git
<br>

2,cd リポジトリ名
<br>

3,git remote set-url origin git@github.com:kirin-nagi/リポジトリ名.git
<br>

4,git add .
<br>

5,git commit -m "リモートリポジトリの変更"
<br>

6,git push origin main
<br>





<h2>使用技術</h2>　
<br>

１，Laravel 8.83.8　　


２，PHP 8.4.4　


３，MySQL 8.0　
<br>

<h2>ER図</h2>
<img width="682" height="808" alt="PiGly ER図" src="https://github.com/user-attachments/assets/3c909e6a-ba9b-4760-9d12-26276c900270" />



<h2>URL</h2>　　
<br>

・環境開発：  http://localhost/　


・phpMyAdmin:  http://localhost:8080/　
