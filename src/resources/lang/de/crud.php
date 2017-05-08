<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Speichern und neu',
    'save_action_save_and_edit' => 'Speichern und bearbeiten',
    'save_action_save_and_back' => 'Speichern und zurück',
    'save_action_changed_notification' => 'Standardverhalten nach dem Speichern wurde geändert.',

    // Create form
    'add'                 => 'Neuer Eintrag: ',
    'back_to_all'         => 'Zurück zur Übersicht: ',
    'cancel'              => 'Abbrechen',
    'add_a_new'           => 'Neuer Eintrag: ',

    // Edit form
    'edit'                 => 'Bearbeiten',
    'save'                 => 'Speichern',

    // Revisions
    'revisions'            => 'Revisionen',
    'no_revisions'         => 'Keine Revisionen gefunden',
    'created_this'          => 'hat das erstellt',
    'changed_the'          => 'hat das geändert: ',
    'restore_this_value'   => 'Wiederherstellen',
    'from'                 => 'von',
    'to'                   => 'bis',
    'undo'                 => 'Rückgängig',
    'revision_restored'    => 'Revision erfolgreich wiederhergestellt',

    // CRUD table view
    'all'                       => 'Alle ',
    'in_the_database'           => 'in der Datenbank',
    'list'                      => 'Liste',
    'actions'                   => 'Aktionen',
    'preview'                   => 'Vorschau',
    'delete'                    => 'Löschen',
    'admin'                     => 'Admin',
    'details_row'               => 'This is the details row. Modify as you please.',
    'details_row_loading_error' => 'Beim Laden der Details ist ein Fehler aufgetreten. Bitte versuche es noch einmal.',

    // Confirmation messages and bubbles
    'delete_confirm'                              => 'Willst du diesen Eintrag wirklich löschen?',
    'delete_confirmation_title'                   => 'Eintrag gelöscht',
    'delete_confirmation_message'                 => 'Eintrag erfolgreich gelöscht.',
    'delete_confirmation_not_title'               => 'NICHT gelöscht',
    'delete_confirmation_not_message'             => "Ein Fehler ist aufgetreten. Der Eintrag wurde möglicherweise nicht gelöscht.",
    'delete_confirmation_not_deleted_title'       => 'Nicht gelöscht',
    'delete_confirmation_not_deleted_message'     => 'Nichts passiert. Der Eintrag wurde nicht gelöscht.',

    // DataTables translation
    'emptyTable'     => 'Keine Einträge vorhanden',
    'info'           => 'Zeigt _START_ bis _END_ von _TOTAL_ Einträgen',
    'infoEmpty'      => 'Zeigt 0 von 0 aus 0 Einträgen',
    'infoFiltered'   => '(filtered from _MAX_ total entries)',
    'infoPostFix'    => '',
    'thousands'      => '.',
    'lengthMenu'     => '_MENU_ Einträge pro Seite',
    'loadingRecords' => 'Laden...',
    'processing'     => 'Verarbeiten...',
    'search'         => 'Suchen: ',
    'zeroRecords'    => 'Keine passenden Einträge gefunden',
    'paginate'       => [
        'first'    => 'Erste',
        'last'     => 'Letzte',
        'next'     => 'Nächste',
        'previous' => 'Vorherige',
    ],
    'aria' => [
        'sortAscending'  => ': aktivieren um aufsteigend zu Sortieren',
        'sortDescending' => ': aktivieren um absteigend zu Sortieren',
    ],

    // global crud - errors
    'unauthorized_access' => 'Unbefugter Zugriff - Du hast nicht die notwendigen Rechte um diese Seite anzuzeigen.',
    'please_fix' => 'Folgende Fehler müssen behoben werden:',

    // global crud - success / error notification bubbles
    'insert_success' => 'Anlegen war erfolgreich.',
    'update_success' => 'Bearbeiten war erfolgreich.',

    // CRUD reorder view
    'reorder'                      => 'Sortieren',
    'reorder_text'                 => 'Zum Sortieren verschieben. (Drag&Drop)',
    'reorder_success_title'        => 'Fertig',
    'reorder_success_message'      => 'Die Sortierung wurde gespeichert',
    'reorder_error_title'          => 'Fehler',
    'reorder_error_message'        => 'Die Sortierung konnte nicht gespeichert werden',

    // CRUD yes/no
    'yes' => 'Ja',
    'no' => 'Nein',

    // Fields
    'browse_uploads' => 'Uploads durchsuchen',
    'clear' => 'Löschen',
    'page_link' => 'Link zur Seite',
    'page_link_placeholder' => 'http://example.com/your-desired-page',
    'internal_link' => 'Interner Link',
    'internal_link_placeholder' => 'Interner slug. zB: \'admin/page\' (keine Anführungszeichen) für \':url\'',
    'external_link' => 'Externer Link',
    'choose_file' => 'Datei wählen',

    //Table field
    'table_cant_add' => 'Kann :entity nicht hinzufügen',
    'table_max_reached' => 'Maximale Anzahl von :max erreicht',

    // File manager
    'file_manager' => 'Datei Manager',
];
