<?php namespace Tests\Repositories;

use App\Models\Devis;
use App\Repositories\DevisRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class DevisRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var DevisRepository
     */
    protected $devisRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->devisRepo = \App::make(DevisRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_devis()
    {
        $devis = factory(Devis::class)->make()->toArray();

        $createdDevis = $this->devisRepo->create($devis);

        $createdDevis = $createdDevis->toArray();
        $this->assertArrayHasKey('id', $createdDevis);
        $this->assertNotNull($createdDevis['id'], 'Created Devis must have id specified');
        $this->assertNotNull(Devis::find($createdDevis['id']), 'Devis with given id must be in DB');
        $this->assertModelData($devis, $createdDevis);
    }

    /**
     * @test read
     */
    public function test_read_devis()
    {
        $devis = factory(Devis::class)->create();

        $dbDevis = $this->devisRepo->find($devis->id);

        $dbDevis = $dbDevis->toArray();
        $this->assertModelData($devis->toArray(), $dbDevis);
    }

    /**
     * @test update
     */
    public function test_update_devis()
    {
        $devis = factory(Devis::class)->create();
        $fakeDevis = factory(Devis::class)->make()->toArray();

        $updatedDevis = $this->devisRepo->update($fakeDevis, $devis->id);

        $this->assertModelData($fakeDevis, $updatedDevis->toArray());
        $dbDevis = $this->devisRepo->find($devis->id);
        $this->assertModelData($fakeDevis, $dbDevis->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_devis()
    {
        $devis = factory(Devis::class)->create();

        $resp = $this->devisRepo->delete($devis->id);

        $this->assertTrue($resp);
        $this->assertNull(Devis::find($devis->id), 'Devis should not exist in DB');
    }
}
