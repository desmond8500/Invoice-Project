<template>
    <div>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProject">
            <i class="fa fa-trash"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="deleteProject" tabindex="-1" role="dialog" aria-labelledby="deleteProjectLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProjectLabel">Supprimmer un projet un Projet {{ id }} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading"></h4>
                  <p>Etes vous sur de vouloir supprimer le projet ?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="del(id)"  v-if="dismiss">Valider</button>
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
        methods: {
            del(id){
                axios.delete(this.serverlink+'/api/clients/'+id)
                .then(response => {
                        this.clients = response.data;
                    })
                .then(response => this.$emit('task-added',response))
                .catch(error => console.log(error));
                this.dismiss = false;
            }
        },
        props: ['id']
    }
</script>
