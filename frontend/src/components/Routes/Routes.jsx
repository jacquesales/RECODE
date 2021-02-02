import React from 'react';
import { BrowserRouter , Route } from 'react-router-dom';

import Home  from '../../views/Home';
import Products from '../../views/Products';
import Stores from '../../views/Stores';
import Contact from '../../views/Contact';


const Routes = () => (
       
        <BrowserRouter>            
                <Route exact path="/" component={Home} />
                <Route path="/products" component={Products} />
                <Route path="/stores" component={Stores} />
                <Route path="/contact" component={Contact} />                   
        </BrowserRouter>
        
);

export default Routes;