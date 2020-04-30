<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Ajouter un client
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form action="" > -->
                    <div class="form-group">
                        <input type="text" name="compte_id" id="compte_id" v-model="compte_id" class="form-control" value="0" hidden>
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
                dismiss: true
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        methods: {
            store(){
                axios.post('http://localhost:8000/api/clients',{
                    compte_id:      this.compte_id,
                    nom:            this.nom,
                    description:    this.description,
                    adresse:        this.adresse
                })
                .then(response => console.log(response))
                .then(response => this.$emit('task-added',response))
                .catch(error => console.log(error));
                this.dismiss = false;
            },
        }
    }
</script>
