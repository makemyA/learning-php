# Formulaire d'excuse
## Envoyer une confirmation par mail
### Installation de PHP MAILER

Afin de pouvoir configurer automatiquement les réponses par mail sur base des réponses du formulaire il est nécessaire d'installer php mailer.
Pour se faire, voici les étapes à suivre:

1. Ouvrir le **cmd** Laragon et y taper ces instructions pour: 
    * Installer php/mailer
    ```
    composer require phpmailer/phpmailer
    ```
     * installer le package gmail
    ```
    composer require league/oauth2-client
    ```
1. 