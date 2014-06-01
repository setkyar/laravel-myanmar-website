<?php

namespace LM\Repositories;

abstract class AbstractRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Find all models
     *
     * @param  int  $perPage
     * @return LM\Models\User
     */
    public function findAll($perPage = 200)
    {
        return $this->model->orderBy('created_at', 'desc')
                            ->paginate($perPage);
    }

    /**
     * Find model by ID
     *
     */
    public function findById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a model
     *
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Updating a model by ID
     *
     */
    public function update(array $data, $id)
    {
    	$model = $this->findById($id);
    	$model->fill($data);
    	return $model->save();
    }
}