<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMesaRequest;
use App\Http\Requests\UpdateMesaRequest;
use App\Repositories\MesaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class MesaController extends AppBaseController
{
    /** @var MesaRepository $mesaRepository*/
    private $mesaRepository;

    public function __construct(MesaRepository $mesaRepo)
    {
        $this->mesaRepository = $mesaRepo;
    }

    /**
     * Display a listing of the Mesa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mesas = $this->mesaRepository->all();

        return view('mesas.index')
            ->with('mesas', $mesas);
    }

    /**
     * Show the form for creating a new Mesa.
     *
     * @return Response
     */
    public function create()
    {
        return view('mesas.create');
    }

    /**
     * Store a newly created Mesa in storage.
     *
     * @param CreateMesaRequest $request
     *
     * @return Response
     */
    public function store(CreateMesaRequest $request)
    {
        $input = $request->all();

        $mesa = $this->mesaRepository->create($input);

        Flash::success('Guardada correctamente.');

        return redirect(route('mesas.index'));
    }

    /**
     * Display the specified Mesa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mesa = $this->mesaRepository->find($id);

        if (empty($mesa)) {
            Flash::error('Mesa no encontrada');

            return redirect(route('mesas.index'));
        }

        return view('mesas.show')->with('mesa', $mesa);
    }

    /**
     * Show the form for editing the specified Mesa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mesa = $this->mesaRepository->find($id);

        if (empty($mesa)) {
            Flash::error('Mesa no encontrada');

            return redirect(route('mesas.index'));
        }

        return view('mesas.edit')->with('mesa', $mesa);
    }

    /**
     * Update the specified Mesa in storage.
     *
     * @param int $id
     * @param UpdateMesaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMesaRequest $request)
    {
        $mesa = $this->mesaRepository->find($id);

        if (empty($mesa)) {
            Flash::error('Mesa no encontrada');

            return redirect(route('mesas.index'));
        }

        $mesa = $this->mesaRepository->update($request->all(), $id);

        Flash::success('Editada correctamente.');

        return redirect(route('mesas.index'));
    }

    /**
     * Remove the specified Mesa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mesa = $this->mesaRepository->find($id);

        if (empty($mesa)) {
            Flash::error('Mesa no encontrada');

            return redirect(route('mesas.index'));
        }

        $this->mesaRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('mesas.index'));
    }
}
