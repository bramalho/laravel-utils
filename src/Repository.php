<?php

namespace BRamalho\LaravelUtils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class Repository
{
    /** @var Model $model */
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $id
     * @return Model
     */
    public function getById(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * @param array $attributes
     * @return $this|Model
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return bool
     */
    public function update(int $id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }
}
