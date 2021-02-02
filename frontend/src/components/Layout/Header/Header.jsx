import React from 'react';
import {Link} from 'react-router-dom';

import Navbar from 'react-bootstrap/Navbar';
import './Header.css';

import Menu from '../../Menu/Menu';
import Login from '../../Login/Login';

import Language from '../../../assets/images/general/brasil.svg';
import Padlock from '../../../assets/images/general/cadeado-aberto.svg';
import Chave from '../../../assets/images/general/chave.svg';
import Heart from '../../../assets/images/general/coracao.svg';
import Logo from '../../../assets/images/general/logotipo.svg'; 
import Search from '../../../assets/images/general/procurar.svg';


function Header () {

    return (
        <>
            <Navbar expand="lg" className="d-flex justify-content-around menu-top shadow px-2 mb-1 rounded">
                <div className="br">
                    <Navbar.Text>
                        <img
                            alt="Bandeira do Brasil"
                            src={Language}
                            className="d-inline-block"
                        />{' '}
                        <span className="language">BR</span>        
                    </Navbar.Text>
                </div>

                <div>
                    <p className="brand text-center">Full Stack Eletro</p>
                </div>            

                <div className="d-flex justify-content-end">
                    <img className="img-top" src={Padlock} alt="Cadeado aberto"/>
                    <a className="link-top"><Login/></a>

                    <img className="img-top" src={Chave} alt="Chave"/>
                    <Link as={Link} to = "/" className="link-top">
                        Criar Conta                        
                    </Link>

                    <img className="img-top" src={Heart} alt="Cadeado aberto"/>
                    <Link as={Link} to = "/" className="link-top">
                        Minha lista                     
                    </Link>                    
                </div>
            </Navbar>

                
            <div className="navbar d-flex justify-content-center">

                <Link as={Link} to = "/" className="navbar-brand">
                    <img src={Logo} alt="Logotipo Full Stack Eletro"/>                
                </Link>               

                <div className="input-group mb-3">
                    <input type="text" className="form-control" 
                    placeholder="Procure o produto aqui..." aria-describedby="button-addon2"/>

                    <div className="input-group-append">
                        <button type="button" className="btn-src">
                            <img src={Search} alt="pesquisar"/>
                        </button>
                    </div>                
                </div>
            </div>

            <Menu/>          
        </>
    );
};

export default Header;