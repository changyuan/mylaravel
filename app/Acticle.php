<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Acticle extends Model
{
	// 应该被调整为日期的属性 ,为非空的时候
	// use SoftDeletes;
	// protected $dates = ['deleted_at'];

	protected $table = 'acticles';

	protected $primaryKey = 'id';

	/**
	 * 表明模型是否应该被打上时间戳
	 */
	public $timestamps = false;
  
  	protected $connection = 'mysql';

    //可以被批量赋值的属性,其他字段不能更新，添加
    protected $fillable = ["title","content"];

    // 不能被批量赋值的属性， 这个和fillable 相反的含义，二者只能用一个
    // protected $guarded = ["id"];

	public function boot()
	{
		
		parent::boot();
		// 全局作用域
        /*static::addGlobalScope('age', function(Builder $builder) {
            $builder->where('age', '>', 200);
        });*/ 	 
	}


	/**
     * 只包含活跃用户的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }

    /**
     * 只包含激活用户的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }


    /**
     * 只包含给用类型用户的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
	public function scopeOfType($query, $type)
	
    {
        return $query->where('type', $type);
    }
    // $users = App\User::popular()->active()->orderBy('created_at')->get();
}
