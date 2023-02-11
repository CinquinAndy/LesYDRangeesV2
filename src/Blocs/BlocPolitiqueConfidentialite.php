<?php

namespace App\Blocs;

use Extended\ACF\Fields\Group;
use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Link;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Text;
use Extended\ACF\Fields\Textarea;
use Extended\ACF\Fields\WysiwygEditor;

class BlocPolitiqueConfidentialite extends Bloc
{
    public static $name = 'politiqueconfidentialite';
    public static $label = 'Politique Confidentialite';
    public static $icon = 'lock';

    protected static function fields(): array
    {
        return [
            Repeater::make('Politique de confidentialité', 'politic')->required()->fields([
                Text::make('Titre', 'title')->required()->placeholder("Titre du bloc"),
                WysiwygEditor::make('Description', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual')
            ])
        ];
    }
}

?>
