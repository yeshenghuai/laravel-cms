<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 后台菜单配置
 * 下面是属性说明：
 * title 菜单栏目
 * icon 图标参考 http://fontawesome.dashgame.com/
 * menus 子菜单
 * permission 权限标识，必须在permission.php配置文件中存在
 */
return [
    [
        "title"      => "系统管理",
        "icon"       => "fa fa-cog fa-fw",
        'permission' => ['Modules\Admin\Http\Controller@index'],
        "menus"      => [
            ["title" => "角色管理", "permission" => "Modules\Admin\Http\Controller@index", "url" => "/admin/role"],
//            ["title" => "微信配置", "permission" => "Admin::config-wechat", "url" => "链接地址"],
//            ["title" => "邮件配置", "permission" => "Admin::config-mail", "url" => "链接地址"],
//            ["title" => "权限管理", "permission" => "Admin::role-manage", "url" => "/admin/role"],

        ],
    ],
//    [
//        "title"      => "会员管理",
//        "icon"       => "fa fa-file-pdf-o",
//        'permission' => '权限标识',
//        "menus"      => [
//            ["title" => "会员列表", "permission" => "Admin::user-index", "url" => "链接地址"],
//            ["title" => "编辑会员", "permission" => "Admin::user-edit", "url" => "/admin/role"],
//
//        ],
//    ],
];
