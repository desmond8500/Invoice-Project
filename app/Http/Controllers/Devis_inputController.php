<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDevis_inputRequest;
use App\Http\Requests\UpdateDevis_inputRequest;
use App\Repositories\Devis_inputRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Devis_inputController extends AppBaseController
{
    /** @var  Devis_inputRepository */
    private $devisInputRepository;

    public function __construct(Devis_inputRepository $devisInputRepo)
    {
        $this->devisInputRepository = $devisInputRepo;
    }

    /**
     * Display a listing of the Devis_input.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $devisInputs = $this->devisInputRepository->paginate(10);

        return view('devis_inputs.index')
            ->with('devisInputs', $devisInputs);
    }

    /**
     * Show the form for creating a new Devis_input.
     *
     * @return Response
     */
    public function create()
    {
        return view('devis_inputs.create');
    }

    /**
     * Store a newly created Devis_input in storage.
     *
     * @param CreateDevis_inputRequest $request
     *
     * @return Response
     */
    public function store(CreateDevis_inputRequest $request)
    {
        $input = $request->all();

        $devisInput = $this->devisInputRepository->create($input);

        Flash::success('Devis Input saved successfully.');

        return redirect(route('devisInputs.index'));
    }

    /**
     * Display the specified Devis_input.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $devisInput = $this->devisInputRepository->find($id);

        if (empty($devisInput)) {
            Flash::error('Devis Input not found');

            return redirect(route('devisInputs.index'));
        }

        return view('devis_inputs.show')->with('devisInput', $devisInput);
    }

    /**
     * Show the form for editing the specified Devis_input.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $devisInput = $this->devisInputRepository->find($id);

        if (empty($devisInput)) {
            Flash::error('Devis Input not found');

            return redirect(route('devisInputs.index'));
        }

        return view('devis_inputs.edit')->with('devisInput', $devisInput);
    }

    /**
     * Update the specified Devis_input in storage.
     *
     * @param int $id
     * @param UpdateDevis_inputRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevis_inputRequest $request)
    {
        $devisInput = $this->devisInputRepository->find($id);

        if (empty($devisInput)) {
            Flash::error('Devis Input not found');

            return redirect(route('devisInputs.index'));
        }

        $devisInput = $this->devisInputRepository->update($request->all(), $id);

        Flash::success('Devis Input updated successfully.');

        return redirect(route('devisInputs.index'));
    }

    /**
     * Remove the specified Devis_input from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $devisInput = $this->devisInputRepository->find($id);

        if (empty($devisInput)) {
            Flash::error('Devis Input not found');

            return redirect(route('devisInputs.index'));
        }

        $this->devisInputRepository->delete($id);

        Flash::success('Devis Input deleted successfully.');

        return redirect(route('devisInputs.index'));
    }
}
