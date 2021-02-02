import React from 'react';

import './Footer.css';
import Payment from '../../../assets/images/general/formas-pagamento.jpg';


const Footer = () => (

    <footer className="container text-center mt-5">    
        <img src={Payment} alt="Formas de pagamento"/>
        <br/>
        <p className="footer-text">&copy; Recode Pro</p>           
    </footer>

);

export default Footer;