import express from "express"; // importando a função express
import cors from "cors"; // importando a função cors
import mysql from "mysql"; // importando a funcionalidade de banco de dados

const server = express(); // criando o servidor com express e seus respectivos métodos

server.use(express.json); // indicando que vou usar o express no formato json
server.use(cors());

const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "fseletro",
});

// criando uma rota utilizando um método http que espera 2 parâmetros: 1º é a rota; 2º a função de callback (com 2 parâmetros que são objetos) que será executada quando a rota for acessada
// * request usado para passagem de parâmetros pra nossa rota; * response é a resposta/retorno que temos do servidor ao acessar a nossa rota
server.get("/products", (req, res) => {
  connection.query("SELECT * FROM produtos", (error, result) => {
    if (error) {
      res.send(error)
    } else {
      res.send(result)
    }
  });
});

// o listen é um método e espera 2 parâmetros: 1º a porta; 2º função de callback (que é opcional)
server.listen(3500, () => {
  console.log("Servidor Ativo!");
});
