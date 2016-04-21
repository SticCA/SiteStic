<?php

// Classe permettant d'afficher du HTML

class View
{
    public static function affBloc($BLOC)
    {
        $return = "";
        foreach ($BLOC as $key => $value) {

            $return .= '<div class="row">
                <div class="col-md-12 toggle" data-toggle="toggle'.$key.'">
                    <header>
                        <i class="flaticon-'.$value["media1"].'"></i>
                        <span class="titre-toggle">'.$value["titre"].'</span>
                        <span class="arrow-toggle"><i class="flaticon-arrow483"></i></span>
                    </header>

                    <article class="row" id="toggle'.$key.'">
                        <div class="col-md-12">
                            '.$value["text"].'
                        </div>
                    </article>
                </div>
            </div>';
        }

        return $return;
    }
}