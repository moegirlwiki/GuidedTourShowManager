<?php
/**
 * GuidedTourShowManager GuidedTour呈现辅助插件
 * @category PHP
 * @author 技术萌(techmoe)
 * @copyright 超科学代码研究社 2015
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version v2
 * @link https://github.com/moehub/Changyan4mw
 */ 

//注册插件信息
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'GuidedTourShowManager',
	'author' => '技术萌_techmoe',
	'url' => 'https://www.mediawiki.org/wiki/Extension:GuidedTour',
	'descriptionmsg' => 'guidedtour-desc',
	'version'  => '2.0',
);


//绑定钩子
$wgHooks['AddNewAccount'][] = 'GuidedTourShowManager::onAddNewAccount';

class GuidedTourShowManager{
    
    //当用户的帐号成功后执行
    public static function onAddNewAccount( User $user, $byEmail ){
        global $GTSM_Action;
        
        //构建Cookie数据
        $cookie_data=array(
            'version' => 1,
            'tours' => array(
                $GTSM_Action['onAddNewAccount']['name'] => array(
                    'startTime' => (string)time().'000',
                    'step' => $GTSM_Action['onAddNewAccount']['step']
                    )
                )
            );
        
        //存入cookie
        setcookie('mw_mw-mw-tour',json_encode($cookie_data));
    }
}
?>