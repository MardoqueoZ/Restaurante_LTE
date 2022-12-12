<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Repositories\ReservaRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Mesa;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class ReservaController extends AppBaseController
{
    /** @var ReservaRepository $reservaRepository*/
    private $reservaRepository;

    public function __construct(ReservaRepository $reservaRepo)
    {
        $this->reservaRepository = $reservaRepo;
    }

    /**
     * Display a listing of the Reserva.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reservas = $this->reservaRepository->all();

        return view('reservas.index')
            ->with('reservas', $reservas);
    }

    /**
     * Show the form for creating a new Reserva.
     *
     * @return Response
     */
    public function create()
    {
        $mesas = Mesa::pluck('desc_mesa', 'id');
        return view('reservas.create', compact('mesas'));;
    }

    /**
     * Store a newly created Reserva in storage.
     *
     * @param CreateReservaRequest $request
     *
     * @return Response
     */
    public function store(CreateReservaRequest $request)
    {
        $input = $request->all();

        $reserva = $this->reservaRepository->create($input);

        Flash::success('Reserva guardada.');

        return redirect(route('reservas.index'));
    }

    /**
     * Display the specified Reserva.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reserva = $this->reservaRepository->find($id);

        $mesas = Mesa::pluck('desc_mesa', 'id');

        if (empty($reserva)) {
            Flash::error('Reserva no encontrado');

            return redirect(route('reservas.index'));
        }

        return view('reservas.show', compact('reserva','mesas'));
    }

    /**
     * Show the form for editing the specified Reserva.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reserva = $this->reservaRepository->find($id);
        $mesas = Mesa::pluck('desc_mesa', 'id');

        if (empty($reserva)) {
            Flash::error('Reserva no encontrado');

            return redirect(route('reservas.index'));
        }

        return view('reservas.edit', compact('reserva','mesas'));
    }

    /**
     * Update the specified Reserva in storage.
     *
     * @param int $id
     * @param UpdateReservaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReservaRequest $request)
    {
        $reserva = $this->reservaRepository->find($id);

        if (empty($reserva)) {
            Flash::error('Reserva no encontrada');

            return redirect(route('reservas.index'));
        }

        $reserva = $this->reservaRepository->update($request->all(), $id);

        Flash::success('Reserva editada.');

        return redirect(route('reservas.index'));
    }

    /**
     * Remove the specified Reserva from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reserva = $this->reservaRepository->find($id);

        if (empty($reserva)) {
            Flash::error('Reserva no encontrada');

            return redirect(route('reservas.index'));
        }

        $this->reservaRepository->delete($id);

        Flash::success('Reserva eliminada.');

        return redirect(route('reservas.index'));
    }
}
