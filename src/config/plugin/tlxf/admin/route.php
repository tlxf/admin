<?php
/**
 * author:liziyu
 * QQ:3431486
 */

use Webman\Route;

Route::get('/tlxf/admin/login', [Tlxf\Admin\Controller\Login::class, 'index']);