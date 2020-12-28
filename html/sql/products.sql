DROP TABLE IF EXISTS category;

CREATE TABLE category (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name VARCHAR NOT NULL,
  image_name VARCHAR NOT NULL
);

DROP TABLE IF EXISTS product;

CREATE TABLE product (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name VARCHAR NOT NULL UNIQUE,
  price NUMERIC(5,2) NOT NULL,
  cat_id INTEGER REFERENCES category NOT NULL,
  stock integer
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR,
  email VARCHAR,
  morada VARCHAR
);


DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  date INTEGER NOT NULL,
  username VARCHAR REFERENCES users NOT NULL,
  type_of_order integer
);

DROP TABLE IF EXISTS delivery; 
CREATE TABLE delivery (   
  id INTEGER PRIMARY KEY AUTOINCREMENT,   
  -- username VARCHAR REFERENCES users,  
  nome_delivery VARCHAR ,   
  telefone integer,   
  hora integer
  );

DROP TABLE IF EXISTS mesa;
 CREATE TABLE mesa (
   id INTEGER PRIMARY KEY AUTOINCREMENT,
   capacidade INTEGER NOT NULL,
   image_name VARCHAR NOT NULL
);

DROP TABLE IF EXISTS order_line;
CREATE TABLE order_line (
  order_id INTEGER REFERENCES orders,
  prod_id INTEGER REFERENCES product,
  quantity INTEGER NOT NULL,
  PRIMARY KEY (order_id, prod_id)
);



DROP TABLE IF EXISTS reserva;
CREATE TABLE reserva (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  user_id INTEGER REFERENCES users,
  mesas_id integer references mesas,
  inicio TIME,
  fim TIME
);

INSERT INTO category(name, image_name) VALUES ('Pratos', 'pratos.jpg');

INSERT INTO product (name, price, cat_id, stock) VALUES ('Massa a bolonhesa', '9.99', 1, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Francesinha', '11.99', 1, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Bifinhos com cogumelos', '7.99', 1, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Arroz de pato', '7.99', 1, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Bacalhau à braz', '9.99', 1, 10); 

INSERT INTO category (name, image_name) VALUES ('Bebidas', 'drink.jpg');

INSERT INTO product (name, price, cat_id, stock) VALUES ('Água', '0.99', 2, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Coca-cola', '1.99', 2, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Fanta', '1.99', 2, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('7up', '1.99', 2, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Iced Tea', '1.99', 2, 10);

INSERT INTO category (name, image_name) VALUES ('Sobremesas', 'sobremesas.jpg');

INSERT INTO product (name, price, cat_id, stock) VALUES ('Bolo de bolacha', '3.99', 3, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Gelado', '2.99', 3, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Natas do céu', '2.99', 3, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Maçâ Assada', '1.99', 3, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Pudim', '3.99', 3, 10);

INSERT INTO category (name, image_name) VALUES ('Entradas', 'entradas.jpg');
INSERT INTO product (name, price, cat_id, stock) VALUES ('Manteiga', '0.99', 4, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Salada', '2.99', 4, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Pão de alho', '2.49', 4, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Azeitonas', '1.39', 4, 10);
INSERT INTO product (name, price, cat_id, stock) VALUES ('Sopa', '1.99', 4, 10);

INSERT INTO mesa (capacidade, image_name) VALUES (6, 'mesa1.png');
INSERT INTO mesa (capacidade, image_name) VALUES (4, 'mesa2.png');
INSERT INTO mesa (capacidade, image_name) VALUES (4, 'mesa3.png');
INSERT INTO mesa (capacidade, image_name) VALUES (2, 'mesa4.png');
INSERT INTO mesa (capacidade, image_name) VALUES (10, 'mesa5.png');
INSERT INTO mesa (capacidade, image_name) VALUES (10, 'mesa6.png');
INSERT INTO mesa (capacidade, image_name) VALUES (4, 'mesa7.png');
INSERT INTO mesa (capacidade, image_name) VALUES (2, 'mesa8.png');
INSERT INTO mesa (capacidade, image_name) VALUES (2, 'mesa9.png');
INSERT INTO mesa (capacidade, image_name) VALUES (1, 'mesa10.png');

