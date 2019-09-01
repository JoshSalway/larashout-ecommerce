<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Config;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = ['key', 'value'];

    public static function get($key)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->first();
        $entry->value = $value;
        $entry->saveOrFail();
        Config::set('key', $value);
        if (Config::get($key) == $value) {
            return true;
        }
        return false;
    }
}
