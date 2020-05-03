<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProjet_categorieAPIRequest;
use App\Http\Requests\API\UpdateProjet_categorieAPIRequest;
use App\Models\Projet_categorie;
use App\Repositories\Projet_categorieRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Projet_categorieController
 * @package App\Http\Controllers\API
 */

class Projet_categorieAPIController extends AppBaseController
{
    /** @var  Projet_categorieRepository */
    private $projetCategorieRepository;

    public function __construct(Projet_categorieRepository $projetCategorieRepo)
    {
        $this->projetCategorieRepository = $projetCategorieRepo;
    }

    /**
     * Display a listing of the Projet_categorie.
     * GET|HEAD /projetCategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $projetCategories = $this->projetCategorieRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($projetCategories->toArray(), 'Projet Categories retrieved successfully');
    }

    /**
     * Store a newly created Projet_categorie in storage.
     * POST /projetCategories
     *
     * @param CreateProjet_categorieAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProjet_categorieAPIRequest $request)
    {
        $input = $request->all();

        $projetCategorie = $this->projetCategorieRepository->create($input);

        return $this->sendResponse($projetCategorie->toArray(), 'Projet Categorie saved successfully');
    }

    /**
     * Display the specified Projet_categorie.
     * GET|HEAD /projetCategories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Projet_categorie $projetCategorie */
        $projetCategorie = $this->projetCategorieRepository->find($id);

        if (empty($projetCategorie)) {
            return $this->sendError('Projet Categorie not found');
        }

        return $this->sendResponse($projetCategorie->toArray(), 'Projet Categorie retrieved successfully');
    }

    /**
     * Update the specified Projet_categorie in storage.
     * PUT/PATCH /projetCategories/{id}
     *
     * @param int $id
     * @param UpdateProjet_categorieAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjet_categorieAPIRequest $request)
    {
        $input = $request->all();

        /** @var Projet_categorie $projetCategorie */
        $projetCategorie = $this->projetCategorieRepository->find($id);

        if (empty($projetCategorie)) {
            return $this->sendError('Projet Categorie not found');
        }

        $projetCategorie = $this->projetCategorieRepository->update($input, $id);

        return $this->sendResponse($projetCategorie->toArray(), 'Projet_categorie updated successfully');
    }

    /**
     * Remove the specified Projet_categorie from storage.
     * DELETE /projetCategories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Projet_categorie $projetCategorie */
        $projetCategorie = $this->projetCategorieRepository->find($id);

        if (empty($projetCategorie)) {
            return $this->sendError('Projet Categorie not found');
        }

        $projetCategorie->delete();

        return $this->sendSuccess('Projet Categorie deleted successfully');
    }
}
