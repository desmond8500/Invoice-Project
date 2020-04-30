  <template>
    <div class="content-wrapper">
    <adminlte-bread></adminlte-bread>

    <div class="content">
      <div class="container-fluid">
        <!-- =============================================================== -->

        <div>
            <h1>Bienvenue</h1>
            <ul>
                <li v-for="user in users.data" :key="user.id">
                    {{ user.name }}
                </li>
            </ul>
            <pagination :data="users" @pagination-change-page="getResults"></pagination>
        </div>


        <!-- =============================================================== -->
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data(){
            return {
                users: {}
            }
        },
        created(){
            axios.get('http://localhost:8000/api/users')
                .then(response => {
                    this.users = response.data;
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
                axios.get('http://localhost:8000/api/users?page=' + page)
                    .then(response => {
                        this.users = response.data;
                    });
            }
        }
    }
</script>
