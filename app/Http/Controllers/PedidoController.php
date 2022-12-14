<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Repositories\PedidoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Menu;
use Laracasts\Flash\Flash;
use Response;

class PedidoController extends AppBaseController
{
    /** @var PedidoRepository $pedidoRepository*/
    private $pedidoRepository;

    public function __construct(PedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }

    /**
     * Display a listing of the Pedido.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pedidos = $this->pedidoRepository->all();

        return view('pedidos.index')
            ->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new Pedido.
     *
     * @return Response
     */
    public function create()
    {
        $menus = Menu::pluck('desc_menu', 'id');
        return view('pedidos.create', compact('menus'));
    }

    /**
     * Store a newly created Pedido in storage.
     *
     * @param CreatePedidoRequest $request
     *
     * @return Response
     */
    public function store(CreatePedidoRequest $request)
    {
        $input = $request->all();

        $pedido = $this->pedidoRepository->create($input);

        Flash::success('Pedido guardado correctamente.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Display the specified Pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedido = $this->pedidoRepository->find($id);
        $menus = Menu::pluck('desc_menu', 'id');

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.show', compact('pedido','menus'));
    }

    /**
     * Show the form for editing the specified Pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedido = $this->pedidoRepository->find($id);
        $menus = Menu::pluck('desc_menu', 'id');

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.edit', compact('pedido','menus'));
    }

    /**
     * Update the specified Pedido in storage.
     *
     * @param int $id
     * @param UpdatePedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidoRequest $request)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('pedidos.index'));
        }

        $pedido = $this->pedidoRepository->update($request->all(), $id);

        Flash::success('Editado correctamente.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Remove the specified Pedido from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('pedidos.index'));
        }

        $this->pedidoRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('pedidos.index'));
    }
}
