<?php namespace Neg\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;
use Neg\Models\Blog;

class BlogPresenter extends BasePresenter
{
    public function __construct(Blog $resource)
    {
        $this->wrappedObject = $resource;
    }

    public function published_at()
    {
        $published = $this->wrappedObject->published_at;

        return Carbon::createFromFormat('Y-m-d H:i:s', $published)
            ->toFormattedDateString();
    }
}