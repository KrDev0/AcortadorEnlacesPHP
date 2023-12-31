CREATE TABLE IF NOT EXISTS users(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS links(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    hash varchar(6) UNIQUE,
    title varchar(255) NOT NULL,
    real_link varchar(1024) NOT NULL,
    instant_redirect BOOLEAN DEFAULT 1
);

CREATE TABLE IF NOT EXISTS statistics(
    link_id BIGINT UNSIGNED NOT NULL,
    date varchar(10) NOT NULL,
    FOREIGN KEY (link_id) REFERENCES links(id) ON DELETE CASCADE ON UPDATE CASCADE
);

# A default user. Password is 'admin'
INSERT INTO `users` (`email`, `password`) VALUES
('correo@gmail.com', '$2y$10$6JFVF/IV9e/Rzorgfy74yej.1OmD0ux3uHPylFgIUpvFgJ.waq15q');

