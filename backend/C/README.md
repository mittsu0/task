# サーバーサイド課題　 C

## 問 1. どの様なクエリを発行するべきでしょうか？理由もつけて回答してください

下記クエリを発行する。

```
SELECT genre_id, genres.name, avg FROM (SELECT genre_id,avg(price) AS avg FROM items GROUP BY genre_id) AS view LEFT JOIN genres ON genre_id=genres.id;
```

クエリの流れ

- genre_id ごとに price を集計する（items テーブルのレコード数分）
- 集計したテーブルと genres テーブルを結合する（集計したテーブルのレコード数 ×genres テーブルのレコード数分）

下記のようなクエリも考えられるが、items テーブルと genres テーブルのレコードが増えるにつれ、テーブル結合の処理が重くなる。

```
SELECT genre_id, genres.name, avg(price) as avg FROM items LEFT JOIN genres ON genre_id = genres.id GROUP BY genre_id ORDER BY genre_id;
```

クエリの流れ

- items テーブルと genres テーブルを結合する（items テーブルのレコード数 ×genres テーブルのレコード数）
- genre_id ごとに price を集計する（items テーブルのレコード数分）
- 集計したテーブルについて、 genre_id を基準に昇順に並べ替える

## 問 2. id カラム以外はインデックスを貼っていません。もし貼っておいた方が良いインデックスがあれば教えてください。こちらも理由をつけて回答してください

id カラム以外にインデックスを貼る必要はない。

## コマンド

- 起動コマンド：`docker compose up`
- web コンテナへのアクセス：`docker compose exec web bash`
- web コンテナでダミーデータ作成：`php artisan db:seed`
- db コンテナへアクセス：`docker compose exec db bash`
- db コンテナで mysql にログイン：`mysql -u root -proot`
- db コンテナでデータベースを選択：`use quiz;`
