import React from 'react';
import { BrowserRouter , Route } from 'react-router-dom';

import Home  from '../Home/Home';
import Products from '../Products/Products';
import Stores from '../Stores/Stores';
import Contact from '../Contact/Contact.jsx';


const Routes = () => (
       
        <BrowserRouter>            
                <Route exact path="/" component={Home} />
                <Route path="/products" component={Products} />
                <Route path="/stores" component={Stores} />
                <Route path="/contact" component={Contact} />                   
        </BrowserRouter>
        
);

export default Routes;