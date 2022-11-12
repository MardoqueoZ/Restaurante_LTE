<?php

namespace App\Repositories;

use App\Models\Reserva;
use App\Repositories\BaseRepository;

/**
 * Class ReservaRepository
 * @package App\Repositories
 * @version November 12, 2022, 10:46 pm UTC
*/

class ReservaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hora_reserva',
        'fecha_reserva'
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
        return Reserva::class;
    }
}
