<?php
! defined ( 'P_W' ) && exit ( 'Forbidden' );
 defined('P_W') || exit('Forbidden'); class LoginBehaviorHookitem extends PW_HookItem { function run () { $db_md_ifopen = $this->getVar('db_md_ifopen'); if ($db_md_ifopen) { $winduid = $this->getVar('winduid'); require_once(R_P.'require/functions.php'); doMedalBehavior($winduid,'continue_login'); } } }