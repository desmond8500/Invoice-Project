<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDevisAPIRequest;
use App\Http\Requests\API\UpdateDevisAPIRequest;
use App\Models\Devis;
use App\Repositories\DevisRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DevisController
 * @package App\Http\Controllers\API
 */

class DevisAPIController extends AppBaseController
{
    /** @var  DevisRepository */
    private $devisRepository;

    public function __construct(DevisRepository $devisRepo)
    {
        $this->devisRepository = $devisRepo;
    }

    /**
     * Display a listing of the Devis.
     * GET|HEAD /devis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $devis = $this->devisRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($devis->toArray(), 'Devis retrieved successfully');
    }

    /**
     * Store a newly created Devis in storage.
     * POST /devis
     *
     * @param CreateDevisAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDevisAPIRequest $request)
    {
        $input = $request->all();

        $devis = $this->devisRepository->create($input);

        return $this->sendResponse($devis->toArray(), 'Devis saved successfully');
    }

    /**
     * Display the specified Devis.
     * GET|HEAD /devis/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Devis $devis */
        $devis = $this->devisRepository->find($id);

        if (empty($devis)) {
            return $this->sendError('Devis not found');
        }

        return $this->sendResponse($devis->toArray(), 'Devis retrieved successfully');
    }

    /**
     * Update the specified Devis in storage.
     * PUT/PATCH /devis/{id}
     *
     * @param int $id
     * @param UpdateDevisAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevisAPIRequest $request)
    {
        $input = $request->all();

        /** @var Devis $devis */
        $devis = $this->devisRepository->find($id);

        if (empty($devis)) {
            return $this->sendError('Devis not found');
        }

        $devis = $this->devisRepository->update($input, $id);

        return $this->sendResponse($devis->toArray(), 'Devis updated successfully');
    }

    /**
     * Remove the specified Devis from storage.
     * DELETE /devis/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Devis $devis */
        $devis = $this->devisRepository->find($id);

        if (empty($devis)) {
            return $this->sendError('Devis not found');
        }

        $devis->delete();

        return $this->sendSuccess('Devis deleted successfully');
    }
}
