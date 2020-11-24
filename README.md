# Cariin [WIP]

Sebuah aplikasi web yang mengubungkan antara owner lomba dan para peserta yang mencari lomba.

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

## Tech Stack

### Frontend

1. Vue
1. Tailwincss

### Backend

1. Laravel
2. Passport

## API Documentation

### Users

1. Register
    - url : /api/register
    - method : POST
    - body :
        - name
        - email
        - password
        - role (0 untuk user, 1 untuk admin)
2. Login
    - url : /api/login
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - email
        - password
3. Logout
    - url : /api/logout
    - method : POST
    - header :
        - Authorization (Bearer {token})
4. Get Logged In User Details
    - url : /api/user/details
    - method : GET
    - header :
        - Authorization (Bearer {token})
5. Get User Details by User Id
    - url : /api/user/{id}/details
    - method : GET
    - header :
        - Authorization (Bearer {token})
6. Get Teams by Logged In User
    - url : /api/user/teams
    - method : GET
    - header :
        - Authorization (Bearer {token})
7. Get Teams by User Id
    - url : /api/user/{id}/teams
    - method : GET
    - header :
        - Authorization (Bearer {token})
8. Get Threads by Logged In User
    - url : /api/user/threads
    - method : GET
    - header :
        - Authorization (Bearer {token})
9. Get Threads by User Id
    - url : /api/user/{id}/threads
    - method : GET
    - header :
        - Authorization (Bearer {token})

### Categories

1. Get Categories List
    - url : /api/categories/index
    - method : GET
    - header :
        - Authorization (Bearer {token})
2. Get Category Details by Id
    - url : /api/categories/{id}
    - method : GET
    - header :
        - Authorization (Bearer {token})
3. Get Competitions by Category Id
    - url : /api/categories/{id}/competitions
    - method : GET
    - header :
        - Authorization (Bearer {token})
4. Add Category
    - url : /api/categories/store
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - name
5. Edit Category
    - url : /api/categories/edit/{id}
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - name
        - \_method (put)
6. Delete Category
    - url : /api/categories/delete/{id}
    - method : DELETE
    - header :
        - Authorization (Bearer {token})

### Competitions

1. Get Competitions List
    - url : /api/competitions/index
    - method : GET
    - header :
        - Authorization (Bearer {token})
2. Get Competition Details by Id
    - url : /api/competitions/{id}
    - method : GET
    - header :
        - Authorization (Bearer {token})
3. Get Teams by Competition Id
    - url : /api/competitions/{id}/teams
    - method : GET
    - header :
        - Authorization (Bearer {token})
4. Add Competition
    - url : /api/competitions/store
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - title
        - description
        - image
        - category_id
5. Edit Competition
    - url : /api/competitions/edit/{id}
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - title
        - description
        - \_method (put)
6. Delete Competition
    - url : /api/competitions/delete/{id}
    - method : DELETE
    - header :
        - Authorization (Bearer {token})
7. Search Competition by Keyword
    - url : /api/competitions/search/{keyword}
    - method : GET
    - header :
        - Authorization (Bearer {token})

### Teams

1. Get Teams List
    - url : /api/teams/index
    - method : GET
    - header :
        - Authorization (Bearer {token})
2. Get Team Details by Id
    - url : /api/teams/{id}
    - method : GET
    - header :
        - Authorization (Bearer {token})
3. Get Threads by Team Id
    - url : /api/teams/{id}/threads
    - method : GET
    - header :
        - Authorization (Bearer {token})
4. Add Team
    - url : /api/teams/store
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - title
        - description
        - competition_id
5. Edit Team
    - url : /api/teams/edit/{id}
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - title
        - description
        - \_method (put)
6. Delete Team
    - url : /api/teams/delete/{id}
    - method : DELETE
    - header :
        - Authorization (Bearer {token})

### Threads

1. Get Threads List
    - url : /api/threads/index
    - method : GET
    - header :
        - Authorization (Bearer {token})
2. Get Thread Details by Id
    - url : /api/threads/{id}
    - method : GET
    - header :
        - Authorization (Bearer {token})
3. Get Replies by Thread Id
    - url : /api/threads/{id}/replies
    - method : GET
    - header :
        - Authorization (Bearer {token})
4. Add Thread
    - url : /api/threads/store
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - content
        - team_id
5. Edit Thread
    - url : /api/threads/edit/{id}
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - content
        - \_method (put)
6. Delete Thread
    - url : /api/threads/delete/{id}
    - method : DELETE
    - header :
        - Authorization (Bearer {token})

### Replies

1. Get Replies List
    - url : /api/replies/index
    - method : GET
    - header :
        - Authorization (Bearer {token})
2. Get Reply Details by Id
    - url : /api/replies/{id}
    - method : GET
    - header :
        - Authorization (Bearer {token})
3. Add Reply
    - url : /api/replies/store
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - content
        - thread_id
4. Edit Reply
    - url : /api/replies/edit/{id}
    - method : POST
    - header :
        - Authorization (Bearer {token})
    - body :
        - content
        - \_method (put)
5. Delete Reply
    - url : /api/replies/delete/{id}
    - method : DELETE
    - header :
        - Authorization (Bearer {token})
