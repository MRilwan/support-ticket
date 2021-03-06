<?php


namespace App\Repositories\Core;


use Illuminate\Database\Eloquent\Model;

interface RepositoryContract
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model;

}
