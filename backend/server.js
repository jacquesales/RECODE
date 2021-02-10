import express from "express"; // importando a função express
import mysql from "mysql"; // importando a funcionalidade de banco de dados
import cors from "cors"; // importando a função cors
/* import bodyParser from "bodyParser"; */

const server = express(); // criando o servidor com express e seus respectivos métodos

server.use(express.json()); // indicando que vou usar o express no formato json
server.use(cors()); // indicando o uso da funcionalidade cors
/* server.use(bodyParser.urlencoded({ extended: true })); */

// conexão com o database
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "fseletro",
});

// criando uma rota utilizando um método http que espera 2 parâmetros: 1º é a rota; 2º a função de callback (com 2 parâmetros que são objetos) que será executada quando a rota for acessada
// * request usado para passagem de parâmetros pra nossa rota; * response é a resposta/retorno que temos do servidor ao acessar a nossa rota
<<<<<<< HEAD

// select * from produtos
server.get("/products", (req, res) => {
  connection.query("SELECT * FROM produtos", (error, result) => {
    if (error) {
      res.send(error);
    } else {
      res.send(result);
=======
server.get("/products", (req, res) => {
  connection.query("SELECT * FROM produtos", (error, result) => {
    if (error) {
      res.send(error)
    } else {
      res.send(result)
>>>>>>> 7bec5b0a9b2676513f11f3c9f929ec0a27932f6c
    }
  });
});

server.listen(3005, () => {
  console.log("Servidor Ativo!");
});
