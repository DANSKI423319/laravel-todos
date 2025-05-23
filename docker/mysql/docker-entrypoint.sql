-- Create databases
CREATE DATABASE IF NOT EXISTS `todos`;
CREATE DATABASE IF NOT EXISTS `tests`;

-- Create primary user and grant privileges
CREATE USER 'todos' @'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'todos' @'%';

-- Create test user and grant privileges
CREATE USER 'test' @'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON `tests`.* TO 'test' @'%';