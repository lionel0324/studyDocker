# DockerSandbox

## 目的
Dockerでの開発環境が一般化してきているので、window10上でDockerを使ったLAMP環境を構築すること

## やったこと
- Dockerのインストール
- apache + PHP 用のコンテナ作成
- MYSQL 用のコンテナ作成
- コマンド実行
    - docker --version
    - docker-compose --version
    - docker-compose up -d  #コンテナに起動（vm立ち上げみたいなもの）
    - docker-compose down  #コンテナに終了（vm終了みたいなもの）
    - docker-machine ip #IP確認
    - docker exec -it コンテナ名 bash #コンテナに入る（vmでいう所のSSHのようなもの）
- docker-compose.ymlの作成、記述 #コンテナ起動時のオプションを記述（複数のコンテナ起動するときに用意するもの？要勉強）
- Dockerfileの作成、記述（起動時のオプション設定？要勉強）

## 実行環境
Windows 10 Home

## インストール
https://docs.docker.com/toolbox/toolbox_install_windows/

Docker Toolbox on Windows

（通常のDocker for Windowsはwindow10 Home非対応なので注意）

## ゴール
PHPからpdoを使ってMYSQL接続するところまで
