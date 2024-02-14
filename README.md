# Laravel Cocktails

GIT workflow: Luca Caldato, Mirko Cherchi, Gaetano Panìco, Riccardo Imperato, Elisa Chiappini.

Riepilogo Esercitazione

1. Creare un nuovo progetto Laravel
2. Creazione di una migration per la tabella `cocktails` (Le colonne saranno a discrezione vostra)
3. Creazione del relativo model (BONUS: seeder per popolare la tabella)
4. Creazione di un controller per ottenere tutti i cocktails da DB
5. Visualizzazione di tutti i cocktails in una view
   Ogni membro del team deve contribuire allo svolgimento dell'esercizio utilizzando git
   (pull, branch, merge, push).


# Cocktails e ingredients

-   creo il pacchetto per ingredient `php artisan make:model -rmsR` name ingredient

-   facendo coi però devo spostare il controller in admin e cambiare l' import nel model

-   inserisco i campi title e slug nella migration e la runno

-   creo il seeder con le ingredient

-   creo migrazione per tabella pivot, nomi tabelle in ordine alfabetico (`php artisan make:migration create_project_technology_table`)

-   istruisco i model in base alla relazione

-   gestisco inserimento e creazione delle technoly in create project

-   semplice parte di crud e gestione dei valori e dei casi, avendo un array derivante da una select dovrò agire diversamente (ciclo sull' array per avere ogni technology associata)


Paolo consegna 14 febbraio:

- [x]creare la migration per la tabella degli ingredienti
- [x] creare il  il rispettivo model
- [x] creare la migration per la tabella pivot
- [x]aggiungere ai model la relazione many to many
- []visualizzare nella pagina di dettaglio di un cocktail gli ingredienti se presenti
- []permettere all’utente di associare gli ingredienti nella pagina di creazione e modifica di un cocktail