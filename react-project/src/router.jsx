import {createBrowserRouter} from 'react-router-dom';
import Login from './views/Login.jsx';
import Register from './views/Register.jsx';
import DefaultLayout from './components/DefaultLayout.jsx';
import GuestLayout from './components/GuestLayout.jsx';
import User from './views/User.jsx';

const router =  createBrowserRouter ([
    {
        path: '/',
        element: <DefaultLayout />,
        children:[
            {
            path: '/user',
            element: <User />,
            },
        ]
    },
    {
        path: '/',
        element: <GuestLayout />,
        children:[
            {
                path: '/login',
                element: <Login />,
            },
            {
                path: '/register',
                element: <Register />,
            },
        ]
    },
    
]);


export default router;