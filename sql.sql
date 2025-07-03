CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    email VARCHAR(255),
    role ENUM('admin','editor','viewer') DEFAULT 'viewer'
);

-- Create a demo user (password: demo123)
INSERT INTO users (name, password, role) VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'email@email.com', 'admin');
