<?php

return [
    'cms_object' => [
        'invalid_file' => 'Naziv fajla nije validan: :name. Nazivi fajlova mogu sadržati samo alfanumeričke simbole, donje crte, povlake i tačkke. Validni primeri su: strana.htm, strana, direktorijum/strana',
        'invalid_property' => "Svojstvo ':name' se ne može postaviti",
        'file_already_exists' => "Fajl ':name' već postoji.",
        'error_saving' => "Greška pri čuvanju fajla ':name'. Proveri dozvole na sistemu.",
        'error_creating_directory' => 'Greška pri pravljenju direktorijuma :name. Proveri dozvole na sistemu.',
        'invalid_file_extension' => 'Ekstenzija fajla nije validna: :invalid. Dozvoljene ekstenzije su: :allowed.',
        'error_deleting' => "Greška pri brisanju šablonskog fajla ':name'. Proveri dozvole na sistemu.",
        'delete_success' => 'Izbrisani šabloni: :count.',
        'file_name_required' => 'Polje za naziv fajla je obavezno.',
        'safe_mode_enabled' => 'Signurni režim je trenutno omogućen. Izmena PHP koda u CMS šablonima je trenutno onemogućena. Da isključiš siguran režim rada, izmeni vrednost konfiguracione promenljive `cms.enableSafeMode` u `false`.',
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Sajt',
            'online' => 'Na mreži',
            'maintenance' => 'U održavanju',
            'manage_themes' => 'Upravljaj temama',
            'customize_theme' => 'Izmeni temu',
        ],
    ],
    'theme' => [
        'not_found_name' => "Tema ':name' nije pronađena.",
        'by_author' => 'Autor: :name',
        'active' => [
            'not_set' => 'Aktivna tema nije postavljena.',
            'not_found' => 'Aktivna tema nije pronađena.',
        ],
        'edit' => [
            'not_set' => 'Tema za izmenu nije postavljena.',
            'not_found' => 'Tema za izmenu nije pronađena.',
            'not_match' => "Objekat kojem pokušavaš da pristupiš ne pripada temu koju menjaš. Please reload the page. Osveži stranicu.",
        ],
        'settings_menu' => 'Teme',
        'settings_menu_description' => 'Upravljaj temama i opcijama prilagođavanja.',
        'default_tab' => 'Svojstva',
        'name_label' => 'Naziv',
        'name_create_placeholder' => 'Naziv nove teme',
        'author_label' => 'Autor',
        'author_placeholder' => 'Pravno ili privatno lice',
        'description_label' => 'Opis',
        'description_placeholder' => 'Opis teme',
        'homepage_label' => 'Početna stranica',
        'homepage_placeholder' => 'URL sajta',
        'code_label' => 'Kod',
        'code_placeholder' => 'Jedinstveni kod ove teme za distribuciju',
        'preview_image_label' => 'Slika pregleda',
        'preview_image_placeholder' => 'Putanja za sliku pregleda teme.',
        'dir_name_label' => 'Naziv direktorijuma',
        'dir_name_create_label' => 'Odredišni direktorijum za temu',
        'theme_label' => 'Tema',
        'theme_title' => 'Teme',
        'activate_button' => 'Aktiviraj',
        'active_button' => 'Aktiviraj',
        'customize_theme' => 'Izmeni temu',
        'customize_button' => 'Izmeni',
        'duplicate_button' => 'Duplikat',
        'duplicate_title' => 'Dupliraj temu',
        'duplicate_theme_success' => 'Tema duplirana!',
        'manage_button' => 'Upravljaj',
        'manage_title' => 'Upravljaj temom',
        'edit_properties_title' => 'Tema',
        'edit_properties_button' => 'Izmeni svojstva',
        'save_properties' => 'Snimi svojstva',
        'import_button' => 'Uvezi',
        'import_title' => 'Uvezi temu',
        'import_theme_success' => 'Tema uvežena!',
        'import_uploaded_file' => 'Arhivni fajl teme',
        'import_overwrite_label' => 'Pregazi postojeće fajlove',
        'import_overwrite_comment' => 'Nemoj čekirati ovo polje ako želiš samo da uvezeš nove fajlove',
        'import_folders_label' => 'Direktorijumi',
        'import_folders_comment' => 'Odaberi direktorijume teme koje želiš da uvezeš',
        'export_button' => 'Eksportuj',
        'export_title' => 'Eksportuj temu',
        'export_folders_label' => 'Direktorijumi',
        'export_folders_comment' => 'Odaberi direktorijume teme koje želiš da izvezeš',
        'delete_button' => 'Izbriši',
        'delete_confirm' => 'Izbriši ovu temu? Ova radnja se ne može poništiti.',
        'delete_active_theme_failed' => 'Aktivna tema se ne može izbrisati, pokušaj prvo da napraviš i aktiviraš drugu.',
        'delete_theme_success' => 'Tema izbrisana!',
        'create_title' => 'Napravi temu',
        'create_button' => 'Napravi',
        'create_new_blank_theme' => 'Napravi novu praznu temu',
        'create_theme_success' => 'Tema napravljena!',
        'create_theme_required_name' => 'Odaberi naziv za temu.',
        'new_directory_name_label' => 'Direktorijum teme',
        'new_directory_name_comment' => 'Odaberi drugi naziv za direktorijum teme koja je duplikat.',
        'dir_name_invalid' => 'Naziv može sadržati samo brojeve, latinska slova, kao i sledeće simbole: _-',
        'dir_name_taken' => 'Direktorijum za željenu temu postoji.',
        'find_more_themes' => 'Pronađi još tema',
        'saving' => 'Čuvanje tema...',
        'return' => 'Nazad na listu tema',
    ],
    'maintenance' => [
        'settings_menu' => 'Mod održavanja',
        'settings_menu_description' => 'Konfiguriši mod održavanja stranice i uključi/isključi isti.',
        'is_enabled' => 'Uključi mod održavanja',
        'is_enabled_comment' => 'Izaberi stranicu za prikazivanje kada je mod održavanja uključen.',
        'hint' => 'Mod održavanja će prikazati odabranu stranicu korisnicima koji nisu ulogovani preko pozadinskog sistema.',
    ],
    'page' => [
        'not_found_name' => "Strana ':name' nije pronađena",
        'not_found' => [
            'label' => 'Stran nije pronađena',
            'help' => 'Tražena stran nije pronađena.',
        ],
        'custom_error' => [
            'label' => 'Greška sa stranom',
            'help' => "Žao nam je, nešto je pošlo po zlu pa strana ne može biti prikazana.",
        ],
        'menu_label' => 'Strane',
        'unsaved_label' => 'Nesačuvana strana(e)',
        'no_list_records' => 'Nema pronađenih strana',
        'new' => 'Nova strana',
        'invalid_url' => 'Format URL-a nije validan. URL treba početi sa kosom crtom i može sadržati brojeve, latinska slova, kao i sledeće simbole: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Izbriši odabrane strane?',
        'delete_confirm_single' => 'Izbriši ovu stranu?',
        'no_layout' => '-- nema plana --',
        'cms_page' => 'CMS strana',
        'title' => 'Naslov strane',
        'url' => 'URL strane',
        'file_name' => 'Naziv fajla strane',
    ],
    'layout' => [
        'not_found_name' => "Plan ':name' nije pronađen",
        'menu_label' => 'Planovi',
        'unsaved_label' => 'Nesačuvani plan(ovi)',
        'no_list_records' => 'Nema pronađenih planova',
        'new' => 'Novi plan',
        'delete_confirm_multiple' => 'Izbriši izabrane planove?',
        'delete_confirm_single' => 'Izbriši ovaj plan?',
    ],
    'partial' => [
        'not_found_name' => "Parcijal ':name' nije pronađen",
        'invalid_name' => 'Naziv parcijala nije validan: :name.',
        'menu_label' => 'Parcijal',
        'unsaved_label' => 'Nesačuvan parcijal(i)',
        'no_list_records' => 'Nema pronađenih parcijala',
        'delete_confirm_multiple' => 'Izbriši izabrane parcijale?',
        'delete_confirm_single' => 'Izbriši ovaj parcijal?',
        'new' => 'Novi parcijal',
    ],
    'content' => [
        'not_found_name' => "Fajl sadržaja ':name' nije pronađen",
        'menu_label' => 'Sadržaj',
        'unsaved_label' => 'Nesačuvani sadržaj',
        'no_list_records' => 'Fajlovi za sardžaj nisu pronađeni',
        'delete_confirm_multiple' => 'Izbriši odabrane fajlove ili direktorijume za sadržaj?',
        'delete_confirm_single' => 'Izbriši ovaj fajl za sadržaj?',
        'new' => 'Novi fajl za sadržaj',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Naziv za AJAX rukovatelja nije validan: :name.',
        'not_found' => "AJAX rukovatelj ':name' nije pronađen.",
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Dodaj',
        'search' => 'Traži...',
    ],
    'editor' => [
        'settings' => 'Podešavanja',
        'title' => 'Naslov',
        'new_title' => 'Naslov nove strane',
        'url' => 'URL',
        'filename' => 'Naziv fajla',
        'layout' => 'Plan',
        'description' => 'Opis',
        'preview' => 'Pregled',
        'meta' => 'Meta',
        'meta_title' => 'Meta Naslov',
        'meta_description' => 'Meta Opis',
        'markup' => 'Označavanje',
        'code' => 'Kod',
        'content' => 'Sadržaj',
        'hidden' => 'Skrivena',
        'hidden_comment' => 'Skrivena stranica je dostupna samo korisnicima koji su ulogovani na pozadinski sistem.',
        'enter_fullscreen' => 'Uđite u režim punog ekrana',
        'exit_fullscreen' => 'Izađite iz režima punog ekrana',
        'open_searchbox' => 'Otvori polje za pretragu',
        'close_searchbox' => 'Zatvori polje za pretragu',
        'open_replacebox' => 'Otvori polje za zamenu',
        'close_replacebox' => 'Zatvori polje za zamenu',
        'commit' => 'Izvrši',
        'reset' => 'Resetuj',
        'commit_confirm' => 'Da li zaista želite da izvršite promene nad ovim fajlom? Ovo će pregaziti postojeći',
        'reset_confirm' => 'Da li zaista želite da resetujete ovaj fajl? Ovo će u potpunosti zameniti trenutni sa onim koji je na sistemu',
        'committing' => 'Izvršavanje',
        'resetting' => 'Resetovanje',
        'commit_success' => 'Izvršenje :type je uspešno.',
        'reset_success' => 'Resetovanje :type je uspešno.',
    ],
    'asset' => [
        'menu_label' => 'Sredstva',
        'unsaved_label' => 'Nesačuvano sredstvo(a)',
        'drop_down_add_title' => 'Dodaj...',
        'drop_down_operation_title' => 'Radnja...',
        'upload_files' => 'Otpremi fajl(ove)',
        'create_file' => 'Napravi fajl',
        'create_directory' => 'Napravi direktorijum',
        'directory_popup_title' => 'Novi direktorijum',
        'directory_name' => 'Naziv direktorijuma',
        'rename' => 'Promeni naziv',
        'delete' => 'Izbriši',
        'move' => 'Pomeri',
        'select' => 'Izaberi',
        'new' => 'Novi fajl',
        'rename_popup_title' => 'Promeni naziv',
        'rename_new_name' => 'Novi naziv',
        'invalid_path' => 'Putanja može sadržati samo brojeve, latinska slova, razmake, kao i sledeće simbole: ._-/',
        'error_deleting_file' => 'Greška pri brisanju fajla :name.',
        'error_deleting_dir_not_empty' => 'Greška pri brisanju direktorijuma :name. Direktorijum nije prazan.',
        'error_deleting_dir' => 'Greška pri brisanju direktorijuma :name.',
        'invalid_name' => 'Naziv može sadržati samo brojeve, latinska slova, razmake, kao i sledeće simbole: ._-',
        'original_not_found' => 'Originalni fajl ili direktorijum nije pronađen',
        'already_exists' => 'Fajl ili direktorijum sa ovim nazivom već postoji',
        'error_renaming' => 'Greška pri promeni naziva fajla ili direktorijuma',
        'name_cant_be_empty' => 'Naziv ne može biti prazan',
        'too_large' => 'Otpremljeni fajl je previše velik. Maksimalna dozvoljena veličina je :max_size',
        'type_not_allowed' => 'Samo sledeći tipovi fajla su dozvoljeni: :allowed_types',
        'file_not_valid' => 'Fajl nije validan',
        'error_uploading_file' => "Greška pri otpremanju fajla ':name': :error",
        'move_please_select' => 'izaberi',
        'move_destination' => 'Odredište direktorijuma',
        'move_popup_title' => 'Pomeri sredstva',
        'move_button' => 'Pomeri',
        'selected_files_not_found' => 'Izabrani fajlovi nisu pronađeni',
        'select_destination_dir' => 'Izaberi odredišni direktorijum',
        'destination_not_found' => 'Odredišni direktorijum nije pronađen',
        'error_moving_file' => 'Greška pri pomeranju fajla :file',
        'error_moving_directory' => 'Greška pri pomeranju direktorijuma :dir',
        'error_deleting_directory' => 'Greška pri brisanju originalnog direktorijuma :dir',
        'no_list_records' => 'Nema pronađenih fajlova',
        'delete_confirm' => 'Izbriši izabrane fajlove ili direktorijume?',
        'path' => 'Putanja',
    ],
    'component' => [
        'menu_label' => 'Komponente',
        'unnamed' => 'Bez naziva',
        'no_description' => 'Opis nije dat',
        'alias' => 'Pseudonim',
        'alias_description' => 'Jedinstven naziv dat komponenti kada se koristi u stranici ili kodu plana.',
        'validation_message' => 'Pseudonimi komponente su neophodni i mogu sadržati samo latinske simbole, brojeve i donje crte. Pseudonimi bi trebalo da počinju latinskim simbolom.',
        'invalid_request' => 'Šablon ne može biti sačuvan zbog podataka koji nisu validni.',
        'no_records' => 'Nema pronađenih komponenti',
        'not_found' => "Komponenta ':name' nije pronađena.",
        'method_not_found' => "Komponenta ':name' ne sadrži ':method'.",
        'soft_component' => 'Opciona komponenta',
        'soft_component_description' => 'Ova komponenta nedostaje ali je opciona.',
    ],
    'template' => [
        'invalid_type' => 'Nepoznati tip šablona.',
        'not_found' => 'Šablon nije pronađen.',
        'saved' => 'Šablon sačuvan.',
        'no_list_records' => 'Zapisi nisu pronađeni',
        'delete_confirm' => 'Izbriši izabrane šablone?',
        'order_by' => 'Sortiraj po',
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Upravljaj sadržajem sajta',
        'manage_assets' => 'Upravljaj slikama, JS i CSS fajlovima sajta',
        'manage_pages' => 'Napravi, modifikuj i izbriši stranice sajta',
        'manage_layouts' => 'Napravi, modifikuj i izbriši planove CMS-a',
        'manage_partials' => 'Napravi, modifikuj i izbriši parcijale CMS-a',
        'manage_themes' => 'Aktiviraj, deaktiviraj i konfiguriši tmee CMS-a',
        'manage_theme_options' => 'Konfiguriši opcije izmena za aktivnu temu',
    ],
    'theme_log' => [
        'hint' => 'Ovaj log prikazuje promene načinjene nad temom od strane administratora u pozadinskom delu sistema.',
        'menu_label' => 'Log teme',
        'menu_description' => 'Prikaži promene načinjene nad aktivnom temom.',
        'empty_link' => 'Isprazni log teme',
        'empty_loading' => 'Pražnjenje loga teme...',
        'empty_success' => 'Log teme je ispražnjen',
        'return_link' => 'Vrati se na logove teme',
        'id' => 'ID',
        'id_label' => 'ID loga',
        'created_at' => 'Datum & vreme',
        'user' => 'Korisnik',
        'type' => 'Tip',
        'type_create' => 'Napravi',
        'type_update' => 'Ažuriraj',
        'type_delete' => 'Izbriši',
        'theme_name' => 'Tema',
        'theme_code' => 'Kod teme',
        'old_template' => 'Šablon (Stari)',
        'new_template' => 'Šablon (Novi)',
        'template' => 'Šablon',
        'diff' => 'Izmene',
        'old_value' => 'Stara vrednost',
        'new_value' => 'Nova vrednost',
        'preview_title' => 'Izmene šablona',
        'template_updated' => 'Šablon je ažuriran',
        'template_created' => 'Šablon je napravljen',
        'template_deleted' => 'Šablon je izbrisan',
    ],
];
