
import Home from '../Views/Home.vue';
import AddBook from '../Views/AddBook.vue';
import ViewBook from '../Views/ViewBook.vue';
import Profile from '../Views/ServiceHolderProfile.vue';
import Login from '../Views/Auth/Login.vue';
import Register from '../Views/Auth/Register.vue';
import ResetPassword from '../Views/Auth/ResetPassword.vue';

const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/login',  name: 'login',  component: Login },
    { path: '/register',  name: 'register',  component: Register },
    { path: '/reset-pass',  name: 'reset-pass',  component: ResetPassword },
    { path: '/view/book',  name: 'view-book',  component: ViewBook },
    { path: '/add/book',  name: 'add-book',  component: AddBook },
    { path: '/sdfsdfsdf',  name: 'profile',  component: Profile },
]

export default routes
