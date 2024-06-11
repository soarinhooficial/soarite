const express = require('express');
const router = express.Router();
const PortfolioItem = require('../models/PortfolioItem');

// Rota para obter todos os itens do portfólio
router.get('/', async (req, res) => {
    try {
        const items = await PortfolioItem.findAll();
        res.json(items);
    } catch (err) {
        res.status(400).json({ message: err.message });
    }
});

// Rota para criar um novo item no portfólio
router.post('/', async (req, res) => {
    try {
        const item = await PortfolioItem.create(req.body);
        res.status(201).json(item);
    } catch (err) {
        res.status(400).json({ message: err.message });
    }
});

// Rota para atualizar um item do portfólio
router.put('/:id', async (req, res) => {
    try {
        const item = await PortfolioItem.findByPk(req.params.id);
        if (item) {
            await item.update(req.body);
            res.json(item);
        } else {
            res.status(404).json({ message: 'Item não encontrado' });
        }
    } catch (err) {
        res.status(400).json({ message: err.message });
    }
});

// Rota para deletar um item do portfólio
router.delete('/:id', async (req, res) => {
    try {
        const item = await PortfolioItem.findByPk(req.params.id);
        if (item) {
            await item.destroy();
            res.json({ message: 'Item deletado com sucesso' });
        } else {
            res.status(404).json({ message: 'Item não encontrado' });
        }
    } catch (err) {
        res.status(400).json({ message: err.message });
    }
});

module.exports = router;
