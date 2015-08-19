<?php namespace Neg\Libraries\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use Neg\Models\Blog;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BlogRepository extends Repository
{

    /**
     * Configure the Model
     *
     **/
    public function model()
    {
        return 'Neg\Models\Blog';
    }

    public function search($input)
    {
        $query = Blog::query();

        $columns = Schema::getColumnListing('blogs');
        $attributes = array();

        foreach ($columns as $attribute) {
            if (isset($input[$attribute]) and !empty($input[$attribute])) {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] = $input[$attribute];
            } else {
                $attributes[$attribute] = null;
            }
        }

        return [$query->get(), $attributes];
    }

    public function apiFindOrFail($id)
    {
        $model = $this->find($id);

        if (empty($model)) {
            throw new HttpException(1001, "Blog not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($id)
    {
        $model = $this->find($id);

        if (empty($model)) {
            throw new HttpException(1001, "Blog not found");
        }

        return $model->delete();
    }
}
