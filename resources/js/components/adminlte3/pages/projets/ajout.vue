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
                <!-- <form action="" > -->
                    <div class="form-group">
                        <input type="text" name="client_id" id="client_id" v-model="client_id" class="form-control" value="0" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="nom" v-model="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" id="description" v-model="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" id="adresse" v-model="adresse" class="form-control">
                    </div>
                    <div class="form-group">
                        <select v-model="categorie" id="" class="form-control">
                            <option value="cat1">cat1</option>
                        </select>
                        </div>
                    <div class="form-group">
                        <select v-model="statut" id="" class="form-control">
                            <option value="Nouveau">Nouveau</option>
                            <option value="En cours">En cours</option>
                            <option value="En pause">En pause</option>
                            <option value="Terminé">Terminé</option>
                        </select>
                        </div>
                    <button type="submit" class="btn btn-primary" @click="store">Valider</button>
                <!-- </form> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                client_id: '0',
                nom:'',
                description:'',
                adresse:'',
                categorie:'',
                statut:'',
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        methods: {
            store(){
                axios.post('http://localhost:8000/api/projets',{
                    client_id: this.client_id,
                    nom: this.nom,
                    description: this.description,
                    adresse: this.adresse,
                    categorie: this.categorie,
                    statut: this.statut,
                })
                .then(response => console.log(response))
                .catch(error => console.log(error));
            },
        }
    }
</script>
