# tpGui_20.03.19_php
Quelles sont les 2 méthodes HTTP utilisables dans un formulaire en PHP ?
    -- la methode post et la methode get


Quelle est la différence entre include, include_once, require et require_once ?
    --Include renvoie un warning mais laisse la page s'executer
    --Require stopper l’execution en cas de probleme
    --Le suffixe once permet d'inclure qu'une seule fois par page, pour un include_once renverra un warning , tandis qu’un require_once , bloquera l’execution et retournera une erreur


Quelle fonction devez-vous appeler pour utiliser les sessions dans votre application ?
    --session_start()


Qu'est-ce qu'un DSN et à quoi sert-il dans le cadre de PDO ?
    --Un DSN ( Data Source Name) est une structure de donnée pour stocker une connexion a une source  de donné. Dans le cadre de PDO, il sert a donnée le nom de l’hote sur lequel le serveur de base de données se situe, le numéro de port du serveur, et le dbname ( nom de la base de données)


Quelle est la différence entre une requête préparée et une requête non préparée ?
    --prepare réalise une requête préparée qui est stocké dans une variable en attente de l'execution
    --query réalise une requête non préparée et lance l'excution a l'appel de la fonction


Quelle est la différence entre la méthode GET et la méthode POST ?
    -- get : les données sont rajoutées à l’URI par l’attribut action. méthode à réserver pour des données non sensibles.
    -- post : les données sont incluses dans le formulaire méthode à réserver pour des données sensibles
