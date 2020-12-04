import { useState } from 'react';
import Modal from 'react-bootstrap/Modal';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';


function Login() {
    const [show, setShow] = useState(false);
  
    const handleShow = () => setShow(true);
    const handleClose = () => setShow(false);
    
  
    return (
      <>
        <a onClick={handleShow}>
          Login
        </a>          
  
        <Modal show={show} onHide={handleClose}>

          <Modal.Header closeButton>
            <Modal.Title>Bem-vindo(a) de volta!</Modal.Title>
          </Modal.Header>

          <Modal.Body>
            <Form>
              <Form.Group controlId="formBasicEmail">
                <Form.Label>Email</Form.Label>
                <Form.Control type="email" placeholder="Digite seu email" />                
              </Form.Group>

              <Form.Group controlId="formBasicPassword">
                <Form.Label>Senha</Form.Label>
                <Form.Control type="password" placeholder="Digite sua senha" />
              </Form.Group>
            </Form>  
          </Modal.Body>

          <Modal.Footer>
            <Button variant="light" onClick={handleClose}>
              Cancelar
            </Button>
            <Button variant="info" onClick={handleClose}>
              Entrar
            </Button>
          </Modal.Footer>
        </Modal>
      </>
    );
};

export default Login;
