# Documentation

```console
>$ git clone
>$ cd name_repo
```

1. **check .env file** et changer la ligne **DATABASE_URL**

2. Installer la configuration

```console
>$ composer install
```

3. créer et alimenter la base de donnée

```consol
>$ php bin/console doctrine:database:create
>$ php bin/console doctrine:migrations:migrate
>$ php bin/console doctrine:fixtures:load
```

4. ouvrez votre navigateur à l'adresse 127.0.0.1:8000

5. id de connection : Durand et password: testpass
6. adresse possible : 1. "/project" 2. "/newc" 3. "/salarie"
7. lancez le serveur local
```console
>$ symfony server:start -d
```
