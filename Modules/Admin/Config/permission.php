<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 权限配置
 * 为了避免其他模块有同名的权限，权限标识要以 '控制器@方法' 开始
 */
return [
    [
        'group' => '角色管理',
        'permissions' => [
            ['title' => '角色列表', 'name' => 'Modules\Admin\Http\Controller@index', 'guard' => 'admin'],
            ['title' => '编辑角色', 'name' => 'Modules\Admin\Http\Controller@edit', 'guard' => 'admin'],
            ['title' => '删除角色', 'name' => 'Modules\Admin\Http\Controller@destroy', 'guard' => 'admin'],
            ['title' => '添加角色', 'name' => 'Modules\Admin\Http\Controller@create', 'guard' => 'admin'],
            ['title' => '修改角色权限', 'name' => 'Modules\Admin\Http\Controller@permission', 'guard' => 'admin'],
        ],
    ],
//    [
//        'group' => '会员管理',
//        'permissions' => [
//            ['title' => '会员列表', 'name' => 'Admin::user-index', 'guard' => 'admin'],
//            ['title' => '编辑会员', 'name' => 'Admin::user-edit', 'guard' => 'admin'],
//        ],
//    ],
];
