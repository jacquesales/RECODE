import './Forms.css';

export const FormContact = () => {  

    return (

        <form className="form-plus mx-auto" >
            <div className="form-row">
                <div className="form-group col-md form-style">
                    <label>Nome</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu nome" 
                        className="form-control" required />
                </div>
            </div>

            <div className="form-row">
                <div className="form-group col-md-6 form-style">                    
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" 
                        className="form-control" required />
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
                    <textarea type="text" name="message" id="message" placeholder="Escreva sua mensagem" rows="4" 
                        className="form-control">
                    </textarea>
                </div>
            </div>

            <div>
                <button className="btn-standard" type="submit" name="enviar">Enviar</button>
            </div>           
        </form>
    );
};