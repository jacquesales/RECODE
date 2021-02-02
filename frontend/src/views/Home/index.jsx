import App from '../../components/Layout/App';
import './Home.css';

const Home = () =>
{
    return (
        
        <App>
            
            <div className="jumbotron jumb-img text-right">
                <h2 className="mb-5 tittle">Seja bem vindo(a)!</h2>
                <div className="jumb-text">  
                    <p>Seu novo marketplace prático e econômico.</p>
                    <p>O melhor para sua casa está aqui!</p>
                </div>
                <hr className="my-2"/>
                <p className="text">Em breve móveis artesanais da instituição Mães da Terra</p>
                <button className="btn btn-outline-light" type="button" href="#">
                Saiba mais
                </button>
            </div>
                  
        </App>
    );
};

export default Home;