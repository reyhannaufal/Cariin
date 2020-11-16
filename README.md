# Cariin [WIP]
### Sebuah aplikasi web yang mengubungkan antara owner lomba dan para peserta yang mencari lomba.
---
### Instalasi:
```bash
composer install
php artisan generate key
php artisan migrate:fresh (untuk clear & migrate database)
```
```bash
yarn install && yarn dev
```
### Untuk development Vue gunakan:
```bash
yarn watch
cd resources/js (folder development Vue)
```
---
## Tech Stack
### Frontend
1. Vue
1. Tailwincss 

### Backend
1. Laravel
2. Passport

## API Documentation
1. Register
(Post) /api/register
body: name, email, password, role
2. Login
(Post) /api/login
body: email, password
3. Logout
(Post) /api/logout
header: Authorization
4. User Details
(Post) /api/user/details
header: Authorization
5. Add Competition
(Post) /api/competitions
header: Authorization
body: title, description, image
6. List Competition
(Get) /api/competitions
header: Authorization
7. Edit Competiton
(Put) /api/competitions/{id}
header: Authorization
body: title, description
8. Delete Competiton
(Delete) /api/competitions/{id}
header: Authorization