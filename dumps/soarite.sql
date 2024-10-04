USE soarite;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

INSERT INTO users (name, email, phone) VALUES
('John Doe', 'john@example.com', '123456789'),
('Jane Smith', 'jane@example.com', '987654321');

INSERT INTO posts (title, content, image, user_id) VALUES
('Primeiro Post', 'Conteúdo do primeiro post.', NULL, 1),
('Segundo Post', 'Conteúdo do segundo post.', 'uploads/image.jpg', 2);
