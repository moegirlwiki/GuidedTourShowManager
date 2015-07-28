# GuidedTourShowManager
GuidedTour呈现辅助插件  
本插件配合GuideTour一起工作，可以实现当发生特定动作时呈现tour.  

## 安装说明  
从github上下载zip或clone下来源代码，然后打开LocalSetting，按照提示修改并添加如下代码  
```php
$GTSM_Action=array(
    //当新用户注册成功后呈现
    'onAddNewAccount' => array(
        //下面tourmame改为当新用户注册成功后要呈现的tour名
        'name' => 'tourname',
        /**
         * stepname改为当新用户注册成功后要呈现的tour的步骤名
         * 这里对应的是tour代码中tour.firstStep中name的值
         */
        'step' => 'stepname'
        )
    );
//加载插件主体
require "$IP/extensions/GuidedTourShowManager/GuidedTourShowManager.php";
```
