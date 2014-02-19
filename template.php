<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * sgbuzz theme.
 */


function sgbuzz_more_link ($array)
{
   if (stristr( $array['url'], 'aggregator'))
   {
      return "<div class='more-link'>"
            ."    <a href='http://talento.sg.com.mx/vacantes/show.php' target='_blank'>Más vacantes</a>"
            ."</div>";
          
   }
}


