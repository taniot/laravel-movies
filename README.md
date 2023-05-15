
Progetto Movies


model-migration-seeder-controller

- Installazione progetto laravel da template e installazione di partenza
- Collegare un database
- Creare la struttura della tabella movies -> migrations -> movies

-- title
-- year
-- description
-- country
-- original title
-- duration
-- cast
-- production
-- director
-- genres
-- score
-- image



- Creare un modello per la gestione dei dati -> Movie
- Filliamo la tabella con informazioni di Movies o informazioni Fake (faker) - o entrambi
- Creiamo un controller -> Admin/MovieController - resource controller
- Creiamo le rotte relative al controlle --resource

view

- layout 
- partials -> header e footer
- movies/
    -- index
    -- show
    -- create
    -- edit

php artisan make:model -cmsrR
