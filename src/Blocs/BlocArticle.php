<?php

namespace App\Blocs;

use Extended\ACF\Fields\Group;
use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Link;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Text;
use Extended\ACF\Fields\Textarea;
use Extended\ACF\Fields\WysiwygEditor;

class BlocArticle extends Bloc
{
    public static $name = 'article';
    public static $label = 'Article';
    public static $icon = 'admin-post';

    protected static function fields(): array
    {
        return [
            Text::make('Titre', 'title')->required()->placeholder("RENCONTRONS-NOUS !"),
            WysiwygEditor::make('Texte de présentation', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
            Image::make('Image', 'img')->required()
        ];
    }
}

?>
