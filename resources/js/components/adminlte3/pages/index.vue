<template>
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
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
            <p>
                La mise à jour des modèles est en cours
            </p>
          </div>


        <h3>Routes</h3>
        <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">route</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="route in routes" :key="route.id">
                    <th scope="row">{{ route.id }}</th>
                    <td>{{ route.name }}</td>
                    <td>{{ route.route }}</td>
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
                message: "hello",
                routes: [
                    { id: 1, name: "Clients", route: "/api/clients"},
                    { id: 2, name: "Projets", route: "/api/projets"},
                    { id: 3, name: "Devis", route: "/api/devis"},
                    { id: 4, name: "Contacts", route: "/api/contacts"},
                ],
                locallink: 'http://localhost:8000',
                serverlink: 'http://invoicing.yonkou.info'
            }
        }
    }
</script>
