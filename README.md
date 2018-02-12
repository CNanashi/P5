**P5 OC  "Créez votre premier blog en PHP"**

--Install

Crée une base de données et importer le fichier ???.sql qui se trouve dans le dossier ??
edit dev.ini dans le dossier config
formulaire de contact edit votre email dans le fichier mail/???.php


Create a db and import ???.sql file located in the ?? folder
edit dev.ini file located in the config folder
the Contact Form edit your email in the mail/???.php file

--Exemple

Mailer

```php

$message = $_POST['message'];

$headers = 'FROM: site@example.dev';

mail('example@example.com', 'Form contact', $message, $headers);

```

