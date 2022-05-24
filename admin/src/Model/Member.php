<?php

namespace Tlxf\Admin\Model;

use support\Model;

class Member extends Model
{

    /**
     * 对应表名
     * @var string
     */
    protected $table = 'web_members';

    /**
     * 主键
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * 自动维护时间戳
     * @var bool
     */
    public $timestamps = true;

    /**
     * 允许批量填充的字段
     * @var string[]
     */
    protected $fillable = ['phone', 'password', 'total_fee', 'username', 'status', 'photo', 'content', 'deleted_at'];

}
