<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDevis_inputAPIRequest;
use App\Http\Requests\API\UpdateDevis_inputAPIRequest;
use App\Models\Devis_input;
use App\Repositories\Devis_inputRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Devis_inputController
 * @package App\Http\Controllers\API
 */

class Devis_inputAPIController extends AppBaseController
{
    /** @var  Devis_inputRepository */
    private $devisInputRepository;

    public function __construct(Devis_inputRepository $devisInputRepo)
    {
        $this->devisInputRepository = $devisInputRepo;
    }

    /**
     * Display a listing of the Devis_input.
     * GET|HEAD /devisInputs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $devisInputs = $this->devisInputRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($devisInputs->toArray(), 'Devis Inputs retrieved successfully');
    }

    /**
     * Store a newly created Devis_input in storage.
     * POST /devisInputs
     *
     * @param CreateDevis_inputAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDevis_inputAPIRequest $request)
    {
        $input = $request->all();

        $devisInput = $this->devisInputRepository->create($input);

        return $this->sendResponse($devisInput->toArray(), 'Devis Input saved successfully');
    }

    /**
     * Display the specified Devis_input.
     * GET|HEAD /devisInputs/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Devis_input $devisInput */
        $devisInput = $this->devisInputRepository->find($id);

        if (empty($devisInput)) {
            return $this->sendError('Devis Input not found');
        }

        return $this->sendResponse($devisInput->toArray(), 'Devis Input retrieved successfully');
    }

    /**
     * Update the specified Devis_input in storage.
     * PUT/PATCH /devisInputs/{id}
     *
     * @param int $id
     * @param UpdateDevis_inputAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevis_inputAPIRequest $request)
    {
        $input = $request->all();

        /** @var Devis_input $devisInput */
        $devisInput = $this->devisInputRepository->find($id);

        if (empty($devisInput)) {
            return $this->sendError('Devis Input not found');
        }

        $devisInput = $this->devisInputRepository->update($input, $id);

        return $this->sendResponse($devisInput->toArray(), 'Devis_input updated successfully');
    }

    /**
     * Remove the specified Devis_input from storage.
     * DELETE /devisInputs/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Devis_input $devisInput */
        $devisInput = $this->devisInputRepository->find($id);

        if (empty($devisInput)) {
            return $this->sendError('Devis Input not found');
        }

        $devisInput->delete();

        return $this->sendSuccess('Devis Input deleted successfully');
    }
}
