  <template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Devis</h1>
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
          <devis-add @task-added="refresh"></devis-add>

          <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Réference</th>
                    <th scope="col">Description</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="devis in deviss.data" :key="devis.id">
                    <th scope="row">{{ devis.id }}</th>
                    <td>{{ devis.reference }}</td>
                    <td>{{ devis.description }}</td>
                    <td>{{ devis.statut }}</td>
                    <td>
                        <!-- <client-edit style="float:left" class="mr-2" :client="client"></client-edit>
                        <client-delete></client-delete> -->
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
            console.log('Component mounted.')
        },
         data(){
            return {
                deviss: {},
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
        },
        created(){
            axios.get(this.serverlink+'/api/devis')
            .then(response => {
                this.deviss = response.data;
                console.log(response.data);
                })
            .catch(error => console.log(error)
            );
        },
        methods: {
            getResults(page = 1) {
                axios.get(this.serverlink+'/api/devis?page=' + page)
                    .then(response => {
                        this.deviss = response.data;
                    });
            },
            refresh(deviss){
                this.getResults();
            }
        }

    }
</script>
