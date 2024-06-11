const express = require('express');
const app = express();
require('dotenv').config();
const bodyParser = require('body-parser');
const cors = require('cors');
const sequelize = require('./config/database'); // Verifique se este caminho está correto
const portfolioRoutes = require('./routes/portfolioRoutes');
const serviceRoutes = require('./routes/serviceRoutes');

// Configurações de Middlewares
app.use(cors());
app.use(bodyParser.json());
app.use('/api/portfolio', portfolioRoutes);
app.use('/api/services', serviceRoutes);

const port = process.env.PORT || 5000;

// Conexão com o MySQL
sequelize.authenticate()
    .then(() => console.log('Conexão com o banco de dados bem-sucedida'))
    .catch(err => console.log('Erro ao conectar ao banco de dados:', err));

// Sincronização dos modelos
sequelize.sync({ force: false })
    .then(() => {
        console.log('Modelos sincronizados com o banco de dados');
    })
    .catch(err => console.log('Erro ao sincronizar os modelos:', err));

// Inicialização do servidor
app.listen(port, () => {
    console.log(`Servidor rodando na porta ${port}`);
});
