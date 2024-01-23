<?php
namespace App\Traits;

trait UserAgentTrait
{
    protected const IPHONE = 'iphone';

    protected const IPAD = 'ipad';

    protected const ANDROID = 'Android';
    // protected static $allowedDevices = ["iphone", "ipad", "Android"];

    public static function clean(string &$userAgentHeader) 
    {
        return explode(" ", preg_replace('/[;()]/', '', $userAgentHeader)); // Removes special chars.
    }

    // public static function isPhone()
    // {
    //     if (in_array(self::ANDROID,  static::clean()));

        
    // }
}