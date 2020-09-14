<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //テーブルの関連付け
    protected $table = 'book';
    
    //更新可能な項目の設定
    protected $fillable = [
        'id',
        'name',
        'del'
    ];
}
