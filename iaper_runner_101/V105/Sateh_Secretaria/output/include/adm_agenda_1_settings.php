<?php
$tdataadm_agenda_1 = array();
$tdataadm_agenda_1[".searchableFields"] = array();
$tdataadm_agenda_1[".ShortName"] = "adm_agenda_1";
$tdataadm_agenda_1[".OwnerID"] = "age_usu_id";
$tdataadm_agenda_1[".OriginalTable"] = "adm_agenda_1";


$tdataadm_agenda_1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_agenda_1[".originalPagesByType"] = $tdataadm_agenda_1[".pagesByType"];
$tdataadm_agenda_1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_agenda_1[".originalPages"] = $tdataadm_agenda_1[".pages"];
$tdataadm_agenda_1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_agenda_1[".originalDefaultPages"] = $tdataadm_agenda_1[".defaultPages"];

//	field labels
$fieldLabelsadm_agenda_1 = array();
$fieldToolTipsadm_agenda_1 = array();
$pageTitlesadm_agenda_1 = array();
$placeHoldersadm_agenda_1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_agenda_1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_id"] = "Id";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_id"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_id"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_usu_id"] = "Profissional";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_usu_id"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_usu_id"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_config_id"] = "Tipo Agenda";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_config_id"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_config_id"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_dia_sem"] = "Dia da Semana";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_dia_sem"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_dia_sem"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_data_att"] = "Data";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_data_att"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_data_att"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_time_att"] = "Hora";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_time_att"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_time_att"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_data_in"] = "Data In";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_data_in"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_data_in"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_acao"] = "Ação";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_acao"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_acao"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_retorno_data_time"] = "Retorno ";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_retorno_data_time"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_retorno_data_time"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_tipo_pagamento"] = "Tipo Pagamento";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_tipo_pagamento"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_tipo_pagamento"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_anotacoes"] = "Anotações";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_anotacoes"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_anotacoes"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_1"] = "Att Campo 1";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_1"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_1"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_2"] = "Att Campo 2";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_2"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_2"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_3"] = "Att Campo 3";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_3"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_3"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_4"] = "Att Campo 4";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_4"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_att_campo_4"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_deletado"] = "Deletado";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_deletado"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_deletado"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_Paciente"] = "Paciente";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_Paciente"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_Paciente"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_Link"] = "Link Consulta";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_Link"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_Link"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_Valor"] = "Valor";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_Valor"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_Valor"] = "";
	$fieldLabelsadm_agenda_1["Portuguese(Brazil)"]["age_Status_Recebimento"] = "Status Recebimento";
	$fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]["age_Status_Recebimento"] = "";
	$placeHoldersadm_agenda_1["Portuguese(Brazil)"]["age_Status_Recebimento"] = "";
	if (count($fieldToolTipsadm_agenda_1["Portuguese(Brazil)"]))
		$tdataadm_agenda_1[".isUseToolTips"] = true;
}


	$tdataadm_agenda_1[".NCSearch"] = true;



$tdataadm_agenda_1[".shortTableName"] = "adm_agenda_1";
$tdataadm_agenda_1[".nSecOptions"] = 1;

$tdataadm_agenda_1[".mainTableOwnerID"] = "age_usu_id";
$tdataadm_agenda_1[".entityType"] = 0;
$tdataadm_agenda_1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_agenda_1[".strOriginalTableName"] = "adm_agenda_1";

	



$tdataadm_agenda_1[".showAddInPopup"] = false;

$tdataadm_agenda_1[".showEditInPopup"] = false;

$tdataadm_agenda_1[".showViewInPopup"] = false;

$tdataadm_agenda_1[".listAjax"] = false;
//	temporary
//$tdataadm_agenda_1[".listAjax"] = false;

	$tdataadm_agenda_1[".audit"] = false;

	$tdataadm_agenda_1[".locking"] = false;


$pages = $tdataadm_agenda_1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_agenda_1[".edit"] = true;
	$tdataadm_agenda_1[".afterEditAction"] = 1;
	$tdataadm_agenda_1[".closePopupAfterEdit"] = 1;
	$tdataadm_agenda_1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_agenda_1[".add"] = true;
$tdataadm_agenda_1[".afterAddAction"] = 1;
$tdataadm_agenda_1[".closePopupAfterAdd"] = 1;
$tdataadm_agenda_1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_agenda_1[".list"] = true;
}



$tdataadm_agenda_1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_agenda_1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_agenda_1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_agenda_1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_agenda_1[".printFriendly"] = true;
}



$tdataadm_agenda_1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_agenda_1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_agenda_1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_agenda_1[".isUseAjaxSuggest"] = true;

$tdataadm_agenda_1[".rowHighlite"] = true;



												

$tdataadm_agenda_1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_agenda_1[".buttonsAdded"] = false;

$tdataadm_agenda_1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_agenda_1[".isUseTimeForSearch"] = true;


$tdataadm_agenda_1[".badgeColor"] = "c0c0c0";


$tdataadm_agenda_1[".allSearchFields"] = array();
$tdataadm_agenda_1[".filterFields"] = array();
$tdataadm_agenda_1[".requiredSearchFields"] = array();

$tdataadm_agenda_1[".googleLikeFields"] = array();
$tdataadm_agenda_1[".googleLikeFields"][] = "age_dia_sem";
$tdataadm_agenda_1[".googleLikeFields"][] = "age_data_att";
$tdataadm_agenda_1[".googleLikeFields"][] = "age_time_att";
$tdataadm_agenda_1[".googleLikeFields"][] = "age_data_in";
$tdataadm_agenda_1[".googleLikeFields"][] = "age_Paciente";
$tdataadm_agenda_1[".googleLikeFields"][] = "age_Link";
$tdataadm_agenda_1[".googleLikeFields"][] = "age_Valor";
$tdataadm_agenda_1[".googleLikeFields"][] = "age_Status_Recebimento";



$tdataadm_agenda_1[".tableType"] = "list";

$tdataadm_agenda_1[".printerPageOrientation"] = 0;
$tdataadm_agenda_1[".nPrinterPageScale"] = 100;

$tdataadm_agenda_1[".nPrinterSplitRecords"] = 40;

$tdataadm_agenda_1[".geocodingEnabled"] = false;










$tdataadm_agenda_1[".pageSize"] = 20;

$tdataadm_agenda_1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_agenda_1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_agenda_1[".orderindexes"] = array();


$tdataadm_agenda_1[".sqlHead"] = "SELECT age_id,  	age_usu_id,  	age_config_id,  	age_dia_sem,  	age_data_att,  	age_time_att,  	age_data_in,  	age_acao,  	age_retorno_data_time,  	age_tipo_pagamento,  	age_anotacoes,  	age_att_campo_1,  	age_att_campo_2,  	age_att_campo_3,  	age_att_campo_4,  	age_deletado,  	age_Paciente,  	age_Link,  	age_Valor,  	age_Status_Recebimento";
$tdataadm_agenda_1[".sqlFrom"] = "FROM adm_agenda_1";
$tdataadm_agenda_1[".sqlWhereExpr"] = "";
$tdataadm_agenda_1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_agenda_1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_agenda_1[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_agenda_1[".highlightSearchResults"] = true;

$tableKeysadm_agenda_1 = array();
$tableKeysadm_agenda_1[] = "age_id";
$tdataadm_agenda_1[".Keys"] = $tableKeysadm_agenda_1;


$tdataadm_agenda_1[".hideMobileList"] = array();




//	age_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "age_id";
	$fdata["GoodName"] = "age_id";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "age_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_id"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_id";
//	age_usu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "age_usu_id";
	$fdata["GoodName"] = "age_usu_id";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_usu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "age_usu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_usu_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_usuarios";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "usu_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "nome";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_usu_id"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_usu_id";
//	age_config_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "age_config_id";
	$fdata["GoodName"] = "age_config_id";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_config_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "age_config_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_config_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_agenda_config_1";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "agc_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "agc_nome";

	

	
	$edata["LookupOrderBy"] = "agc_nome";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_config_id"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_config_id";
//	age_dia_sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "age_dia_sem";
	$fdata["GoodName"] = "age_dia_sem";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_dia_sem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_dia_sem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_dia_sem";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "seg";
	$edata["LookupValues"][] = "ter";
	$edata["LookupValues"][] = "qua";
	$edata["LookupValues"][] = "qui";
	$edata["LookupValues"][] = "sex";
	$edata["LookupValues"][] = "sab";
	$edata["LookupValues"][] = "dom";

	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_dia_sem"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_dia_sem";
//	age_data_att
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "age_data_att";
	$fdata["GoodName"] = "age_data_att";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_data_att");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "age_data_att";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_data_att";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_data_att"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_data_att";
//	age_time_att
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "age_time_att";
	$fdata["GoodName"] = "age_time_att";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_time_att");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "age_time_att";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_time_att";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_horarios";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Horario";
	$edata["LinkFieldType"] = 134;
	$edata["DisplayField"] = "Horario";

	

	
	$edata["LookupOrderBy"] = "Horario";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_horarios";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Horario";
	$edata["LinkFieldType"] = 134;
	$edata["DisplayField"] = "Horario";

	

	
	$edata["LookupOrderBy"] = "Horario";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_horarios";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Horario";
	$edata["LinkFieldType"] = 134;
	$edata["DisplayField"] = "Horario";

	

	
	$edata["LookupOrderBy"] = "Horario";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_time_att"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_time_att";
//	age_data_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "age_data_in";
	$fdata["GoodName"] = "age_data_in";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_data_in");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "age_data_in";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_data_in";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_data_in"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_data_in";
//	age_acao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "age_acao";
	$fdata["GoodName"] = "age_acao";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_acao");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_acao";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_acao";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_acao"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_acao";
//	age_retorno_data_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "age_retorno_data_time";
	$fdata["GoodName"] = "age_retorno_data_time";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_retorno_data_time");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_retorno_data_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_retorno_data_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_parametros_config";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Chave";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Chave";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_retorno_data_time"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_retorno_data_time";
//	age_tipo_pagamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "age_tipo_pagamento";
	$fdata["GoodName"] = "age_tipo_pagamento";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_tipo_pagamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_tipo_pagamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_tipo_pagamento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_agenda_tipos_recebimento";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "atr_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "atr_nome";

	

	
	$edata["LookupOrderBy"] = "atr_nome";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_tipo_pagamento"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_tipo_pagamento";
//	age_anotacoes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "age_anotacoes";
	$fdata["GoodName"] = "age_anotacoes";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_anotacoes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_anotacoes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_anotacoes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_anotacoes"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_anotacoes";
//	age_att_campo_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "age_att_campo_1";
	$fdata["GoodName"] = "age_att_campo_1";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_att_campo_1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_att_campo_1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_att_campo_1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_att_campo_1"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_att_campo_1";
//	age_att_campo_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "age_att_campo_2";
	$fdata["GoodName"] = "age_att_campo_2";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_att_campo_2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_att_campo_2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_att_campo_2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_att_campo_2"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_att_campo_2";
//	age_att_campo_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "age_att_campo_3";
	$fdata["GoodName"] = "age_att_campo_3";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_att_campo_3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_att_campo_3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_att_campo_3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_att_campo_3"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_att_campo_3";
//	age_att_campo_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "age_att_campo_4";
	$fdata["GoodName"] = "age_att_campo_4";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_att_campo_4");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_att_campo_4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_att_campo_4";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_att_campo_4"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_att_campo_4";
//	age_deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "age_deletado";
	$fdata["GoodName"] = "age_deletado";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_deletado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "age_deletado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_deletado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_deletado"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_deletado";
//	age_Paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "age_Paciente";
	$fdata["GoodName"] = "age_Paciente";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_Paciente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "age_Paciente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_Paciente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "adm_pacientes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idPaciente";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_Paciente"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_Paciente";
//	age_Link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "age_Link";
	$fdata["GoodName"] = "age_Link";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_Link");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_Link";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_Link";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_Link"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_Link";
//	age_Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "age_Valor";
	$fdata["GoodName"] = "age_Valor";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_Valor");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "age_Valor";

		$fdata["sourceSingle"] = "age_Valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_Valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_Valor"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_Valor";
//	age_Status_Recebimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "age_Status_Recebimento";
	$fdata["GoodName"] = "age_Status_Recebimento";
	$fdata["ownerTable"] = "adm_agenda_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_1","age_Status_Recebimento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "age_Status_Recebimento";

		$fdata["sourceSingle"] = "age_Status_Recebimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_Status_Recebimento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_agenda_1["age_Status_Recebimento"] = $fdata;
		$tdataadm_agenda_1[".searchableFields"][] = "age_Status_Recebimento";


$tables_data["adm_agenda_1"]=&$tdataadm_agenda_1;
$field_labels["adm_agenda_1"] = &$fieldLabelsadm_agenda_1;
$fieldToolTips["adm_agenda_1"] = &$fieldToolTipsadm_agenda_1;
$placeHolders["adm_agenda_1"] = &$placeHoldersadm_agenda_1;
$page_titles["adm_agenda_1"] = &$pageTitlesadm_agenda_1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_agenda_1"] = array();
//	adm_pagamento_avulso
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_pagamento_avulso";
		$detailsParam["dOriginalTable"] = "adm_pagamento_avulso";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_pagamento_avulso";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_pagamento_avulso");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_agenda_1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_agenda_1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_agenda_1"][$dIndex]["masterKeys"][]="age_id";

				$detailsTablesData["adm_agenda_1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_agenda_1"][$dIndex]["detailKeys"][]="idConsulta";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_agenda_1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_pacientes1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_agenda_1"][0] = $masterParams;
				$masterTablesData["adm_agenda_1"][0]["masterKeys"] = array();
	$masterTablesData["adm_agenda_1"][0]["masterKeys"][]="idPaciente";
				$masterTablesData["adm_agenda_1"][0]["detailKeys"] = array();
	$masterTablesData["adm_agenda_1"][0]["detailKeys"][]="age_Paciente";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_agenda_1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "age_id,  	age_usu_id,  	age_config_id,  	age_dia_sem,  	age_data_att,  	age_time_att,  	age_data_in,  	age_acao,  	age_retorno_data_time,  	age_tipo_pagamento,  	age_anotacoes,  	age_att_campo_1,  	age_att_campo_2,  	age_att_campo_3,  	age_att_campo_4,  	age_deletado,  	age_Paciente,  	age_Link,  	age_Valor,  	age_Status_Recebimento";
$proto0["m_strFrom"] = "FROM adm_agenda_1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "age_id",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto6["m_sql"] = "age_id";
$proto6["m_srcTableName"] = "adm_agenda_1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "age_usu_id",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto8["m_sql"] = "age_usu_id";
$proto8["m_srcTableName"] = "adm_agenda_1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "age_config_id",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto10["m_sql"] = "age_config_id";
$proto10["m_srcTableName"] = "adm_agenda_1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "age_dia_sem",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto12["m_sql"] = "age_dia_sem";
$proto12["m_srcTableName"] = "adm_agenda_1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "age_data_att",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto14["m_sql"] = "age_data_att";
$proto14["m_srcTableName"] = "adm_agenda_1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "age_time_att",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto16["m_sql"] = "age_time_att";
$proto16["m_srcTableName"] = "adm_agenda_1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "age_data_in",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto18["m_sql"] = "age_data_in";
$proto18["m_srcTableName"] = "adm_agenda_1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "age_acao",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto20["m_sql"] = "age_acao";
$proto20["m_srcTableName"] = "adm_agenda_1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "age_retorno_data_time",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto22["m_sql"] = "age_retorno_data_time";
$proto22["m_srcTableName"] = "adm_agenda_1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "age_tipo_pagamento",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto24["m_sql"] = "age_tipo_pagamento";
$proto24["m_srcTableName"] = "adm_agenda_1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "age_anotacoes",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto26["m_sql"] = "age_anotacoes";
$proto26["m_srcTableName"] = "adm_agenda_1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "age_att_campo_1",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto28["m_sql"] = "age_att_campo_1";
$proto28["m_srcTableName"] = "adm_agenda_1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "age_att_campo_2",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto30["m_sql"] = "age_att_campo_2";
$proto30["m_srcTableName"] = "adm_agenda_1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "age_att_campo_3",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto32["m_sql"] = "age_att_campo_3";
$proto32["m_srcTableName"] = "adm_agenda_1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "age_att_campo_4",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto34["m_sql"] = "age_att_campo_4";
$proto34["m_srcTableName"] = "adm_agenda_1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "age_deletado",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto36["m_sql"] = "age_deletado";
$proto36["m_srcTableName"] = "adm_agenda_1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "age_Paciente",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto38["m_sql"] = "age_Paciente";
$proto38["m_srcTableName"] = "adm_agenda_1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "age_Link",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto40["m_sql"] = "age_Link";
$proto40["m_srcTableName"] = "adm_agenda_1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "age_Valor",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto42["m_sql"] = "age_Valor";
$proto42["m_srcTableName"] = "adm_agenda_1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "age_Status_Recebimento",
	"m_strTable" => "adm_agenda_1",
	"m_srcTableName" => "adm_agenda_1"
));

$proto44["m_sql"] = "age_Status_Recebimento";
$proto44["m_srcTableName"] = "adm_agenda_1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "adm_agenda_1";
$proto47["m_srcTableName"] = "adm_agenda_1";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "age_id";
$proto47["m_columns"][] = "age_usu_id";
$proto47["m_columns"][] = "age_config_id";
$proto47["m_columns"][] = "age_dia_sem";
$proto47["m_columns"][] = "age_data_att";
$proto47["m_columns"][] = "age_time_att";
$proto47["m_columns"][] = "age_data_in";
$proto47["m_columns"][] = "age_acao";
$proto47["m_columns"][] = "age_retorno_data_time";
$proto47["m_columns"][] = "age_tipo_pagamento";
$proto47["m_columns"][] = "age_anotacoes";
$proto47["m_columns"][] = "age_att_campo_1";
$proto47["m_columns"][] = "age_att_campo_2";
$proto47["m_columns"][] = "age_att_campo_3";
$proto47["m_columns"][] = "age_att_campo_4";
$proto47["m_columns"][] = "age_deletado";
$proto47["m_columns"][] = "age_Paciente";
$proto47["m_columns"][] = "age_Link";
$proto47["m_columns"][] = "age_Valor";
$proto47["m_columns"][] = "age_Status_Recebimento";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "adm_agenda_1";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "adm_agenda_1";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_agenda_1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_agenda_1 = createSqlQuery_adm_agenda_1();


	
		;

																				

$tdataadm_agenda_1[".sqlquery"] = $queryData_adm_agenda_1;



$tableEvents["adm_agenda_1"] = new eventsBase;
$tdataadm_agenda_1[".hasEvents"] = false;

?>