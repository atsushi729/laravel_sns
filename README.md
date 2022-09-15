
## ADRコントローラ作成用コマンド使い方
### Action,Responderの一括作成コマンド
```angular2html
docker-compose run --rm app php artisan make:controller-adr {Controller以下のパス}/{Controllerのプレフィックス（Indexなど）}
// 使用例:User/IndexAction.php, User/IndexResponder.php が生成
docker-compose run --rm app php artisan make:controller-adr User/Index
```

※-uまたは--usecaseオプションによりUsecaseも同時に作成可能です。
```angular2html
docker-compose run --rm app php artisan make:controller-adr {-u || --usecase} {Controller以下のパス}/{Controllerのプレフィックス（Indexなど）}
// 使用例:User/IndexAction.php, User/IndexUsecase.php, User/IndexResponder.php が生成
docker-compose run --rm app php artisan make:controller-adr -u User/Index
```
### Actionなどを個別に作成する際
```angular2html
docker-compose run --rm app php artisan make:{action || usecase || responder} {Controller以下のパス}/{Controllerのプレフィックス（Indexなど）}
```

※Actionのみ。-uまたは--usecaseオプションにより予めUsecaseを読み込んだ状態でActionを作成可能です。
```angular2html
docker-compose run --rm app php artisan make:action {-u || --usecase} {Controller以下のパス}/{Controllerのプレフィックス（Indexなど）}
```
