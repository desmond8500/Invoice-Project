  <template>
    <div class="content-wrapper">
    <adminlte-bread></adminlte-bread>

    <div class="content">
      <div class="container-fluid">
        <!-- =============================================================== -->
        <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <!-- <th scope="col">Adresse</th> -->
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <!-- <td>{{ user.adresse }}</td> -->
                    <td>
                        <!-- <client-edit style="float:left" class="mr-2" :client="client"></client-edit>
                        <client-delete></client-delete> -->
                    </td>
                </tr>
            </tbody>
        </table>
        <pagination :data="users" @pagination-change-page="getResults"></pagination>

        <!-- =============================================================== -->
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        data(){
            return {
                users: {},
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
        },
        created(){
            axios.get(this.serverlink+'/api/users')
                .then(response => {
                    this.users = response.data;
                    console.log(response.data);
                    })
                .catch(error => console.log(error)
                );
        },
        methods: {
            getResults(page = 1) {
                axios.get(this.serverlink+'/api/users?page=' + page)
                    .then(response => {
                        this.users = response.data;
                    });
            },
            refresh(users){
                this.getResults();
            }
        }
    }
</script>
