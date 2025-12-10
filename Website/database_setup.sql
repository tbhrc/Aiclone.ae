CREATE DATABASE IF NOT EXISTS aiclone_db;
USE aiclone_db;

CREATE TABLE IF NOT EXISTS applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    whatsapp VARCHAR(50),
    company VARCHAR(255),
    role VARCHAR(100),
    main_reason TEXT,
    persona_type VARCHAR(50), -- Founder, Influencer, Real Estate, etc.
    start_timeframe VARCHAR(50), -- This month, Next 3 months, Exploring
    status ENUM('new', 'contacted', 'qualified', 'rejected') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS waiting_list (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
