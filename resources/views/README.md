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
- [] creare la migration per la tabella pivot
- []aggiungere ai model la relazione many to many
- []visualizzare nella pagina di dettaglio di un cocktail gli ingredienti se presenti
- []permettere all’utente di associare gli ingredienti nella pagina di creazione e modifica di un cocktail