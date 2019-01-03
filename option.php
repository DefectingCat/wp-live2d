<?php
//配置一个主菜单和子菜单以及内容
add_action ('admin_menu','test_menu');
function test_menu() {
	add_menu_page(__('这个是主菜单'), __('这个是主菜单的名字'), 'administrator',  __FILE__, 'm_menu', false, 100);
	add_submenu_page(__FILE__,'这个是子菜单1','这个是子菜单的名字', 'administrator', 'y-menu1', 'm_submenu1');
	add_submenu_page(__FILE__,'这个是子菜单2','这个是子菜单的名字', 'administrator', 'y-menu2', 'm_submenu2');
}
function m_menu() {
  echo "<h2>测试菜单内容</h2>";
}
function m_submenu1() {
   echo "<h2>测试子菜单设置一</h2>";
}
function m_submenu2() {
   echo "<h2>测试子菜单设置二</h2>";
}


?>