<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDevisRequest;
use App\Http\Requests\UpdateDevisRequest;
use App\Repositories\DevisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DevisController extends AppBaseController
{
    /** @var  DevisRepository */
    private $devisRepository;

    public function __construct(DevisRepository $devisRepo)
    {
        $this->devisRepository = $devisRepo;
    }

    /**
     * Display a listing of the Devis.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $devis = $this->devisRepository->paginate(10);

        return view('devis.index')
            ->with('devis', $devis);
    }

    /**
     * Show the form for creating a new Devis.
     *
     * @return Response
     */
    public function create()
    {
        return view('devis.create');
    }

    /**
     * Store a newly created Devis in storage.
     *
     * @param CreateDevisRequest $request
     *
     * @return Response
     */
    public function store(CreateDevisRequest $request)
    {
        $input = $request->all();

        $devis = $this->devisRepository->create($input);

        Flash::success('Devis saved successfully.');

        return redirect(route('devis.index'));
    }

    /**
     * Display the specified Devis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $devis = $this->devisRepository->find($id);

        if (empty($devis)) {
            Flash::error('Devis not found');

            return redirect(route('devis.index'));
        }

        return view('devis.show')->with('devis', $devis);
    }

    /**
     * Show the form for editing the specified Devis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $devis = $this->devisRepository->find($id);

        if (empty($devis)) {
            Flash::error('Devis not found');

            return redirect(route('devis.index'));
        }

        return view('devis.edit')->with('devis', $devis);
    }

    /**
     * Update the specified Devis in storage.
     *
     * @param int $id
     * @param UpdateDevisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevisRequest $request)
    {
        $devis = $this->devisRepository->find($id);

        if (empty($devis)) {
            Flash::error('Devis not found');

            return redirect(route('devis.index'));
        }

        $devis = $this->devisRepository->update($request->all(), $id);

        Flash::success('Devis updated successfully.');

        return redirect(route('devis.index'));
    }

    /**
     * Remove the specified Devis from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $devis = $this->devisRepository->find($id);

        if (empty($devis)) {
            Flash::error('Devis not found');

            return redirect(route('devis.index'));
        }

        $this->devisRepository->delete($id);

        Flash::success('Devis deleted successfully.');

        return redirect(route('devis.index'));
    }
}
