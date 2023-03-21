insert into dentite_Entreprise values (1,NULL,'nomTest','ceci est un objet pour la societe','2005-05-23');
insert into dentite_Entreprise values (1,NULL,'nomTest2','ceci est un objet pour la societe2','2002-05-23');

insert into contact values (1,1,'Ankorodrano','0322332116','societe1@gmail',true);
insert into contact values (2,2,'67ha','0322332186','societe2@gmail',false);

insert into devise values (1,'Dollard','Etats-Unis');
insert into devise values (2,'Euro','Union Europeene');o
insert into devise values (4,'Ariary','Madagascar');

insert into departement values (1,'description 1');
insert into departement values (2,'description 2');

insert into devise_equivalence values (1,1,4,5500.00,'2009-05-12',12,23.5,40);
insert into devise_equivalence values (1,1,4,5500.00,'2009-05-12',12,23.5,40);

insert into InfoComptabilite values (1,1,125000000,'ceci est un NIF','ceci est un NSTAT','ceci est un NRCS',2);
insert into InfoComptabilite values (1,2,725000000,'ceci est un NIF','ceci est un NSTAT','ceci est un NRCS',1);

insert into Employe values (1,'Jean','Rakotobe','2000-12-23',1,'comptable',1500000,true,1,'identite de cette employer');
insert into Employe values (2,'Jeanne','Rakotokely','2000-12-23',1,'secretaire',256000,false,1,'identite de cette employer');
insert into Employe values (3,'Jeannot','Raketaka','2000-12-23',2,'comptable',1500000,false,2,'identite de cette employer');
insert into Employe values (4,'Jeannine','Ramangabe','2000-12-23',2,'secretaire',256000,false,2,'identite de cette employer');

insert into ExoComptable values (1,'2010-01-12','2010-02-23',1);
insert into ExoComptable values (1,'2010-01-12','2010-02-23',2);

insert into compte values (1,'Fournisseur',356000,256000);
insert into compte values (2,'Banque',356000,0);

insert into journal values (1,'j1',1);
insert into journal values (2,'j2',2);

insert into compteTier values (1,'Fournisseur',1);

insert into facture values (1,'13798513325','vendeur1','acheteur1',1,'espece',456000.56,12);

insert into PieceJournale values (1,1,2,1,'2010-04-05',1205000,1205000,'intitule no1',1);

insert into Stocke values (1,'stock1',120000,56);
insert into Stocke values (2,'stock2',420000,26);

insert into Produit values (1,'produit1',25000,12);
insert into Produit values (2,'produit2',35000,12);

insert into tva values (1,20);



