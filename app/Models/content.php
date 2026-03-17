<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'type'];

    public static function get($key, $default = null)
    {
        $content = self::where('key', $key)->first();
        return $content ? $content->value : $default;
    }
}