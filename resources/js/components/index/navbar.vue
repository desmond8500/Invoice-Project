<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
            <a class="navbar-brand" href="/">Invoices</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <div class="dropdown d-none d-sm-block" v-for="menu in menus" :key="menu.name">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{menu.name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a v-for="submenu in menu.submenus" :key="submenu.name"  class="dropdown-item"> {{ submenu.name }}</a>
                        </div>
                    </li>
                </div>
            </ul>


            <div class="form-inline my-2 my-lg-0">

            </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Navbar mounted.')
        },
        data(){
            return {
                menus: [
                    {
                        name: "Clients",
                        route: "clients",
                        submenus: [
                            { name: "Liste de clients", route: "" }
                        ]
                    },
                    {
                        name: "Projets",
                        route: "projets",
                        submenus: [
                            { name: "Projets en cours", route: "" }
                        ]
                    },
                    {
                        name: "Devis",
                        route: "devis",
                        submenus: [
                            { name: "Devis en cours", route: "" }
                        ]
                    }
                ]
            }
        }
    }
</script>
