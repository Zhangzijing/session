# session

为PhalApi封装的库


使用方法:

```php
//建议写到config/di.php里面
\PhalApi\DI()->session = new \PhalApi\Session\Lite();

//设置:
\PhalApi\DI()->session->你的自定义字段名称=值;

//获取:
$val = \PhalApi\DI()->session->你的自定义字段名称;

//销毁:
\PhalApi\DI()->destroy()

//获取session_id
$val = \PhalApi\DI()->session_id;


```
