<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Ajouter un projet
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="">Client</label>
                    <select v-model="projet.client_id" class="form-control">
                        <option v-for="myclient in clients.data" :key="myclient.id" >{{ myclient.nom}} </option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="nom" v-model="projet.nom" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Status</label>
                        <select v-model="projet.statut" id="" class="form-control">
                            <option value="Nouveau">Nouveau</option>
                            <option value="En cours">En cours</option>
                            <option value="En pause">En pause</option>
                            <option value="Terminé">Terminé</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Catégorie</label>
                        <select v-model="projet.categorie" id="" class="form-control">
                            <option value="cat1">cat1</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Description</label>
                        <textarea v-model="projet.description" cols="10" rows="2" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" @click="store" v-if="dismiss">Valider</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                clients: {},
                projet:{
                    client_id: '',
                    nom: '',
                    description: '',
                    categorie: '',
                    statut: ''
                },
                dismiss: true
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        created(){
                axios.get('http://localhost:8000/api/clients')
                .then(response => {
                    this.clients = response.data;
                    console.log(response.data);
                    })
                .catch(error => console.log(error)
                );
        },
        methods: {

            store(){
                axios.post('http://localhost:8000/api/projets',{
                    client_id:      this.projet.client_id,
                    nom:            this.projet.nom,
                    description:    this.projet.description,
                    adresse:        this.projet.adresse,
                    categorie:      this.projet.categorie,
                    statut:         this.projet.statut,
                })
                .then(response => console.log(response))
                .catch(error => console.log(error));
                this.dismiss = false;
            },
        }
    }
</script>
