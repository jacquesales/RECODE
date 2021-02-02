import React from 'react';
import ReactDOM from 'react-dom';
/* import { Provider } from 'react-redux'; */

import Root from './components/Routes/Root';
/* import { Store } from './store/index'; */

import 'bootstrap/dist/css/bootstrap.min.css';
import './assets/styles/global.css';


ReactDOM.render(

  // Envolver o componente do aplicativo com o componente Provider que irá passar o acesso aos dados do Store para seus componentes filhos

  
    
    <Root />,
    
  document.getElementById('root')
);