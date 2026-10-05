# Drawer

Un petit exercice fait en classe pour découvrir Livewire après avoir fait une première version avec AlpineJS.

Cette version utilise la navigation livewire en mode SPA, ce qui signifie que le routage est destiné à choisir des composants Livewire (rangés dans le dossier `pages`) à charger dans un layout qui ne quitte jamais le navigateur.

Pour une telle application, il faut accepter l'idée que l’application ne fonctionnera pas sans Javascript activé dans le navigateur.

Il y a actuellement trois routes. Une première affiche un menu de navigation qui mène vers deux pages, students et projects.

L’objet de cet exercice est de mettre en place un module d'édition/création sous la forme d'une boite de dialogue de type flyout / drawer.

Le drawer est donc destiné à recevoir des formulaires de création ou d'édition d'un étudiant ou d'un projet. Dans les deux cas, c'est le même formulaire. Ce qui en fait un formulaire d'édition ou de création est le fait qu'un id soit transmis dans le payload de l'événement open-drawer qui déclenche l'ouverture du drawer. 

Il est intéressant de noter la règle de validation de l'email pour les étudiants. Elle demande permet de passer outre la contrainte d'unicité qui est appliquée habituellement sur l'email lorsque l'id de l'étudiant n'a pas changé entre deux soumissions consécutives du formulaire.

Le code essaie de ne pas trop recourir à des allers-retours vers le backend (un problème fréquent quand on ne fait pas trop attention et qu'on utilise livewire aveuglément). Ce qui peut se faire dans le front y reste.
