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
                    <select v-model="contact.client_id" class="form-control">
                        <option v-for="client in clients.data" :key="client.id" >{{ client.nom}} </option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Prénom</label>
                        <input type="text" name="prenom" id="prenom" v-model="contact.prenom" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="nom" v-model="contact.nom" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Téléphone</label>
                        <input type="text" name="tel" id="tel" v-model="contact.tel" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" v-model="contact.email" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Fonction</label>
                        <input type="text" name="fonction" id="fonction" v-model="contact.fonction" class="form-control">
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
                clients: {},
                contact:{
                    client_id: '',
                    prenom: '',
                    nom: '',
                    tel: '',
                    email: '',
                    fonction: '',
                    description: ''
                },
                dismiss: true,
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        created(){
                axios.get(this.serverlink+'/api/clients')
                .then(response => {
                    this.clients = response.data;
                    console.log(response.data);
                    })
                .catch(error => console.log(error)
                );
        },
        methods: {

            store(){
                axios.post(this.serverlink+'/api/contacts',{
                    client_id:  this.contact.client_id,
                    prenom:     this.contact.prenom,
                    nom:        this.contact.nom,
                    tel:        this.contact.tel,
                    email:      this.contact.email,
                    function:   this.contact.function,
                    description:this.contact.description,
                })
                .then(response => this.$emit('task-added',response))
                .then(response => console.log(response))
                .catch(error => console.log(error));
                this.dismiss = false;
            },
        }
    }
</script>
