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
          <client-add @task-added="refresh"></client-add>

           <div>
            <h1>Bienvenue</h1>
            <ul>
                <li v-for="client in clients.data" :key="client.id">
                    {{ client.nom }}
                </li>
            </ul>
            <!-- <pagination :data="clients" @pagination-change-page="getResults"></pagination> -->
        </div>

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
