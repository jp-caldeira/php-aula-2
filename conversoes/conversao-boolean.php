<?php

//valores que retornam false:

var_dump( (bool) 0 );

var_dump( (bool) 0.0 );

var_dump( (bool) "" );

var_dump( (bool) "0" );

var_dump( (bool) [] ); // Array vazio

var_dump( (bool) NULL );

//qualquer outro valor retorna true

var_dump( (bool) 1 );

var_dump( (bool) -1 );

var_dump( (bool) 1.5e2 );

var_dump( (bool) 1.5 );

var_dump( (bool) "1" );

var_dump( (bool) "Fulano de Tal");

var_dump( (bool) [1, 2, 3]);
