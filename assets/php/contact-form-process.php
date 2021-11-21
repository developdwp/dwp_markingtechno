
<? php
 if ( isset ( $ _POST [ 'Email' ])) {

    // MODIFIEZ LES 2 LIGNES CI-DESSOUS
    SI REQUIS $ email_to = "developdwp@gmail.com";
    $ email_subject = "Nouvelles soumissions de formulaire";

    function problem ( $ error ) {
        echo "Nous sommes désolés, mais une ou plusieurs erreurs ont été trouvées avec le formulaire que vous avez soumis." ;
        echo "Ces erreurs apparaissent ci-dessous. <br> <br>" ;
        echo $ error . "<br> <br>" ;
        echo "Veuillez revenir en arrière et corriger ces erreurs. <br> <br>" ; mourir (); }


    // les données attendues de validation existent si ( ! isset ( $ _POST [ 'Nom' ]) || ! isset ( $ _POST [ 'Email' ]) || ! isset ( $ _POST [ 'Message' ]) ) {
        problem ( ' Nous sommes désolés, mais il semble y avoir un problème avec le formulaire que vous avez soumis. ' ); }


    $ name = $ _POST [ 'Nom' ]; // requis
    $ email = $ _POST [ 'Email' ]; // requis
    $ message = $ _POST [ 'Message' ]; // obligatoire

    $ error_message = "" ;
    $ email_exp = '/^[A-Za-z0-9._%- < /font > + @[A-Za-z0-9.- < / font > + \ .[A-Za-z[/) ;

    if (! preg_match ( $ email_exp , $ email )) {
        $ error_message . = 'L'adresse e-mail que vous avez saisie ne semble pas être valide. <br>' ; }


    $ string_exp = "/ ^ [A-Za-z .'-] + $ /" ;

    if (! preg_match ( $ string_exp , $ name )) {
        $ error_message . = 'Le nom que vous avez entré ne semble pas être valide. <br>' ; }

    if ( strlen ( $ message ) < 2 ) {
        $ error_message . = 'Le message que vous avez entré ne semble pas valide. <br>' ; }


    if ( strlen ( $ message_erreur ) > 0 ) {
        problème ( $ message_erreur ); }


    $ email_message = "Détails du formulaire ci-dessous. \ n \ n" ;

    function clean_string ( $ string ) {
        $ bad = array ( "content-type" , "bcc:" , "to:" , "cc:" , "href" ); return str_replace ( $ bad , "" , $ string ); }


    $ email_message . = "Nom:" . clean_string ( $ nom ) . "\ n" ;
    $ email_message . = "E-mail:" . clean_string ( $ email ) . "\ n" ;
    $ email_message . = "Message:" . clean_string ( $ message ) . "\ n" ;

    // crée des en-têtes d'e-mail
    $ headers = 'From:' . $ email . "\ r \ n" . «Répondre à:» . $ email . "\ r \ n" . 'X-Mailer: PHP /' . phpversion (); @mail ( $ email_to , $ email_subject , $ email_message , $ headers ); ?>



    <! - inclure votre message de réussite ci-dessous ->

    Merci de nous contacter. Nous vous recontacterons très prochainement.

 <? php
} ?>