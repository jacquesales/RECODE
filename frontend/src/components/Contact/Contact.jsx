import React from 'react';
import { useEffect } from 'react';  

import App from '../Layout/App/App';
import Call from './Call';

import {Card, ListGroup} from 'react-bootstrap';
import './Contact.css';


export default () =>
{

    const [message, setMessage] = React.useState([]);
    const [render, setRender] = React.useState(false);
    /* const [msg, setMsg] = React.useState(false); */


    useEffect(async () => {
        const url = "http://localhost/RECODE/backend/Messages.php";
        const response = await fetch(url);
        setMessage(await response.json());
    }, [render]);

    async function registerMessage(event) {
        event.preventDefault();


        let formData = new FormData(event.target);

        const url = "http://localhost/RECODE/backend/MainMessage.php";

        /* fetch(url, {
            method: "POST",
            body: formData
        }).then((response) => response.json()).then((dados) => {
            setRender(!render);
            setMsg(dados);

            setTimeout(() => {
                setMsg(false)
            }, 2000);
        }); */

        fetch(url, {
            method: "POST",
            body: formData
        })        
    }

    return (
        <App>
            <div className="container my-3">                
                            
                <Call />

                <section className="justify-content-center">
                    <p className="text-center mt-5 title">Ou deixe sua mensagem</p>
                </section>
                

                <form className="form-plus mx-auto" onSubmit={registerMessage}>
                    <div className="form-row">
                        <div className="form-group col-md form-style">
                            <label>Nome</label>
                            <input className="form-control" name="name" type="text"/>
                        </div>
                    </div>

                    <div className="form-row">
                        <div className="form-group col-md-6 form-style">                    
                            <label>Email</label>
                            <input className="form-control" name="email" type="email"/>
                        </div>                    

                        <div className="form-group col-md-6 form-style">
                            <label>Assunto</label>
                            <select className="form-control" name="subject" id="options">                
                                <option selected>Escolha..</option>
                                <option value="informacao">Solicitar informação</option>
                                <option value="elogio">Elogio</option>
                                <option value="sugestao">Sugestão</option>
                                <option value="reclamacao">Reclamação</option>
                                <option value="outro">Outro</option>
                            </select>               
                        </div>
                    </div>

                    <div className="form-row">
                        <div className="form-group col-md form-style">	
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea className="form-control" name="message" type="text" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                    </div>

                    <div>
                    <button className="btn-standard" type="submit" name="enviar">Enviar</button>
                    </div>              
                </form> 

                {/* { 
                    msg && <div className="alert alert-success mx-auto mt-4 w-75" role="alert">
                        Mensagem enviada!
                    </div>
                } */}

                <div className="mt-5">
                    {message.map((element) => {
                        return (

                            <Card className="card-size mt-3 mx-auto">
                                <Card.Header key={element.id}>{element.nome}</Card.Header>
                                <ListGroup variant="flush">
                                    <ListGroup.Item>Email: {element.email}</ListGroup.Item>
                                    <ListGroup.Item>Assunto: {element.assunto}</ListGroup.Item>
                                    <ListGroup.Item>Mensagem: {element.mensagem}</ListGroup.Item>
                                </ListGroup>
                            </Card>
                        );
                    })}
                </div>
            </div>
        </App>
    );
};