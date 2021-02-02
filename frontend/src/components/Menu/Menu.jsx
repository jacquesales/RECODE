import React from 'react';
import {Link} from 'react-router-dom';

import { Nav, Navbar }from 'react-bootstrap';
import './Menu.css';

const links = [
    { route: "/", label: "Home"},
    { route: "/products", label: "Nossos Produtos"},
    { route: "/stores", label: "Nossas lojas"},
    { route: "/contact", label: "Fale Conosco"},
];


export class Menu extends React.Component {
    renderLink = () => {
        return links.map( link =>
            <Link key={link.route} className="nav-link" to={link.route}>
                {link.label}
            </Link>
        )
    }

    render() {
        return (            
                <Navbar className="d-flex justify-content-center menu-main">                                        
                    <Nav.Link>
                    { this.renderLink() }
                    </Nav.Link>                     
                </Navbar>                   
        );
    }
};

export default Menu;