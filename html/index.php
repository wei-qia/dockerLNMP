<?php
phpinfo();

// $dbms='mysql';     //数据库类型
// $host='my-mysql'; //数据库主机名
// $dbName='test';    //使用的数据库
// $user='root';      //数据库连接用户名
// $pass='123456';          //对应的密码
// $dsn="$dbms:host=$host;dbname=$dbName";


// try {
//     $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
//     echo "连接成功<br/>";
//     你还可以进行一次搜索操作
//     foreach ($dbh->query('SELECT * from FOO') as $row) {
//         print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
//     }
    
//     $dbh = null;
// } catch (PDOException $e) {
//     die ("Error!: " . $e->getMessage() . "<br/>");
// }
// //默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
// $db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
// 
// $redis = new Redis();
//    $redis->connect('my-redis', 6379);
   // $redis->set('111',222);
         //查看服务是否运行
   // echo $redis->get('111');