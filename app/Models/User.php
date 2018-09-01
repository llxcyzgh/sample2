<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // notifiable 是一个trait
    use Notifiable;

    // 闭包函数中 use 的作用是连接闭包与外界变量

    // 指定表名
    protected $table = 'users'; // 如果表名与模型名相对应,则无需指定,系统会默认给出这个表名

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function gravatar($size = 100)
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        $url  = 'http://www.gravatar.com/avatar/' . $hash . '?s=' . $size . '&d=404';

        // curl 查看 gravatar图片是否存在
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true); // 返回header头信息
        curl_setopt($ch, CURLOPT_NOBODY, true); // 不返回body信息
        $output = curl_exec($ch);
        curl_close($ch);

        $output = str_replace(' ', '', strtolower($output));
        if (strpos(strtolower($output), '404notfound') !== false) {
            // 图片不存在, 进行处理, 存在则直接跳过此步骤
            $url = '';
        }

        $email_arr = [($this->attributes['email'])[0], ($this->attributes['email'])[1], ($this->attributes['email'])[2]];

        // 按邮箱前三个字符按比例算出rgb值(数字加字母共36个字符)
        $email_bgc_arr = array_map(function ($v) {
            if (is_numeric($v)) {
                $v = $v + 1;
            } else {
                $v = ord(strtolower($v)) - 96 + 10;
            }
            $v = floor($v / 36 * 255);
            return $v;
        }, $email_arr);
        $user = $this;
        return compact('url', 'email_bgc_arr','user');
    }

}
