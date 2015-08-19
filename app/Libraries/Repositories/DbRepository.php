<?php namespace Neg\Libraries\Repositories;

abstract class DbRepository implements BaseRepositoryInterface
{
    /**
     * Eloquent model
     */
    protected $model;

    /**
     * @param $model
     */
    function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Fetch a record by id
     *
     * @param $id
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->all();
    }

    public function insertNewData($inputFields)
    {
        $this->model->fill($inputFields);
        $this->model->save();
    }

    public function deleteData($modelId)
    {
        $this->model->find($modelId)->delete();
    }


    public function findData($modelId)
    {
        return $this->model->find($modelId);
    }

    public function updateData($modelId, $data)
    {


        $this->model->find($modelId)->update($data);
        $this->model->save();
    }
}