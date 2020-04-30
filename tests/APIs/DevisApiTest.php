<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Devis;

class DevisApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_devis()
    {
        $devis = factory(Devis::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/devis', $devis
        );

        $this->assertApiResponse($devis);
    }

    /**
     * @test
     */
    public function test_read_devis()
    {
        $devis = factory(Devis::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/devis/'.$devis->id
        );

        $this->assertApiResponse($devis->toArray());
    }

    /**
     * @test
     */
    public function test_update_devis()
    {
        $devis = factory(Devis::class)->create();
        $editedDevis = factory(Devis::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/devis/'.$devis->id,
            $editedDevis
        );

        $this->assertApiResponse($editedDevis);
    }

    /**
     * @test
     */
    public function test_delete_devis()
    {
        $devis = factory(Devis::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/devis/'.$devis->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/devis/'.$devis->id
        );

        $this->response->assertStatus(404);
    }
}
