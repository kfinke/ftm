<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ftm".
 *
 * Auto generated 16-04-2013 17:23
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FTM - Fluid Template Manager',
	'description' => 'FTM - Fluid Template Manager',
	'category' => 'Backend Modules',
	'author' => 'Thomas Deuling - typo3@coding.ms',
	'author_email' => 'typo3@coding.ms',
	'author_company' => 'coding.ms - www.coding.ms',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '4.7.7',
			'fluid' => '4.7.7',
			't3_less' => '1.0.7',
			't3editor' => '4.7.7',
			'static_info_tables' => '2.3.1',
			'gridelements' => '1.4.0',
			'typo3' => '6.1.0-6.2.99',
            //'sassify' => '1.2.2'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:182:{s:16:"ext_autoload.php";s:4:"3975";s:21:"ext_conf_template.txt";s:4:"c350";s:12:"ext_icon.gif";s:4:"d335";s:17:"ext_localconf.php";s:4:"0355";s:14:"ext_tables.php";s:4:"b172";s:14:"ext_tables.sql";s:4:"2662";s:34:"Classes/Backend/InformationRow.php";s:4:"2eb5";s:48:"Classes/Controller/TemplateManagerController.php";s:4:"f473";s:38:"Classes/Domain/Model/BackendLayout.php";s:4:"b2f4";s:35:"Classes/Domain/Model/GridLayout.php";s:4:"8062";s:30:"Classes/Domain/Model/Pages.php";s:4:"d916";s:36:"Classes/Domain/Model/SysTemplate.php";s:4:"a0ef";s:33:"Classes/Domain/Model/Template.php";s:4:"9fad";s:39:"Classes/Domain/Model/TemplateConfig.php";s:4:"fef4";s:36:"Classes/Domain/Model/TemplateExt.php";s:4:"0798";s:42:"Classes/Domain/Model/TemplateExtT3Less.php";s:4:"72bc";s:47:"Classes/Domain/Model/TemplateExtT3LessFiles.php";s:4:"f316";s:38:"Classes/Domain/Model/TemplateFluid.php";s:4:"266f";s:41:"Classes/Domain/Model/TemplateLanguage.php";s:4:"20aa";s:45:"Classes/Domain/Model/TemplateLessVariable.php";s:4:"e6d4";s:39:"Classes/Domain/Model/TemplateMarker.php";s:4:"2faa";s:46:"Classes/Domain/Model/TemplateMenuContainer.php";s:4:"d97e";s:43:"Classes/Domain/Model/TemplateMenuObject.php";s:4:"8226";s:42:"Classes/Domain/Model/TemplateMenuState.php";s:4:"243e";s:37:"Classes/Domain/Model/TemplateMeta.php";s:4:"f5b9";s:53:"Classes/Domain/Repository/BackendLayoutRepository.php";s:4:"78dd";s:50:"Classes/Domain/Repository/GridLayoutRepository.php";s:4:"6364";s:45:"Classes/Domain/Repository/PagesRepository.php";s:4:"aaf3";s:51:"Classes/Domain/Repository/SysTemplateRepository.php";s:4:"f612";s:48:"Classes/Domain/Repository/TemplateRepository.php";s:4:"5dbd";s:27:"Classes/Hooks/CacheMenu.php";s:4:"7376";s:26:"Classes/Service/Backup.php";s:4:"e7b1";s:30:"Classes/Service/ClearCache.php";s:4:"d5c6";s:25:"Classes/Service/Fluid.php";s:4:"f1ee";s:25:"Classes/Service/Pages.php";s:4:"d5b5";s:35:"Classes/Service/PluginConnector.php";s:4:"fc61";s:33:"Classes/Service/PluginService.php";s:4:"b2cc";s:31:"Classes/Service/SysTemplate.php";s:4:"c29c";s:37:"Classes/Service/TemplateDirectory.php";s:4:"3f28";s:25:"Classes/Service/Tyaml.php";s:4:"bc5b";s:30:"Classes/Service/TypoScript.php";s:4:"f090";s:40:"Classes/ViewHelper/ContentViewHelper.php";s:4:"b33c";s:41:"Classes/ViewHelper/FluidRowViewHelper.php";s:4:"bf1b";s:48:"Classes/ViewHelper/LessVariableRowViewHelper.php";s:4:"3725";s:42:"Classes/ViewHelper/MarkerRowViewHelper.php";s:4:"8a65";s:46:"Classes/ViewHelper/TypoScriptRowViewHelper.php";s:4:"902a";s:48:"Classes/ViewHelper/Be/Buttons/IconViewHelper.php";s:4:"3345";s:30:"Configuration/TCA/Template.php";s:4:"919e";s:36:"Configuration/TCA/TemplateConfig.php";s:4:"db3a";s:33:"Configuration/TCA/TemplateExt.php";s:4:"7367";s:39:"Configuration/TCA/TemplateExtT3Less.php";s:4:"fe08";s:44:"Configuration/TCA/TemplateExtT3LessFiles.php";s:4:"3808";s:35:"Configuration/TCA/TemplateFluid.php";s:4:"cee9";s:38:"Configuration/TCA/TemplateLanguage.php";s:4:"3613";s:42:"Configuration/TCA/TemplateLessVariable.php";s:4:"0147";s:37:"Configuration/TCA/TemplateManager.php";s:4:"c33e";s:36:"Configuration/TCA/TemplateMarker.php";s:4:"e461";s:43:"Configuration/TCA/TemplateMenuContainer.php";s:4:"4f8e";s:40:"Configuration/TCA/TemplateMenuObject.php";s:4:"dd67";s:39:"Configuration/TCA/TemplateMenuState.php";s:4:"2adb";s:34:"Configuration/TCA/TemplateMeta.php";s:4:"ecd4";s:38:"Configuration/TypoScript/constants.txt";s:4:"5934";s:34:"Configuration/TypoScript/setup.txt";s:4:"74e0";s:40:"Resources/Private/Language/locallang.xml";s:4:"7fbd";s:73:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_template.xml";s:4:"65a4";s:79:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templateconfig.xml";s:4:"faec";s:76:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templateext.xml";s:4:"5e88";s:82:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templateextt3less.xml";s:4:"5950";s:87:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templateextt3lessfiles.xml";s:4:"5df7";s:78:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatefluid.xml";s:4:"079b";s:82:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatelanguages.xml";s:4:"2042";s:85:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatelessvariable.xml";s:4:"636a";s:80:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatemanager.xml";s:4:"8d67";s:86:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatemenucontainer.xml";s:4:"1ee4";s:83:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatemenuobject.xml";s:4:"6e14";s:82:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatemenustate.xml";s:4:"c5ec";s:77:"Resources/Private/Language/locallang_csh_tx_ftm_domain_model_templatemeta.xml";s:4:"57d3";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"441f";s:44:"Resources/Private/Language/locallang_ftm.xml";s:4:"cf7c";s:38:"Resources/Private/Layouts/Default.html";s:4:"88b6";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"6618";s:53:"Resources/Private/Partials/TemplateManager/Debug.html";s:4:"792b";s:58:"Resources/Private/Partials/TemplateManager/Disclaimer.html";s:4:"a771";s:53:"Resources/Private/Partials/TemplateManager/Fluid.html";s:4:"8d1d";s:52:"Resources/Private/Partials/TemplateManager/Info.html";s:4:"b248";s:56:"Resources/Private/Partials/TemplateManager/Language.html";s:4:"f6e1";s:52:"Resources/Private/Partials/TemplateManager/Less.html";s:4:"78c1";s:54:"Resources/Private/Partials/TemplateManager/Marker.html";s:4:"2907";s:67:"Resources/Private/Partials/TemplateManager/NoTemplateAvailable.html";s:4:"4d30";s:56:"Resources/Private/Partials/TemplateManager/Template.html";s:4:"6982";s:55:"Resources/Private/Partials/TemplateManager/Twitter.html";s:4:"d6eb";s:58:"Resources/Private/Partials/TemplateManager/TypoScript.html";s:4:"5bd8";s:52:"Resources/Private/Partials/TemplateManager/Wiki.html";s:4:"dc0b";s:53:"Resources/Private/Templates/TemplateManager/List.html";s:4:"8865";s:37:"Resources/Public/Icons/arrow_down.png";s:4:"4503";s:37:"Resources/Public/Icons/clearCache.png";s:4:"63dd";s:31:"Resources/Public/Icons/edit.png";s:4:"4cfb";s:32:"Resources/Public/Icons/empty.png";s:4:"e7cd";s:32:"Resources/Public/Icons/fluid.png";s:4:"455f";s:41:"Resources/Public/Icons/fluid_download.png";s:4:"86d8";s:37:"Resources/Public/Icons/fluid_edit.png";s:4:"6690";s:44:"Resources/Public/Icons/fluid_information.png";s:4:"3750";s:40:"Resources/Public/Icons/fluid_refresh.png";s:4:"88b7";s:38:"Resources/Public/Icons/information.png";s:4:"3750";s:39:"Resources/Public/Icons/lessVariable.png";s:4:"c34d";s:44:"Resources/Public/Icons/lessVariable_edit.png";s:4:"8e06";s:47:"Resources/Public/Icons/lessVariable_refresh.png";s:4:"5081";s:33:"Resources/Public/Icons/marker.png";s:4:"e140";s:41:"Resources/Public/Icons/multi-language.gif";s:4:"3199";s:37:"Resources/Public/Icons/page_white.png";s:4:"a311";s:41:"Resources/Public/Icons/page_white_put.png";s:4:"21b9";s:33:"Resources/Public/Icons/pencil.png";s:4:"4cfb";s:34:"Resources/Public/Icons/refresh.png";s:4:"0e71";s:35:"Resources/Public/Icons/relation.gif";s:4:"1174";s:38:"Resources/Public/Icons/templateext.png";s:4:"94b0";s:29:"Resources/Public/Icons/ts.png";s:4:"b2be";s:38:"Resources/Public/Icons/ts_download.png";s:4:"8e4f";s:41:"Resources/Public/Icons/ts_information.png";s:4:"3750";s:37:"Resources/Public/Icons/ts_refresh.png";s:4:"de1e";s:55:"Resources/Public/Icons/tx_ftm_domain_model_template.gif";s:4:"eb05";s:61:"Resources/Public/Icons/tx_ftm_domain_model_templateconfig.gif";s:4:"435c";s:58:"Resources/Public/Icons/tx_ftm_domain_model_templateext.gif";s:4:"97b8";s:60:"Resources/Public/Icons/tx_ftm_domain_model_templatefluid.gif";s:4:"ec67";s:64:"Resources/Public/Icons/tx_ftm_domain_model_templatelanguages.gif";s:4:"d516";s:67:"Resources/Public/Icons/tx_ftm_domain_model_templatelessvariable.gif";s:4:"0e88";s:62:"Resources/Public/Icons/tx_ftm_domain_model_templatemanager.gif";s:4:"d335";s:61:"Resources/Public/Icons/tx_ftm_domain_model_templatemarker.gif";s:4:"d5f7";s:68:"Resources/Public/Icons/tx_ftm_domain_model_templatemenucontainer.gif";s:4:"465d";s:59:"Resources/Public/Icons/tx_ftm_domain_model_templatemeta.gif";s:4:"f886";s:53:"Tests/Unit/Controller/FluidTemplateControllerTest.php";s:4:"a928";s:60:"Tests/Unit/Controller/FluidTemplateManagerControllerTest.php";s:4:"7823";s:51:"Tests/Unit/Domain/Model/FluidTemplateConfigTest.php";s:4:"6582";s:54:"Tests/Unit/Domain/Model/FluidTemplateLanguagesTest.php";s:4:"4dd2";s:52:"Tests/Unit/Domain/Model/FluidTemplateManagerTest.php";s:4:"6ec7";s:49:"Tests/Unit/Domain/Model/FluidTemplateMetaTest.php";s:4:"45da";s:45:"Tests/Unit/Domain/Model/FluidTemplateTest.php";s:4:"e0f7";s:14:"doc/manual.sxw";s:4:"7fd4";s:42:"res/template/ext/gridelements/flexForm.xml";s:4:"87cd";s:47:"res/template/ext/gridelements/flexFormTyaml.xml";s:4:"07f1";s:29:"res/uploads/media/c-empty.jpg";s:4:"519c";s:31:"res/uploads/media/c-special.jpg";s:4:"f41c";s:33:"res/uploads/media/c-startsite.jpg";s:4:"d710";s:61:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_C.jpg";s:4:"eb27";s:62:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_CM.jpg";s:4:"d9d3";s:63:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_CMS.jpg";s:4:"4a34";s:62:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_CS.jpg";s:4:"54f5";s:63:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_CSM.jpg";s:4:"d1bb";s:62:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_MC.jpg";s:4:"76d4";s:63:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_MCS.jpg";s:4:"f7b1";s:63:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_MSC.jpg";s:4:"8565";s:62:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_SC.jpg";s:4:"20b8";s:63:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_SCM.jpg";s:4:"f11d";s:63:"res/uploads/media/FTM_1.0.0_-_TYAML_3.0.0_BackendLayout_SMC.jpg";s:4:"8f85";s:70:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_100.jpg";s:4:"4c25";s:81:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-20-20-20-20.jpg";s:4:"b055";s:78:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-20-20-40.jpg";s:4:"89a7";s:78:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-20-40-20.jpg";s:4:"5d04";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-20-60.jpg";s:4:"37be";s:78:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-40-20-20.jpg";s:4:"d308";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-40-40.jpg";s:4:"e451";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-60-20.jpg";s:4:"6163";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_20-80.jpg";s:4:"9a41";s:78:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_25-25-25-25.jpg";s:4:"6787";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_25-25-50.jpg";s:4:"2cbc";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_25-50-25.jpg";s:4:"d380";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_25-75.jpg";s:4:"7087";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_33-33-33.jpg";s:4:"6977";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_33-66.jpg";s:4:"0ccf";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_38-62.jpg";s:4:"a246";s:78:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_40-20-20-20.jpg";s:4:"004d";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_40-20-40.jpg";s:4:"6477";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_40-40-20.jpg";s:4:"52ba";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_40-60.jpg";s:4:"9f24";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_50-25-25.jpg";s:4:"6cdf";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_50-50.jpg";s:4:"2d3f";s:75:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_60-20-20.jpg";s:4:"a3e6";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_60-40.jpg";s:4:"d96b";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_62-38.jpg";s:4:"d2c6";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_66-33.jpg";s:4:"3ced";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_75-25.jpg";s:4:"db20";s:72:"res/uploads/tx_gridelements/FTM_1.0.0_-_TYAML_3.0.0_GridLayout_80-20.jpg";s:4:"97ba";s:38:"res/uploads/tx_gridelements/index.html";s:4:"4174";}',
);

?>