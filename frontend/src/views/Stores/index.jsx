import React from 'react';

import Card from 'react-bootstrap/Card';
import CardGroup from 'react-bootstrap/CardGroup';
import App from '../../components/Layout/App';

import StoreSp from '../../assets/images/general/store-sp.jpg';
import StoreRj from '../../assets/images/general/store-rj.jpg';
import StoreSc from '../../assets/images/general/store-sc.jpg';
import StoreBh from '../../assets/images/general/store-bh.jpg';


const Stores = () =>
{
    return (
        
        <App>
            <CardGroup>
                <Card className="m-3 img-thumbnail text-center">
                    <Card.Img variant="top" src={StoreSp} />
                    <Card.Body>
                        <Card.Title><strong>São Paulo</strong></Card.Title>
                        <Card.Text>
                            <p>Avenida Paulista</p>
                            <p>n&ordm; 985 - 3&ordm; andar - Jardins</p>
                            <p>(11) 2222-2222</p>
                        </Card.Text>
                    </Card.Body>
                </Card>

                <Card className="m-3 img-thumbnail text-center">
                    <Card.Img variant="top" src={StoreRj} />
                    <Card.Body>
                        <Card.Title><strong>Rio de Janeiro</strong></Card.Title>
                        <Card.Text>
                            <p>Avenida Presidente Vargas</p>
                            <p>n&ordm; 5000 - 10&ordm; andar - Centro</p>
                            <p>(21) 3333-3333</p>
                        </Card.Text>
                    </Card.Body>
                </Card>

                <Card className="m-3 img-thumbnail text-center">
                <Card.Img variant="top" src={StoreBh} />
                    <Card.Body>
                        <Card.Title><strong>Belo Horizonte</strong></Card.Title>
                        <Card.Text>
                            <p>Pç Sete de Setembro</p>
                            <p>n&ordm; 48 - 1&ordm; andar - Centro</p>
                            <p>(31) 4444-4444</p>
                        </Card.Text>
                    </Card.Body>                    
                </Card>

                <Card className="m-3 img-thumbnail text-center">
                    <Card.Img variant="top" src={StoreSc} />
                    <Card.Body>
                        <Card.Title><strong>Santa Catarina</strong></Card.Title>
                        <Card.Text>
                            <p>Rua Major I</p>
                            <p>Térreo - n&ordm; 370 - Vila Mariana</p>                  
                            <p>(47) 5555-5555</p>
                        </Card.Text>
                    </Card.Body>
                </Card>
            </CardGroup>                              
        </App>
    );
};

export default Stores;