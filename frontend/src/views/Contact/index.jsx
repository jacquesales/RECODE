import App from '../../components/Layout/App';
import Call from '../../components/Call';
import { FormContact } from '../../components/Forms';

import './Contact.css';


const Contact = () => {

    return (
        <App>
            <div className="container my-3">                
                            
                <Call />

                <section className="justify-content-center">
                    <p className="text-center mt-5 title">Ou deixe sua mensagem</p>
                </section>                

            <FormContact />     

            </div>
        </App>
    );
};

export default Contact;