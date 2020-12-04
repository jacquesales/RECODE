import React from 'react';

import Card from 'react-bootstrap/Card';
import CardGroup from 'react-bootstrap/CardGroup';
import App from '../Layout/App/App';


export default () =>
{
    return (
        
        <App>
            <CardGroup>
                <Card className="m-3 img-thumbnail text-center">
                    <Card.Img variant="top" src="../images/store-sp.jpg"/>
                    <Card.Body>
                        <Card.Title><strong>São Paulo</strong></Card.Title>
                        <Card.Text>
                            <p>Avenida Paulista</p>
                            <p>n&ordm; 985 - 3&ordm; andar - Jardins</p>
                            <p>(11) 4444-4444</p>
                        </Card.Text>
                    </Card.Body>
                </Card>

                <Card className="m-3 img-thumbnail text-center">
                    <Card.Img variant="top" src="../images/store-rj.jpg"/>
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
                    <Card.Img variant="top" src="../images/store-sc.jpg"/>
                    <Card.Body>
                        <Card.Title><strong>Santa Catarina</strong></Card.Title>
                        <Card.Text>
                            <p>Rua Major I</p>
                            <p>Térreo - n&ordm; 370 - Vila Mariana</p>                  
                            <p>(47) 5555-5555</p>
                        </Card.Text>
                    </Card.Body>
                </Card>

                <Card className="m-3 img-thumbnail text-center">
                    <Card.Img variant="top" src="../images/store-bh.jpg"/>
                    <Card.Body>
                        <Card.Title><strong>Belo Horizonte</strong></Card.Title>
                        <Card.Text>
                            <p>Pç Sete de Setembro</p>
                            <p>n&ordm; 48 - 1&ordm; andar - Centro</p>
                            <p>(11) 6666-6666</p>
                        </Card.Text>
                    </Card.Body>
                </Card>
            </CardGroup>                              
        </App>
    );
};