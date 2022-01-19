## Exercice 1 - Les objets PHP.
Dans ce premier exercice, il est demandé de définir des objets en php et d'afficher les informations des instances via des méthodes.

### Tout d'abord commencez par définir 4 classes, composées des attributs indiqués :
- [x] User
```
- Un nom
- Un prénom
- Un email
```
- [x] Article
```
- Un titre
- Un sous-titre
- Un auteur ( Est un User )
- Un contenu 
```
- [x] Category
```
- Un nom
- Une liste de produits (Liste d'object Product)
```
- [x] Product
```
- Un libellé
- Une description
- Un prix
```

- [x] Pensez bien à mettre vos attributs en privés et générer vos Getters et Setters

### Dans une page ou dans des pages différentes, affichez les informations de vos objets.

- [x] Créer une instance d'un User et afficher ses informations.
- [x] Créer une instance d'un Article en utilisant le User créé juste avant comme auteur et afficher ses informations.
- [x] Créer plusieurs instances de produits.
- [x] Créer une instance de Category et lui ajouter les produits créés plus tôt.
- [x] Afficher les informations de la catégorie ainsi que ses produits.
- [x] Ajoutez une méthode dans la classe Category pour afficher le prix total de ses produits.
- [x] Ajoutez une méthode dans la classe Category pour afficher le nom du produit qui coûte le plus cher.

## Exercice 2 - Classe abstraite, héritage et polymorphisme en PHP

Dans cet exercice, vous allez utiliser l'héritage pour partager des propriétés identiques entre plusieurs classes.

- [x] Définir une classe abstraite nommé Animal, ajoutez y des attributs que les animaux partages entre eux.
- [x] Ajoutez des méthodes à votre classe abstraite Animal et réécrire la méthode __toString() 
- [x] Définir des classes d'animaux (Chat, Chien etc... ). Ces classes doivent hériter de la classe Animal.
- [x] Utiliser le polymorphisme pour réécrire les méthodes de votre classe Animal dans vos classes enfant.
- [x] Dans une page, créer des instances de vos classes et afficher leurs informations.

## Exercice 3 - Registre médical

Dans cet exercice votre objectif est d'essayer de définir des classes pour modéliser le registre médical d'un hôpital.

Pour vous aider :
Le registre appartient à un hôpital, il contient une liste de rendez-vous. Les rendez-vous concernent un patient et est réalisé par un médecin.
Pour aller plus loin vous pouvez aussi faire en sorte que sur le rendez-vous la maladie du patient soit notée ainsi que les médicaments prescrits.

Votre application doit contenir :
- [ ] Au moins une classe contenant une autre classe (Comme le User dans l'Article de L'exercice 1)
- [ ] Au moins une classe contenant une liste d'une autre classe (Comme les Products dans la Category de l'exercice 1)
- [ ] Au moins une classe abstraite
- [ ] Au moins une classe un héritage
- [ ] Au moins une utilisation du polymorphisme


