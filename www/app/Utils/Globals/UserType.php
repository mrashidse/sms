<?php

namespace App\Utils\Globals;


class UserType
{
    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const PLAZA_ADMIN = 3;
    const PLAZA_MANAGER = 4;
    const SHOP_ADMIN = 5;
    const SHOP_MANAGER = 6;

    public static $types = [
        "" => "Select User Type", //0
        self::SUPER_ADMIN => "Super Admin",
        self::ADMIN => "Admin",
        self::PLAZA_ADMIN => "Plaza Admin",
        self::PLAZA_MANAGER => "Plaza Admin",
        self::SHOP_ADMIN => "Shop Admin",
        self::SHOP_MANAGER => "Shop Manager",
    ];
}