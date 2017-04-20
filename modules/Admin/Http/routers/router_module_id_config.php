<?php
/**
 * Nơi chứa cấu hình module id mac dinh
 */
$perAppDefault = [
    'module'         => 10,
    'category'       => 4,
    'menu'           => 3,
    'account'        => 12,
    'new'            => 5,
    'configuration'  => 11,
    'tag'            => 1,
    'banner'         => 6,
];

/**
 * Phat trien tinh nag nao thi dien vao day
 */
$perAppDev = [
    'tabaction'      => 2,
    'event'          => 7,
    'suggestkeyword' => 8,
    'suggestsearch'  => 9,
];

// Merge lai thong tin de lay mang config
$perModule = array_merge($perAppDefault, $perAppDev);