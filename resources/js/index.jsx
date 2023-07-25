import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import './component/index.css';
import App from './component/App';
import { BrowserRouter,Route,Routes } from 'react-router-dom';
import Home from './component/Home';
import Welcome from './component/Welcome';


//import 'bootstrap/dist/css/bootstrap.css';


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <BrowserRouter>
    <Routes>
      <Route path='/home' element={<Home/>} />
      <Route path='/auth' element={<App/>} />
      <Route path='/' element={<Welcome/>} />

    </Routes>

  </BrowserRouter>
);
