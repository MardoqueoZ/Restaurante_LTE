<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Repositories\BaseRepository;

/**
 * Class PedidoRepository
 * @package App\Repositories
 * @version November 12, 2022, 10:32 pm UTC
*/

class PedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hora_pedido',
        'fecha_pedido',
        'cantidad_pedido'
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
        return Pedido::class;
    }
}
