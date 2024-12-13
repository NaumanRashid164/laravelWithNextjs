<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];
    private static $Setting = NULL;
    public static function settings()
    {
        if (is_null(self::$Setting)) {

            $data = \DB::table('settings');
            if (\Auth::check()) {
                $data   = $data->where('user_id', '=', 1);
            } else {
                $data = $data->where('user_id', '=', 1);
            }
            $data     = $data->get();

            self::$Setting = $data;
        }
        $data = self::$Setting;

        $settings = [
            "theme_mode" => "dark",
            "site_name" => "Todds Mansion",
            "site_logo" => "logo.png",
            "fav_logo" => "favicon.png",
            "primary_color" => "#FCC923"
        ];

        foreach ($data as $row) {
            $settings[$row->key] = $row->value;
        }
        return $settings;
    }
    public static function getValByName($key)
    {
        $setting = self::settings();
        if (!isset($setting[$key]) || empty($setting[$key])) {
            $setting[$key] = '';
        }
        if ($key == "package") {
            return unserialize($setting[$key]);
        }
        return $setting[$key];
    }
}
