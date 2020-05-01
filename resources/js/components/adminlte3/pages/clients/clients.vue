  <template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Clients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Informations</h4>
          <p>Les boutons d'édition et de suppression ne sont pas encore fonctionnels</p>
        </div>

        <client-add @task-added="refresh"></client-add>

        <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="client in clients.data" :key="client.id">
                    <th scope="row">{{ client.id }}</th>
                    <td>{{ client.nom }}</td>
                    <td>{{ client.description }}</td>
                    <td>{{ client.adresse }}</td>
                    <td>
                        <client-edit style="float:left" class="mr-2" :client="client"></client-edit>
                        <!-- <client-delete :id="client.id" @task-added="refresh"></client-delete> -->
                        <button class="btn btn-danger" @click="del(client.id)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.getResults();
        },
        data(){
            return {
                clients: {},
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
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
            getResults(page = 1) {
                axios.get(this.serverlink+'/api/clients?page=' + page)
                    .then(response => {
                        this.clients = response.data;
                    });
            },
            refresh(clients){
                this.getResults();
            },
            del(id){
                axios.delete(this.serverlink+'/api/clients/'+id)
                .then(response => {
                        this.clients = response.data;
                    })
                .then(response => this.$emit('task-added',response))
                .catch(error => console.log(error));
                this.getResults();
            }
        }
    }
</script>
