CREATE TABLE IF NOT EXISTS USER(
    id int AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    name VARCHAR(50) NOT NULL,
    birthday VARCHAR(10),
    sex VARCHAR(3)
    
)  ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS ADMIN(
    id int AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    name VARCHAR(50) NOT NULL,
    birthday VARCHAR(10),
    sex VARCHAR(3)
)   ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS PRODUCTOR(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT,
    img VARCHAR(255)
)   ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS CATEGORY(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    img VARCHAR(255)
)   ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS PRODUCT(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    quantity INT NOT NULL CHECK (quantity >=0 ),
    description TEXT,
    img VARCHAR(255),
    id_productor int NOT NULL,
    id_category int NOT NULL
)   ENGINE = InnoDB;

ALTER TABLE PRODUCT
ADD FOREIGN KEY (id_productor) REFERENCES PRODUCTOR(id) ON DELETE CASCADE;
ALTER TABLE PRODUCT
ADD FOREIGN KEY (id_category) REFERENCES CATEGORY(id) ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS IMG_PRODUCT(
    id_product int,
    image VARCHAR(255),
    CONSTRAINT PK_IMG_PRODUCT PRIMARY KEY(id_product,image)
)   ENGINE = InnoDB;

ALTER TABLE IMG_PRODUCT
ADD FOREIGN KEY (id_product) REFERENCES PRODUCT(id) ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS CART(
    id int PRIMARY KEY,
    date datetime DEFAULT CURRENT_TIMESTAMP
)   ENGINE = InnoDB;

ALTER TABLE CART
ADD FOREIGN KEY (id) REFERENCES USER(id) ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS CP(
    id_product int,
    id_cart int,
    CONSTRAINT PK_CP PRIMARY KEY(id_product,id_cart)
)   ENGINE = InnoDB;

ALTER TABLE CP
ADD FOREIGN KEY (id_product) REFERENCES PRODUCT(id) ON DELETE CASCADE;
ALTER TABLE CP 
ADD FOREIGN KEY (id_cart) REFERENCES CART(id) ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS ORDERS(
    id int AUTO_INCREMENT PRIMARY KEY,
    date datetime DEFAULT CURRENT_TIMESTAMP,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    email VARCHAR(50) NOT NULL, 
    paid BINARY DEFAULT 0,
    id_user int
)   ENGINE = InnoDB;

ALTER TABLE ORDERS
ADD FOREIGN KEY (id_user) REFERENCES USER(id) ON DELETE SET NULL;

CREATE TABLE IF NOT EXISTS OP(
    id_order int,
    id_product int,
    CONSTRAINT PK_OP PRIMARY KEY(id_order,id_product)
)   ENGINE = InnoDB;

ALTER TABLE OP
ADD FOREIGN KEY (id_order) REFERENCES ORDERS(id) ON DELETE CASCADE;
ALTER TABLE OP
ADD FOREIGN KEY (id_product) REFERENCES PRODUCT(id) ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS COMMENT(
    id int AUTO_INCREMENT PRIMARY KEY,
    date datetime DEFAULT CURRENT_TIMESTAMP,
    vote BINARY DEFAULT 3,
    msg TEXT,
    id_user int,
    id_product int NOT NULL
)   ENGINE = InnoDB;

ALTER TABLE COMMENT
ADD FOREIGN KEY (id_user) REFERENCES USER(id) ON DELETE SET NULL;
ALTER TABLE COMMENT 
ADD FOREIGN KEY (id_product) REFERENCES PRODUCT(id) ON DELETE CASCADE;