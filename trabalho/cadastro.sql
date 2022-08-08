USE aplication;
CREATE TABLE users(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    birth DATE NOT NULL,
    avatar VARCHAR(255) NOT NULL,
    bio TEXT,
    type ENUM('user', 'author', 'admin') DEFAULT 'user',
    status ENUM('on', 'off', 'inativo') DEFAULT 'on'
);

INSERT INTO users (
    name,
    email,
    password,
    avatar,
    birth,
    bio,
    type
) VALUES (
    'Julia da Silva',
    'juliada@silva.com',
    SHA1('010203'),
    'Procurando',
    '1987-07-21',
    'Designer Gráfico',
    'admin'
), (
    'Marcos',
    'marcos@gmail.com',
    SHA1('123456'),
    'Usando',
    '1998-03-29',
    'Trader',
    'autor'
);