import React from 'react';

import './Forms.css';


export function FormContact() {
    
    const [name, setName] = React.useState("");
    const [email, setEmail] = React.useState("");
    const [subject, setSubject] = React.useState("");
    const [message, setMessage] = React.useState("");
    const[msg, setMsg] = React.useState(false);

    
    function registerContact(event){ 
          
        event.preventDefault(); 
        console.log(event.target); 
        
        let formData = new FormData(event.target)
        console.log(formData.get("name"));
        console.log(formData.get("email"));
        console.log(formData.get("subject"));
        console.log(formData.get("message"));

        const url = "http://localhost:3005/contact"

        fetch(url,{ 
            method: "POST", 
            body: formData
        }).then((response) => response.json()).then((dadosValidados) =>{
          console.log(dadosValidados);
          setMsg(true);          
        });

        document.getElementById('name').value="";
        document.getElementById('email').value="";
        document.getElementById('subject').value="";
        document.getElementById('message').value="";

        }
    return (
        <form onSubmit={registerContact} action="/contact" method="post" className="form-plus mx-auto" >            
            <div className="form-row">
                <div className="form-group col-md form-style">
                    <label>Nome</label>
                    <input type="text" name="name" id="name" 
                    placeholder="Digite seu nome" className="form-control" required />
                </div>
            </div>

            <div className="form-row">
                <div className="form-group col-md-6 form-style">                    
                    <label>Email</label>
                    <input type="email" name="email" id="email"
                    placeholder="Digite seu e-mail" className="form-control" required />
                </div>                    

                <div className="form-group col-md-6 form-style">
                    <label>Assunto</label>
                    <select name="subject" id="options"
                        className="form-control">                
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
                    <label>Mensagem</label>
                    <textarea type="text" name="message" id="message"
                    placeholder="Escreva sua mensagem" rows="4" className="form-control">
                    </textarea>
                </div>
            </div>

            <div>
                <button className="btn-standard" type="submit" name="enviar">Enviar</button>
            </div>           
        </form>
    );
};