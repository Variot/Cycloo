# MicroCMS

Projet MicroCMS géré avec GitHub Classroom.

Consignes d'installation :

* Accepter l'invitation GitHub Classroom pour obtenir le dépôt GitHub `microcms-VotreNom`.
* Cloner ce dépôt dans le répertoire de travail du serveur Web (exemple : `c:\xampp\htdocs` avec XAMPP pour Windows).
* Configurer Apache pour définir un hôte virtuel vers ce répertoire. Exemple avec XAMPP sous Windows :

```
<VirtualHost *:80>
    DocumentRoot "C:\xampp\htdocs\microcms-VotreNom\web"
    ServerName microcms
    <Directory "C:\xampp\htdocs\microcms-VotreNom\web">
        AllowOverride all
    </Directory>
</VirtualHost>
```

* Copier le code source de votre projet MicroCMS dans le répertoire `microcms-VotreNom`.
* Vérifier que l'URL http://microcms est fonctionnelle.
* Coder le projet dans ce répertoire et synchroniser régulièrement avec GitHub.

