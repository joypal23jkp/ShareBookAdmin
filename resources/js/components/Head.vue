<template>
         <div class="header-wrapper">
             <nav class="navbar px-5">
                 <div class="header-logo-wrapper">
                     <!-- Just an image -->
                         <router-link class="navbar-brand" :to="{ name: 'home' }">
                             <img class="header-logo-img" src = "../images/SBH.png" alt="logo"/>
                         </router-link>
                 </div>
                 <div class="search-wrapper ">
                     <form class="form-inline d-flex">
                         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                         <div class="dropdown">
                             <button class="btn  dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Book Category
                             </button>
                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Profile</a>
                                 <a class="dropdown-item" href="#">Logout</a>
                                 <a class="dropdown-item" href="#">Settings</a>
                             </div>
                         </div>
                         <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                     </form>
                 </div>
                 <div class="dropdown dropdown-menu-left">
                     <button class="btn dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Joy Kumar Pal
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <router-link class="dropdown-item" to="/profile">Profile</router-link>
                         <router-link class="dropdown-item" :to="{ name: 'add-book' }">Add Book</router-link>
                         <router-link class="dropdown-item" to="/register">Create New Account</router-link>
                         <router-link class="dropdown-item" to="/login">Logout</router-link>
                     </div>
                 </div>
             </nav>
         </div>
</template>
<style scoped>
    .header-logo-img{
        width: 100px;
        background-color: #ffffff;
    }
    .header-wrapper {
        position: fixed;
        width: 100%;
        height: 68px;
        background-color: white;
        border-bottom: 1px solid #a4acfc;
        z-index: 1;
    }
    input{
        border-radius: 45px;
    }
    .btn{
        border-radius: 45px;
    }
</style>
