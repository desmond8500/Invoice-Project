<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProject">
            <i class="fa fa-edit"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="editProject" tabindex="-1" role="dialog" aria-labelledby="editProjectLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectLabel">Editer un Projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="form-group">
                        <input type="text" name="compte_id" id="compte_id" v-model="client.compte_id" class="form-control" value="0" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="nom" v-model="client.nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" id="description" v-model="client.description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" id="adresse" v-model="client.adresse" class="form-control">
                    </div>
                <!-- </form> -->
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
                compte_id: '0',
                nom:'',
                description:'',
                adresse:'',
                dismiss: true,
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        props: {
            client: {
                id: '',
                compte_id: '',
                nom: '',
                description: '',
                adresse: '',
            }
        },
        methods: {
            store(){
                axios.post(this.serverlink+'/api/clients/'+ this.client.id,{
                    compte_id:      this.client.compte_id,
                    nom:            this.client.nom,
                    description:    this.client.description,
                    adresse:        this.client.adresse
                })
                .then(response => console.log(response))
                .then(response => this.$emit('task-added',response))
                .catch(error => console.log(error));
                this.dismiss = false;
            },
        }
    }
</script>
