# 📸 PhotoSphere — Galerie Photo Communautaire

> A community photo gallery web application — role-based access, albums, photo sharing, and social interactions, built with PHP OOP (SOLID principles), MySQL, and TailwindCSS.

![PHP](https://img.shields.io/badge/PHP%208-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)
![OOP](https://img.shields.io/badge/OOP-SOLID-green?style=flat-square)

---

## 📄 UML Diagrams & Documentation

| File | Description |
|---|---|
| `useCaseUml.png` | Use Case diagram — all actors and interactions |
| `class_diagram.pdf` | Class diagram — full OOP architecture |
| `ERD.pdf` | Entity-Relationship Diagram — database schema |
| `SQL_file.sql` | SQL script — creates the full database |

---

## ✨ Features

### 🔐 Authentication & Roles
- Secure registration and login with PHP sessions
- Role-based access: **Admin**, **Photographer**, **Visitor**
- Abstract `User` class with role-specific subclasses
- Passwords hashed with `bcrypt`

### 🖼️ Photo Management
- Upload, view, edit and delete photos
- Organize photos into albums
- Photo metadata (title, description, tags, date)
- Image file handling with validation

### 📚 Albums
- Create, edit and delete albums
- Public and private album visibility
- Browse albums by photographer

### 👥 Social Interactions
- Like / unlike photos
- Comment on photos
- Follow other photographers
- Community gallery feed

### 🔧 Admin Panel
- Manage all users, photos and albums
- Moderate comments
- Dashboard with platform statistics

---

## 🏗️ Architecture

Built following **SOLID principles** and **PSR-12** coding standards:

```
app/
├── Entities/        # Domain models (User, Photo, Album, Comment...)
├── Interfaces/      # Contracts for repositories and services
├── Repositories/    # Data access layer (PDO + prepared statements)
└── Services/        # Business logic layer
```

| Principle | Implementation |
|---|---|
| **S** — Single Responsibility | Each class has one clear purpose |
| **O** — Open/Closed | Entities extensible via inheritance |
| **L** — Liskov Substitution | User subclasses are interchangeable |
| **I** — Interface Segregation | Focused repository interfaces |
| **D** — Dependency Inversion | Repositories injected into services |

---

## 🛠 Tech Stack

| Technology | Usage |
|---|---|
| PHP 8 + OOP | Backend logic, `declare(strict_types=1)` |
| MySQL + PDO | Database with prepared statements |
| PSR-4 Autoloading | Namespace-based class loading |
| TailwindCSS | Responsive UI |
| HTML5 / JavaScript | Page structure and interactions |

---

## 🚀 Getting Started

```bash
git clone https://github.com/lioubiarabi/PHOTOSPHERE_Galerie_Photo_Communautaire.git
cd PHOTOSPHERE_Galerie_Photo_Communautaire
```

1. Import `SQL_file.sql` into your MySQL database
2. Configure DB credentials in `app/` config file
3. Serve with XAMPP/WAMP or any PHP local server
4. Open `http://localhost/PHOTOSPHERE_Galerie_Photo_Communautaire`

---

## 🎯 Project Context

Built as part of the **[2023] Développeur Web et Web Mobile** curriculum at **Youcode**.

The brief: develop PhotoSphere, a community photo gallery for PixelCraft Digital — using PHP 8 OOP with SOLID principles, PSR-12 standards, strict typing, and a clean repository/service architecture.

**Duration:** 7 days (Dec 29, 2025 — Jan 7, 2026)

> 🔗 Trello planning: [trello.com/b/looKEPvk](https://trello.com/b/looKEPvk/photosphere-galerie-photo-communautaire)

---

## 💡 What I Learned

- Applying SOLID principles in a real PHP OOP project
- Structuring a layered architecture (Entities / Interfaces / Repositories / Services)
- PSR-4 autoloading with namespaces
- Strict typing with `declare(strict_types=1)`
- Designing an ERD and UML class diagram before coding
- Building a role-based PHP application with abstract classes and interfaces

---

## 👤 Author

**Lioubi Arabi** — Youcode Web Development Student  
[![GitHub](https://img.shields.io/badge/GitHub-lioubiarabi-181717?style=flat-square&logo=github)](https://github.com/lioubiarabi)

---

*Clean architecture, beautiful photos 📸✨*
