<template>
    <div class="profile-container container">
        <div class="profile-header">
            <div class="card text-center">
                <div class="card-body my-5">
                    <img src="../images/SBH.png" alt="p-image">
                    <h5 class="card-title py-3 font-weight-bold">Mr. Potter</h5>
                    <p class="card-text">potter@gmail.com</p>
                    <p class="card-text">Phone Number : 0192xxxxxxxxx</p>
                    <router-link to="book/list" class="btn btn-primary">Book List</router-link>
                    <router-link to="add/book" class="btn btn-primary">Edit profile</router-link>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .profile-container{
        height: 100vh;
    }
    .profile-header{
        position: relative;
        top: 30%;
    }
   .profile-header img{
        width: 100px;
        height: 100px;
        border-radius: 50px;
        border: 2px solid #2b3b9e;
    }
</style>
