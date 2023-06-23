-- Criação do banco de dados "db_slim"
CREATE DATABASE db_slim;

-- Utilização do banco de dados "db_slim"
USE db_slim;

-- Criação da tabela "posts"
CREATE TABLE posts (
    id INT AUTO_INCREMENT,
    author VARCHAR(50),
    content VARCHAR(100),
    PRIMARY KEY (id)
);

-- Inserção de registros na tabela "posts"
INSERT INTO posts (author, content)
VALUES
    ('João Silva', 'Esse é um ótimo artigo!'),
    ('Maria Santos', 'Concordo plenamente com o que foi dito.'),
    ('Pedro Almeida', 'Preciso compartilhar isso com meus amigos!'),
    ('Ana Pereira', 'Que post incrível, parabéns!'),
    ('Luiz Costa', 'Nunca tinha pensado nessa perspectiva, muito interessante.'),
    ('Juliana Ferreira', 'Obrigada por compartilhar essas informações valiosas!'),
    ('Carlos Ribeiro', 'Gostaria de ler mais sobre esse assunto, tem alguma recomendação?'),
    ('Mariana Oliveira', 'Estou ansiosa para colocar essas dicas em prática.'),
    ('Rafaela Souza', 'Que texto inspirador, obrigada por compartilhar!'),
    ('Fernando Santos', 'Esse conteúdo é essencial para quem está começando.');
