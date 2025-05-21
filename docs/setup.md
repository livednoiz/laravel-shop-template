# 🚀 Laravel 12 Docker Template

A fully working Laravel 12 development environment powered by Docker. Includes PHP, Composer, nginx, Node.js, and MariaDB. Designed for local development and deployable to environments like Plesk or any modern web host.

---

## 📦 Features

* Laravel 12
* PHP 8.x (configurable)
* MariaDB database
* Composer
* nginx
* Node.js for frontend tooling (Vite/Mix)
* Easily extendable for production environments

---

## 📁 Project Structure

```bash
laravel-docker-template/
├── docker/
│   └── php/
│       └── Dockerfile
├── docker-compose.yml
├── nginx/
│   └── default.conf
├── README.md
└── src/                # Laravel app lives here
```

---

## 🛠️ Prerequisites

* Docker + Docker Compose installed
* Linux/macOS/WSL terminal
* Optional: Plesk Obsidian for remote deployment

---

## ⚙️ Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/YOUR_USERNAME/laravel-docker-template.git
cd laravel-docker-template
```

### 2. Create Laravel project

If the `src/` directory is empty, create your Laravel 12 project:

```bash
cd src
docker run --rm -v $(pwd):/app composer create-project laravel/laravel:^12.0 /app
```

### 3. Set Permissions

Make sure Laravel can write to the necessary folders:

```bash
cd ..
sudo chown -R $USER:www-data src
sudo chmod -R 775 src/storage src/bootstrap/cache
```

### 4. Start Docker environment

```bash
docker compose up -d --build
```

### 5. Access the application

Open your browser and go to:

👉 [http://localhost:8080](http://localhost:8080)

If everything works, you should see the Laravel welcome screen.

---

## 🧪 Useful Commands

### Run Composer inside container

```bash
docker exec -it laravel-app composer install
```

### Artisan

```bash
docker exec -it laravel-app php artisan migrate
```

---

## 📝 Notes

* Port 8080 is used for the Laravel web interface.
* The MariaDB service maps to default port 3306.
* Customize environment variables in `.env` as needed.
* You may adapt the Dockerfile for production use.

---

## 📤 Deployment (optional)

You can push your code to a Git repository and deploy it via Plesk Git integration or traditional SSH/FTP.

For help on production deployment, CI/CD, or GitHub Actions, feel free to open an issue or contribution.

---

## 🤝 Contributing

Pull requests and contributions are very welcome!

---

## 📄 License

# Proprietary Software - Do Not Distribute

This repository contains proprietary source code and is provided exclusively under license agreement.  
Unauthorized copying, distribution or modification is prohibited.

For licensing inquiries, please contact [freelance@blackenter.de].

