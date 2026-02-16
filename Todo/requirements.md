## 要件定義
- todoアプリ
- タスクの追加
- タスクの削除
- タスクの一覧の参照
- メニュー画面

## ユースケースの整理
1. cliアプリ起動
2. メニュー一覧が表示、追加、削除、一覧表示が選べる
3. 追加を押すとタスクの入力ができる
4. 入力してエンターでタスクを登録
5. 削除を押すと削除するタスク番号を入力する
6. 入力してエンターでタスクを削除
7. 一覧を押すとタスクの一覧が表示される
8. escでアプリは終了する

##　ドメインモデルの抽出
Taskモデル(ひとつのタスクはなにか)
id ,nameの属性を持つ

TaskListモデル（タスクをどう管理するか）
task属性を持つ
タスクの追加
タスクの削除
タスク一覧を取得
IDで特定のタスクを検索する

## レイヤー設計
Presentation Layer
View

Application Layer
AddTaskUseCase
DeleteTaskUseCase
ListTasksUseCase

Domainlayer

Infastructure layer


view

application 

domain
