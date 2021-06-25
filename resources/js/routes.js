import login from "./components/auth/login";
import register from "./components/auth/register";
import forget from "./components/auth/forget";


export const routes = [
    {
        path:'/',
        component: login,
        name: '/'
    },

    {
        path:'/register',
        component: register,
        name: 'register'
    },

    {
        path:'/forget',
        component: forget,
        name: 'forget'
    }
]
