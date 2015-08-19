<?php namespace Neg\Models;

use Illuminate\Database\Eloquent\Model as Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Neg\Presenters\BlogPresenter;

class Blog extends Model implements HasPresenter
{

    public $table = 'blogs';

    public $fillable = [
        'author_id',
        'title',
        'body',
        'publish',
        'published_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'publish' => 'boolean'
    ];

    public static $rules = [
        'title' => 'required'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getPresenterClass()
    {
        return BlogPresenter::class;
    }

}