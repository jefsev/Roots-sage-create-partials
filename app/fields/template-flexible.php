<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flexible = new FieldsBuilder('flexible', [ 
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$flexible
    ->setLocation('page_template', '==', 'views/template-flexible.blade.php');


// Load content partials
$flexible_layout = get_field_partial('flexible-layout');   



$flexible
    ->addFields($flexible_layout)
    
;return $flexible;