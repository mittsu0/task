# サーバーサイド課題　 B（Laravel）

## 主なルーティング

### アカウント新規作成画面

GET http://localhost:9001/register

### ログイン画面

GET http://localhost:9001/login

### 文字列の投稿画面

GET http://localhost:9001/articles/create

### 文字列の投稿

POST http://localhost:9001/articles

### 投稿一覧画面

GET http://localhost:9001

## コマンド

- 起動コマンド：`docker compose up`
- web コンテナへのアクセス：`docker compose exec web bash`
- web コンテナでダミーデータ作成：`php artisan db:seed`
