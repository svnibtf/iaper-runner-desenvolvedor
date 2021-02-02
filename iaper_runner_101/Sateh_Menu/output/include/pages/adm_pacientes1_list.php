<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'delete' => true,
'updateSelected' => false,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 1 ),
'details' => array( 'adm_agenda_1' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => false,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array( 'Nome',
'Email',
'Celular' ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'idPaciente' => array( 'totalsType' => '' ),
'Nome' => array( 'totalsType' => '' ),
'Email' => array( 'totalsType' => '' ),
'Senha' => array( 'totalsType' => '' ),
'Endereco' => array( 'totalsType' => '' ),
'Bairro' => array( 'totalsType' => '' ),
'Cidade' => array( 'totalsType' => '' ),
'Estado' => array( 'totalsType' => '' ),
'Cep' => array( 'totalsType' => '' ),
'Celular' => array( 'totalsType' => '' ),
'Whats' => array( 'totalsType' => '' ),
'Tel_Residencial' => array( 'totalsType' => '' ),
'Data_Inicio' => array( 'totalsType' => '' ),
'Sexo' => array( 'totalsType' => '' ),
'Sintomas' => array( 'totalsType' => '' ),
'Tratamento' => array( 'totalsType' => '' ),
'idProfissional' => array( 'totalsType' => '' ),
'CPF' => array( 'totalsType' => '' ),
'RG' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Nome',
'Email',
'Celular',
'Whats' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'Whats',
'Nome',
'Email',
'Celular' ),
'filterFields' => array( 'Cidade',
'Estado' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'Nome' => array( 'simple_grid_field1',
'simple_grid_field' ),
'Email' => array( 'simple_grid_field2',
'simple_grid_field5' ),
'Celular' => array( 'simple_grid_field3',
'simple_grid_field6' ),
'Whats' => array( 'simple_grid_field4',
'simple_grid_field7' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'filter_panel',
'search_panel' ),
'supertop' => array( 'collapse_button',
'text',
'loginform_login',
'username_button' ),
'above-grid' => array( 'add',
'delete',
'show_search_panel',
'delete_selected',
'hide_search_panel',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'master_info' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field5',
'simple_grid_field2',
'simple_grid_field6',
'simple_grid_field3',
'simple_grid_field7',
'simple_grid_field4',
'details_preview',
'details_preview1',
'grid_edit',
'grid_view',
'grid_checkbox_head',
'grid_checkbox',
'grid_details_link',
'grid_details_link1' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'deleteselected_link',
'searchPanelTopButtons',
'deleteselected_link',
'searchPanelTopButtons',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'logo1' => 'left',
'filter_panel' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'text' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add' => 'above-grid',
'delete' => 'above-grid',
'show_search_panel' => 'above-grid',
'delete_selected' => 'above-grid',
'hide_search_panel' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'master_info' => 'top',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field4' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_details_link' => 'grid',
'grid_details_link1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link1' => array( 'location' => 'grid',
'cellId' => 'cell_details' ) ),
'itemVisiblity' => array( 'filter_panel' => 3,
'search_panel' => 5,
'collapse_button' => 5,
'loginform_login' => 3,
'username_button' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
'search_panel_field' => array( 'search_panel_field1',
'search_panel_field5',
'search_panel_field8',
'search_panel_field18' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'-' => array( '-' ),
'logo' => array( 'logo1' ),
'master_info' => array( 'master_info' ),
'print_details' => array( 'print_details' ),
'changepassword_link' => array( 'changepassword_link' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'delete_selected' => array( 'delete_selected' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1' ),
'delete' => array( 'delete' ),
'text' => array( 'text' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7' ),
'details_preview' => array( 'details_preview',
'details_preview1' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_details_link' => array( 'grid_details_link',
'grid_details_link1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'Nome_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'Email_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'Celular_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'Whats_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'view_column' ),
'items' => array( 'grid_edit',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_details_link',
'grid_details_link1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'Nome_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'Email_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'Celular_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'Whats_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 7,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'filter_panel',
'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'text' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'delete',
'show_search_panel',
'delete_selected',
'hide_search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 7 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'Nome' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'Nome' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'Nome' ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'Email' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'Email' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'Email' ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'Celular' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'Celular' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'Celular' ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'Whats' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'Whats' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'Whats' ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1' ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ) ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_details_link',
'grid_details_link1' ) ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field18',
'search_panel_field8',
'search_panel_field5',
'search_panel_field1' ),
'_flexiblePanel' => true ),
'show_search_panel' => array( 'type' => 'show_search_panel',
'label' => array( 'type' => 0,
'text' => 'Buscar' ) ),
'search_panel_field1' => array( 'field' => 'Celular',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field5' => array( 'field' => 'Email',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field8' => array( 'field' => 'Nome',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add',
'popup' => true ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'-' => array( 'type' => '-' ),
'logo1' => array( 'type' => 'logo' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'usuarios' => 'true' ) ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'tratamento' => true,
'adm_agenda_1' => true ) ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field',
'filter_panel_field1' ) ),
'filter_panel_field' => array( 'field' => 'Cidade',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'Estado',
'type' => 'filter_panel_field' ),
'delete' => array( 'type' => 'delete' ),
'search_panel_field18' => array( 'field' => 'Whats',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'Pacientes',
'type' => 0 ),
'editedByRte' => false,
'bold' => true ),
'simple_grid_field1' => array( 'field' => 'Nome',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'Nome',
'clickSort' => true ),
'simple_grid_field2' => array( 'field' => 'Email',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'Email',
'clickSort' => true ),
'simple_grid_field3' => array( 'field' => 'Celular',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'Celular' ),
'simple_grid_field4' => array( 'field' => 'Whats',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'Whats' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'tratamento',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'adm_agenda_1',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'tratamento',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'grid_details_link1' => array( 'type' => 'grid_details_link',
'table' => 'adm_agenda_1',
'showCount' => false,
'hideIfNone' => false,
'badge' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>