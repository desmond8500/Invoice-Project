  <template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contacts</h1>
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
          <contact-add @task-added="refresh"></contact-add>

          <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="contact in contacts.data" :key="contact.id">
                    <th scope="row">{{ contact.id }}</th>
                    <td>{{ contact.prenom }}</td>
                    <td>{{ contact.nom }}</td>
                    <td>{{ contact.tel }}</td>
                    <td>{{ contact.mail }}</td>
                    <td>
                        <!-- <contact-edit style="float:left" class="mr-2" :contact="contact"></contact-edit>
                        <contact-delete></contact-delete> -->
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
                contacts: {},
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
        },
        created(){
            axios.get(this.serverlink+'/api/contacts')
                .then(response => {
                    this.contacts = response.data;
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
                axios.get(this.serverlink+'/api/contacts?page=' + page)
                    .then(response => {
                        this.contacts = response.data;
                    });
            },
            refresh(contacts){
                this.getResults();
            }
        }
    }
</script>
