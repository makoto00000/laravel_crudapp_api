# Laravel CRUD操作

## エンドポイント

|method|endpoint|comment|
|:---:|:---:|:---:|
|GET| api/students|全生徒を取得|
|POST| api/students|生徒を作成|
|GET| api/students/{student.id}|一人の生徒を取得|
|PATCH| api/students/{student.id}|生徒を編集（form-dataの場合POSTでkeyに_method、valueにPUTCHを指定）|
|DELETE| api/students/{student.id}|生徒を削除|
