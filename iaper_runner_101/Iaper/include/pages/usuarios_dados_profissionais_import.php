<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'sobre_profissional',
'resumo_formacao',
'diferencial_profissional',
'atendimento_presencial',
'atendimento_online',
'mini_curriculo',
'resumo_formacao_academica',
'resumo_formacao_cursos',
'nome_empresa',
'cnpj',
'ramo_empresa',
'tipo_empresa',
'cep_profissional',
'endereco_profissional_rua',
'endereco_profissional_numero',
'endereco_profissional_complemento',
'pais_empresa',
'estado_empresa',
'municipio_empresa' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'sobre_profissional' => array( 'import_field4' ),
'resumo_formacao' => array( 'import_field5' ),
'diferencial_profissional' => array( 'import_field7' ),
'atendimento_presencial' => array( 'import_field8' ),
'atendimento_online' => array( 'import_field9' ),
'mini_curriculo' => array( 'import_field10' ),
'resumo_formacao_academica' => array( 'import_field11' ),
'resumo_formacao_cursos' => array( 'import_field12' ),
'nome_empresa' => array( 'import_field14' ),
'cnpj' => array( 'import_field15' ),
'ramo_empresa' => array( 'import_field16' ),
'tipo_empresa' => array( 'import_field17' ),
'cep_profissional' => array( 'import_field18' ),
'endereco_profissional_rua' => array( 'import_field19' ),
'endereco_profissional_numero' => array( 'import_field20' ),
'endereco_profissional_complemento' => array( 'import_field21' ),
'pais_empresa' => array( 'import_field24' ),
'estado_empresa' => array( 'import_field25' ),
'municipio_empresa' => array( 'import_field26' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field4',
'import_field5',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field24',
'import_field25',
'import_field26' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid',
'import_field24' => 'grid',
'import_field25' => 'grid',
'import_field26' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field4',
'import_field5',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field24',
'import_field25',
'import_field26' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field4',
'import_field5',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field24',
'import_field25',
'import_field26' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field4' => array( 'field' => 'sobre_profissional',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'resumo_formacao',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'diferencial_profissional',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'atendimento_presencial',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'atendimento_online',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'mini_curriculo',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'resumo_formacao_academica',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'resumo_formacao_cursos',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'nome_empresa',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'cnpj',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'ramo_empresa',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'tipo_empresa',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'cep_profissional',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'endereco_profissional_rua',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'endereco_profissional_numero',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'endereco_profissional_complemento',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'pais_empresa',
'type' => 'import_field' ),
'import_field25' => array( 'field' => 'estado_empresa',
'type' => 'import_field' ),
'import_field26' => array( 'field' => 'municipio_empresa',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>