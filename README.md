1.1.1 \<br>
项目名称：合肥学院电脑维修与需求发布网站\<br>
1.1.2\<br>
项目成员：胡宇涛，马信宏，孙永飞，许经纬，袁诗林（按首字母顺序排列）\<br>
1.1.3\<br>
项目开发环境：\<br>
①本地开发环境：WampServe64 -> Apach2.4.23 ->  Mysql5.7.14 -> Php5.6.25\<br>
②服务器环境：ubuntu64 + LampServe64一键安装包\<br>
1.1.4\<br>
版本：1.0.0\<br>
1.1.5\<br>
项目开发技术：php + speed + mysql\<br>
1.1.6\<br>
需求：\<br>
①用户发布需求，这些需求可以是做网页，做博客，或者用单片机做一些简单送人的玩具，只要是和计算机技术相关的需求都可以\<br>
②电脑的维修，可以帮助维修一些软件问题，比如突然不能上网，路由器不会配置，或者是需要重装系统或者双系统，也可按照固态硬盘和内存条\<br>
③帮助开发，网站和微信公众号\<br>
④提供软件下载，如建工系的cad，计科系的vc6.0\<br>
⑤爬虫技术的运用，可以进行对相关资料进行全网搜索\<br>
1.1.7
主页(index.php)->维修电脑(repair.php)->维修登记(repair-regist.php)->增加维修登记后台操作页面(repair-regist-handle.php)
									 ->维修查询(repairshow.php)
			   ->发布需求(demand.php)->需求列表(demandlist.php)
									 ->增加需求(adddemand.php)->增加需求后台操作页面(adddemand-handle.php)
									 ->修改需求(modifydemand.php)->修改需求后台操作页面(modifydemand-handle.php)
									 ->删除需求(deldemand.php)->删除需求后台操作页面(deldemand-handle.php)
			   ->软件下载(software.php)
			   ->关于我们(aboutus.php)
			   
后台(admin.php)->维修列表(repairlist.php)->维修信息管理页面(repairmanage.php)
			   ->需求详情(demandlist.php)->需求信息管理页面(demandmanage.php)
			   ->管理员(adminrole.php)->增加管理员(addadmin.php)
									  ->修改管理员(modifyadmin.php)
									  ->删除管理员(deladmin.php)
1.1.8
MySql
账号：root 密码:itfly
DB:webpc
Table:repire
CREATE TABLE `webpc`.`repire`( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `brand` VARCHAR(40) NOT NULL ,`connect` VARCHAR(255) NOT NULL, `description` TEXT NOT NULL , `picture` VARCHAR(255) NULL , `create_time` TIMESTAMP NOT NULL , `modify_time` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM; 
Table:demand		
CREATE TABLE `webpc`.`demand` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `demand` TEXT NOT NULL , `pirecutre` VARCHAR(255) NULL , `connect` VARCHAR(255) NOT NULL , `create_time` TIMESTAMP NOT NULL , `modify_time` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM; 
Table:admin
CREATE TABLE `webpc`.`admin` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `account` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `careat_time` TIMESTAMP NOT NULL , `modify_time` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM; 

							  