<template>
    <div id="app">
<!--        <div class="d-flex">-->
<!--            <router-link :to="{ name: 'login' }" class="m-2">Login</router-link>-->
<!--            <router-link :to="{ name: 'register' }" class="m-2">Register</router-link>-->
<!--            <router-link :to="{ name: 'reset-pass' }" class="m-2">Reset Password</router-link>-->
<!--            <router-link :to="{ name: 'home' }" class="m-2">  Home</router-link>-->
<!--        </div>-->
        <header-component></header-component>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>
</template>
