<?php
namespace App\Repositories;

use App\Models\Role as Model;

class RoleRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getByRole($role = 'user')
    {
        return $this->start()->where('role', $role)->first();
    }

}
