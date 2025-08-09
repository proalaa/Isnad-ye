# ⚡ Isnaad – Smart Medical Procurement Platform

**Isnaad** is a modern web application that bridges **hospitals, clinics, and medical centers** with **trusted medical equipment suppliers**.  
It enables healthcare providers to **collaborate on group purchases** and allows suppliers to **compete through transparent bidding**, making procurement faster, easier, and more cost-effective.  

---

## 🚀 Key Features

- **Modern Tech Stack:** Laravel 8, Vue, Vue Router, Vuex, Vue I18n, ESLint  
- **Dynamic Pages & Layouts:** Custom page layouts with dynamic imports  
- **User Authentication:** JWT-based login, registration, email verification, and password reset  
- **Social Login:** Integrated with Laravel Socialite  
- **UI & Icons:** Bootstrap 4 + Font Awesome 5 for a sleek interface  

---

## 📦 Installation

1. **Clone the Repository**
```bash
git clone https://github.com/proalaa/Isnad-ye.git
cd Isnad-ye
```

2. **Backend Setup**
```bash
composer install
cp .env.example .env
```
- Update `.env` with your database credentials  
```bash
php artisan key:generate
php artisan jwt:secret
php artisan migrate
```

3. **Frontend Setup**
```bash
npm install
```

---

## 💻 Usage

### Development Mode
```bash
npm run watch
```

---

## 👨‍💻 Contributors
- [**Aladdin Mohammed**](https://github.com/proalaa) – *Creator & Main Maintainer*

---

> ⚡ **Tip:** Want to contribute? Fork the repo, create your branch, and send a pull request. Let’s make medical procurement smarter together.
