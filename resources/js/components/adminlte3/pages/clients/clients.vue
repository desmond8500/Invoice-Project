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
                        <client-delete></client-delete>
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
        data(){
            return {
                clients: {}
            }
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
        mounted() {
            console.log('Component mounted.');
            this.getResults();
        },
        methods: {
            getResults(page = 1) {
                axios.get('http://localhost:8000/api/clients?page=' + page)
                    .then(response => {
                        this.clients = response.data;
                    });
            },
            refresh(clients){
                this.getResults();
            }
        }
    }
</script>
