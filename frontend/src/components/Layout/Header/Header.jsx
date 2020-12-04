import React from 'react';

import Menu from './Menu';
import Login from './Login';

import Navbar from 'react-bootstrap/Navbar';
import './Header.css';


function Header () {

    return (
        <>
            <Navbar expand="lg" className="d-flex justify-content-between menu-top shadow px-2 mb-1 rounded">
                <div className="br">
                    <Navbar.Text>
                        <img
                            alt=""
                            src="/images/brasil.svg"
                            className="d-inline-block"
                        />{' '}
                        <span className="language">BR</span>        
                    </Navbar.Text>
                </div>

                <div>
                    <p className="brand">Full Stack Eletro</p>
                </div>            

                <div className="d-flex justify-content-end">
                    <img className="img-top" src="../images/cadeado-aberto.svg" alt="Cadeado aberto"/>
                    <a className="link-top"><Login/></a>

                    <img className="img-top" src="../images/chave.svg" alt="Cadeado aberto"/>
                    <a className="link-top" href="#">Criar Conta</a>

                    <img className="img-top" src="../images/coracao.svg" alt="Cadeado aberto"/>
                    <a className="link-top" href="#">Minha lista</a>
                </div>
            </Navbar>

                
            <div className="navbar d-flex justify-content-center">
                <a className="navbar-brand" href="#">
                    <img src="../images/logotipo.svg" alt="Logotipo Full Stack Eletro"/>
                </a>

                <div className="input-group mb-3">
                    <input type="text" className="form-control" 
                    placeholder="Procure o produto aqui..." 
                    aria-label="Procure o produto aqui" aria-describedby="button-addon2"/>

                    <div className="input-group-append">
                        <button type="button" className="btn-src">
                            <img src="../images/procurar.svg" alt="pesquisar"/>
                        </button>
                    </div>                
                </div>
            </div>

            <Menu/>          
        </>
    );
};

export default Header;