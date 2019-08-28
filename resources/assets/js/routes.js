import Home from './components/HomeComponent';
import About from './components/AboutComponent';

export default {
    mode:'history',

    routes: [
        {
            path: '/',
            component:Home,
            name: 'home'
        },
        {
            path: '/about',
            component:About,
            name: 'about'
        },
    ]
}