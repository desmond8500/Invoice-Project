<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjet_categorieRequest;
use App\Http\Requests\UpdateProjet_categorieRequest;
use App\Repositories\Projet_categorieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Projet_categorieController extends AppBaseController
{
    /** @var  Projet_categorieRepository */
    private $projetCategorieRepository;

    public function __construct(Projet_categorieRepository $projetCategorieRepo)
    {
        $this->projetCategorieRepository = $projetCategorieRepo;
    }

    /**
     * Display a listing of the Projet_categorie.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $projetCategories = $this->projetCategorieRepository->paginate(10);

        return view('projet_categories.index')
            ->with('projetCategories', $projetCategories);
    }

    /**
     * Show the form for creating a new Projet_categorie.
     *
     * @return Response
     */
    public function create()
    {
        return view('projet_categories.create');
    }

    /**
     * Store a newly created Projet_categorie in storage.
     *
     * @param CreateProjet_categorieRequest $request
     *
     * @return Response
     */
    public function store(CreateProjet_categorieRequest $request)
    {
        $input = $request->all();

        $projetCategorie = $this->projetCategorieRepository->create($input);

        Flash::success('Projet Categorie saved successfully.');

        return redirect(route('projetCategories.index'));
    }

    /**
     * Display the specified Projet_categorie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projetCategorie = $this->projetCategorieRepository->find($id);

        if (empty($projetCategorie)) {
            Flash::error('Projet Categorie not found');

            return redirect(route('projetCategories.index'));
        }

        return view('projet_categories.show')->with('projetCategorie', $projetCategorie);
    }

    /**
     * Show the form for editing the specified Projet_categorie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projetCategorie = $this->projetCategorieRepository->find($id);

        if (empty($projetCategorie)) {
            Flash::error('Projet Categorie not found');

            return redirect(route('projetCategories.index'));
        }

        return view('projet_categories.edit')->with('projetCategorie', $projetCategorie);
    }

    /**
     * Update the specified Projet_categorie in storage.
     *
     * @param int $id
     * @param UpdateProjet_categorieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjet_categorieRequest $request)
    {
        $projetCategorie = $this->projetCategorieRepository->find($id);

        if (empty($projetCategorie)) {
            Flash::error('Projet Categorie not found');

            return redirect(route('projetCategories.index'));
        }

        $projetCategorie = $this->projetCategorieRepository->update($request->all(), $id);

        Flash::success('Projet Categorie updated successfully.');

        return redirect(route('projetCategories.index'));
    }

    /**
     * Remove the specified Projet_categorie from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projetCategorie = $this->projetCategorieRepository->find($id);

        if (empty($projetCategorie)) {
            Flash::error('Projet Categorie not found');

            return redirect(route('projetCategories.index'));
        }

        $this->projetCategorieRepository->delete($id);

        Flash::success('Projet Categorie deleted successfully.');

        return redirect(route('projetCategories.index'));
    }
}
