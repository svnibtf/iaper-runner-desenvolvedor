<?php
			$optionsArray = array( 'totals' => array( 'age_id' => array( 'totalsType' => '' ),
'age_usu_id' => array( 'totalsType' => '' ),
'age_config_id' => array( 'totalsType' => '' ),
'age_dia_sem' => array( 'totalsType' => '' ),
'age_data_att' => array( 'totalsType' => '' ),
'age_time_att' => array( 'totalsType' => '' ),
'age_data_in' => array( 'totalsType' => '' ),
'age_acao' => array( 'totalsType' => '' ),
'age_retorno_data_time' => array( 'totalsType' => '' ),
'age_tipo_pagamento' => array( 'totalsType' => '' ),
'age_anotacoes' => array( 'totalsType' => '' ),
'age_att_campo_1' => array( 'totalsType' => '' ),
'age_att_campo_2' => array( 'totalsType' => '' ),
'age_att_campo_3' => array( 'totalsType' => '' ),
'age_att_campo_4' => array( 'totalsType' => '' ),
'age_deletado' => array( 'totalsType' => '' ),
'age_Paciente' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'age_config_id',
'age_dia_sem',
'age_data_att',
'age_time_att',
'age_acao',
'age_retorno_data_time',
'age_tipo_pagamento',
'age_anotacoes',
'age_att_campo_1',
'age_att_campo_2',
'age_att_campo_3',
'age_att_campo_4',
'age_Paciente' ),
'exportFields' => array( 'age_Paciente',
'age_config_id',
'age_dia_sem',
'age_data_att',
'age_time_att',
'age_acao',
'age_retorno_data_time',
'age_tipo_pagamento',
'age_anotacoes',
'age_att_campo_1',
'age_att_campo_2',
'age_att_campo_3',
'age_att_campo_4' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'age_config_id' => array( 'export_field2' ),
'age_dia_sem' => array( 'export_field3' ),
'age_data_att' => array( 'export_field4' ),
'age_time_att' => array( 'export_field5' ),
'age_acao' => array( 'export_field7' ),
'age_retorno_data_time' => array( 'export_field8' ),
'age_tipo_pagamento' => array( 'export_field9' ),
'age_anotacoes' => array( 'export_field10' ),
'age_att_campo_1' => array( 'export_field11' ),
'age_att_campo_2' => array( 'export_field12' ),
'age_att_campo_3' => array( 'export_field13' ),
'age_att_campo_4' => array( 'export_field14' ),
'age_Paciente' => array( 'export_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field2' => array( 'field' => 'age_config_id',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'age_dia_sem',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'age_data_att',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'age_time_att',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'age_acao',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'age_retorno_data_time',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'age_tipo_pagamento',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'age_anotacoes',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'age_att_campo_1',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'age_att_campo_2',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'age_att_campo_3',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'age_att_campo_4',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'age_Paciente',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>