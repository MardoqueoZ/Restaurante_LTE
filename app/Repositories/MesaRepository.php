<?php

namespace App\Repositories;

use App\Models\Mesa;
use App\Repositories\BaseRepository;

/**
 * Class MesaRepository
 * @package App\Repositories
 * @version November 12, 2022, 10:16 pm UTC
*/

class MesaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'desc_mesa',
        'costo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mesa::class;
    }
}
