import { Component } from 'react';
/* import { connect } from 'react-redux';  */// conexão da Store com os componentes

import Header from '../Header/Header';
import Container from '../Container/Container';
import Footer from '../Footer/Footer';

class App extends Component {

    render() {      
        
        /* const { newValue } = this.props; */ //constante local que recebe os dados de Props que serão mapeados com os dados da Store

        return (
<>
            <Header />
            <Container>                
                {this.props.children}                
                {/* <h5>{newValue}</h5> */}
            </Container>
            <Footer />
            </>
        );
    }
}

/* const mapStateToProps = store => ({ //mapeamento da Store com a Action
    newValue: store.clickState.newValue //transformando um trecho do estado da Store em uma Prop utilizável pelo componente 
});

export default connect(mapStateToProps)(App); //exportação da aplicação App recebida como parâmetro da função connect, que também recebe como parâmetro o mapeamento da Store */

export default App;