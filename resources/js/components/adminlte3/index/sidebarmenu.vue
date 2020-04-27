<template>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item" v-for="menu in menus" :key="menu.name">
            <router-link to=''  class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ menu.name }}
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </router-link>
          </li>
        </ul>
      </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                menus: [
                    { name: 'Comptes', route: 'comptes'},
                    { name: 'Clients', route: 'comptes'},
                    { name: 'Projets', route: 'comptes'},
                    { name: 'Devis', route: 'comptes'},
                    { name: 'Utilisateurs', route: 'comptes'},
                    { name: 'Contacts', route: 'comptes'},
                ]
            }
        }
    }
</script>
