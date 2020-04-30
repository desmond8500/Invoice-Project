<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ajouter un contact
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="">Client</label>
                    <select v-model="contact.projet_id" class="form-control">
                        <option v-for="client in clients.data" :key="client.id" >{{ client.nom}} </option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Référence</label>
                        <input type="text" name="nom" id="nom" v-model="contact.reference" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Status</label>
                        <select v-model="contact.statut" id="" class="form-control">
                            <option value="Nouveau">Nouveau</option>
                            <option value="En cours">En cours</option>
                            <option value="En pause">En pause</option>
                            <option value="Terminé">Terminé</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Catégorie</label>
                        <select v-model="contact.categorie" id="" class="form-control">
                            <option value="cat1">cat1</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Description</label>
                        <textarea v-model="contact.description" cols="10" rows="2" class="form-control"></textarea>
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
                projets: {},
                contact:{
                    client_id: '',
                    prenom: '',
                    nom: '',
                    tel: '',
                    email: '',
                    fonction: '',
                    description: ''
                },
                dismiss: true
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        created(){
                axios.get('http://localhost:8000/api/projets')
                .then(response => {
                    this.projets = response.data;
                    console.log(response.data);
                    })
                .catch(error => console.log(error)
                );
        },
        methods: {

            store(){
                axios.post('http://localhost:8000/api/contact',{
                    projet_id:      this.contact.projet_id,
                    reference:      this.contact.reference,
                    description:    this.contact.description,
                    statut:         this.contact.statut,
                    body:           '0',
                })
                .then(response => console.log(response))
                .catch(error => console.log(error));
                this.dismiss = false;
            },
        }
    }
</script>
