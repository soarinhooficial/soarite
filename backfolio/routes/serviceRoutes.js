const express = require('express');
const router = express.Router();
const Service = require('../models/Service'); // Verifique se este caminho está correto

// Rota para listar todos os serviços
router.get('/', async (req, res) => {
    try {
        const services = await Service.findAll();
        res.json(services);
    } catch (error) {
        res.status(500).json({ error: 'Erro ao buscar serviços' });
    }
});

// Rota para criar um novo serviço
router.post('/', async (req, res) => {
    try {
        const { name, description } = req.body;
        console.log('Dados recebidos:', req.body); // Log para verificar os dados recebidos
        const newService = await Service.create({ name, description });
        console.log('Serviço criado:', newService); // Log para verificar o serviço criado
        res.status(201).json(newService);
    } catch (error) {
        console.error('Erro ao criar serviço:', error);
        res.status(500).json({ error: 'Erro ao criar serviço' });
    }
});

module.exports = router;
