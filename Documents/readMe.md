Pour pouvoir utiliser ce site sur un serveur local il vous faut télécharger [xampp](https://www.apachefriends.org/download.html).
Une fois celà fait, télécharger les fichier en appuyant sur le bouton 'Code' puis 'Télécharger ZIP'
![[Pasted image 20230330163521.png]]

Maintenant il vous faut extraire le dossier dans `./xampp/htdocs`
maintenant que vous avez le dossierdu site + la base de donnée, il vous faudra lancé xampp,
seul Apache et MySQL sont nécéssaire.

Il faut que vous installiez la base de donnée fournis avec le site, dans votre MySQL, pour celà on va aller dans l'administrateur de notre base de donnée en cliquant sur le bouton "Admin".
![[Pasted image 20230330164043.png]]

Une fois à l'intérieure, créer une nouvelle base de donnée avec le même nom que celle que vous avez téléchargé ultérieurement.
![[Pasted image 20230330164206.png]]
![[Pasted image 20230330164239.png]]

Maintenant il faut importer la base téléchargée dans celle que nous venons de créer.
![[Pasted image 20230330164401.png]]

Maintenant qu'on à notre base vous pouvez aller dans votre navigateur et écrire `localhost/lePays`.
Vous allez devoir suivre les instruction pour installer le site. veuillez à bien mettre le bon nom de la base de donnée (celle créée au préalable).
Vous tomberais sur le site directement, pour avoiraccès à l'administration, il voussuffis de rajouter 'wp-admin' à la fn de l'url comme celà: `localhost/lePays/wp-admin`
Il vous suffira de rentrer l'identifiant et le mot de passe que je vous aurez envoyé via teams.