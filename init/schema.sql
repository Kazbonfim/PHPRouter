-- Foi me recomendado não tentar criar o schema, quando possível, direto no código da aplicação, por isso, esse schema existe. Ele vai rodar em conjunto com docker-compose up -d, inicializar o db teste e criar a tabela cadastros
CREATE TABLE IF NOT EXISTS cadastros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);
