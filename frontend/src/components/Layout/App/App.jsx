import Header from '../Header/Header';
import Container from '../Container/Container';
import Footer from '../Footer/Footer';


const App = ({children}) => (

        <>
            <Header />
            <Container>                
                {children}
            </Container>
            <Footer />
        </>
);

export default App;