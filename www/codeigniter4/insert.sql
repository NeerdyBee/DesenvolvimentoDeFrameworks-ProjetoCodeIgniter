SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

INSERT INTO `categorias` (`categorias_id`, `categorias_nome`,`created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sanduíches2','2025-04-23 16:37:43', NULL, NULL),
(2, 'Pizzas','2025-04-23 16:37:43', NULL, NULL);

INSERT INTO `cidades` (`cidades_id`, `cidades_nome`, `cidades_uf`,`created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ceres', 'GO','2025-04-23 16:37:43', NULL, NULL);

INSERT INTO `produtos` (`produtos_id`, `produtos_nome`, `produtos_descricao`, `produtos_preco_custo`, `produtos_preco_venda`, `produtos_categorias_id`,`created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pizza Calabresa', 'Pizza Calabresa', 35.00, 60.00, 2,'2025-04-23 16:37:43', NULL, NULL),
(2, 'X-Tudo', 'X-Tudo', 15.50, 24.99, 1,'2025-04-23 16:37:43', NULL, NULL);

INSERT INTO `usuarios` (`usuarios_id`, `usuarios_nome`, `usuarios_sobrenome`, `usuarios_email`, `usuarios_cpf`, `usuarios_data_nasc`, `usuarios_nivel`, `usuarios_fone`, `usuarios_senha`, `usuarios_data_cadastro`,`created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vilson', 'Soares de Siqueira', 'vilsonsoares@gmail.com', '999.999.999-99', '1981-12-03', 1, '6398474-3380', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00','2025-04-23 16:37:43', NULL, NULL);

INSERT INTO `enderecos` (`enderecos_id`, `enderecos_rua`, `enderecos_numero`, `enderecos_complemento`, `enderecos_cep`, `enderecos_status`, `enderecos_cidades_id`, `enderecos_usuarios_id`,`created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Av. Caraíba', 123, 'Q E L 21', '76350-000', 0, 1, 1,'2025-04-23 16:37:43', NULL, NULL);

INSERT INTO `imgprodutos` (`imgprodutos_id`, `imgprodutos_link`, `imgprodutos_descricao`, `imgprodutos_produtos_id`,`created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uploads/20250416/1744801962_9165428592f42702f939.jpg', 'Pizza1', 1,'2025-04-23 16:37:43', NULL, NULL);