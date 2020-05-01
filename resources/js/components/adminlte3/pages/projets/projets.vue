  <template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Projets</h1>
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
          <projet-add @task-added="refresh"></projet-add>
          <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="projet in projets.data" :key="projet.id">
                    <th scope="row">{{ projet.id }}</th>
                    <td>{{ projet.nom }}</td>
                    <td>{{ projet.description }}</td>
                    <td>{{ projet.categorie }}</td>
                    <td>{{ projet.staut }}</td>
                    <td>
                        <!-- <projet-edit style="float:left" class="mr-2" :projet="projet"></projet-edit>
                        <projet-delete></projet-delete> -->
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
                projets: {},
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
        },
        created(){
            axios.get(this.serverlink+'/api/projets')
            .then(response => {
                this.projets = response.data;
                console.log(response.data);
                })
            .catch(error => console.log(error)
            );
        },
        methods: {
            getResults(page = 1) {
                axios.get(this.serverlink+'/api/projets?page=' + page)
                    .then(response => {
                        this.projets = response.data;
                    });
            },
            refresh(projets){
                this.getResults();
            }
        }
    }
</script>
