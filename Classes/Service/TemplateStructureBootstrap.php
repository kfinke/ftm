<?php
namespace CodingMs\Ftm\Service;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Thomas Deuling <typo3@coding.ms>, coding.ms
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Managed alle Aktionen rund um Bootstrap-Datensaetze
 *
 * @package ftm
 * @subpackage Service
 */
class TemplateStructureBootstrap extends TemplateStructure {
    
    protected $fluidLayouts = array(
        'default'   => 'default.html',
        'empty'     => 'empty.html',
        'startsite' => 'startsite.html',
    );
    
    protected $fluidTemplates = array(
        'c'     => 'c.html',
        'cm'    => 'cm.html',
        'cms'   => 'cms.html',
        'cs'    => 'cs.html',
        'csm'   => 'csm.html',
        'empty' => 'empty.html',
        'mc'    => 'mc.html',
        'mcs'   => 'mcs.html',
        'msc'   => 'msc.html',
        'sc'    => 'sc.html',
        'scm'   => 'scm.html',
        'smc'   => 'smc.html',
        'special'   => 'special.html',
        'startsite' => 'startsite.html',
    );
    
    protected $fluidPartials = array(
        'mainContent' => 'mainContent.html',
        'menuContent' => 'menuContent.html',
        'quickSearch' => 'quickSearch.html',
        'sideContent' => 'sideContent.html',
    );
    
    protected $lessFiles = array(
        'bootstrap.less'   => 'bootstrap.less',
        'import.less'      => 'import.less',
        
        'Areas/top.less'      => 'Areas/top.less',
        'Areas/header.less'   => 'Areas/header.less',
        'Areas/main.less'     => 'Areas/main.less',
        'Areas/extended.less' => 'Areas/extended.less',
        'Areas/footer.less'   => 'Areas/footer.less',
        
        'Layouts/default.less'   => 'Layouts/default.less',
        'Layouts/empty.less'     => 'Layouts/empty.less',
        'Layouts/startsite.less' => 'Layouts/startsite.less',
        
        'Templates/c.less'         => 'Templates/c.less',
        'Templates/cm.less'        => 'Templates/cm.less',
        'Templates/cms.less'       => 'Templates/cms.less',
        'Templates/cs.less'        => 'Templates/cs.less',
        'Templates/csm.less'       => 'Templates/csm.less',
        'Templates/empty.less'     => 'Templates/empty.less',
        'Templates/mc.less'        => 'Templates/mc.less',
        'Templates/mcs.less'       => 'Templates/mcs.less',
        'Templates/msc.less'       => 'Templates/msc.less',
        'Templates/sc.less'        => 'Templates/sc.less',
        'Templates/scm.less'       => 'Templates/scm.less',
        'Templates/smc.less'       => 'Templates/smc.less',
        'Templates/special.less'   => 'Templates/special.less',
        'Templates/startsite.less' => 'Templates/startsite.less',
        
        'Partials/mainContent.less' => 'Partials/mainContent.less',
        'Partials/menuContent.less' => 'Partials/menuContent.less',
        'Partials/quickSearch.less' => 'Partials/quickSearch.less',
        'Partials/sideContent.less' => 'Partials/sideContent.less',
        
    );
    
    protected $lessVariables = array(
        array('Basis Url für die Bilder',                                                               'baseUrlImage',                   '', 'string', ' ',                                ' ',       '@{baseUrlTemplate}Resources/Public/Images/'),
        array('Dropdown: Link Hover Hintergrundfarbe',                                                  'dropdownLinkBackgroundHover',    '', 'value',  '@dropdownLinkBackgroundActive',    ' ',       ' '),
        array('Dropdown: Link Farbe Hover',                                                             'dropdownLinkColorHover',         '', 'value',  '@white',                           ' ',       ' '),
        array('Dropdown: Link Farbe',                                                                   'dropdownLinkColor',              '', 'value',  '@grayDark',                        ' ',       ' '),
        array('Dropdown: Rahmen Farbe',                                                                 'dropdownBorder',                 '', 'value',  'rgba(0,0,0,.2)',                   ' ',       ' '),
        array('Dropdown: Hintergrundfarbe',                                                             'dropdownBackground',             '', 'value',  '@white',                           ' ',       ' '),
        array('Navbar: ???',                                                                            'navbarCollapseDesktopWidth',     '', 'value',  '@navbarCollapseWidth + 1',         ' ',       ' '),
        array('Navbar: ???',                                                                            'navbarCollapseWidth',            '', 'value',  '979px',                            ' ',       ' '),
        array('Navbar:Link Hintergrundfarbe bie Aktiv',                                                 'navbarLinkBackgroundActive',     '', 'value',  'transparent',                      ' ',       ' '),
        array('Navbar: Link Hintergrundfarbe bie Hover',                                                'navbarLinkBackgroundHover',      '', 'value',  'transparent',                      ' ',       ' '),
        array('Navbar: Link - Farbe - Aktiv',                                                           'navbarLinkColorActive',          '', 'color',  '@gray',                            '#fff',    ' '),
        array('Navbar: Link - Farbe - Hover',                                                           'navbarLinkColorHover',           '', 'color',  '@grayDark',                        '#fff',    ' '),
        array('Navbar: Link - Farbe',                                                                   'navbarLinkColor',                '', 'color',  ' ',                                '#3a1c00', ' '),
        array('Navbar: Brand ??? Farbe',                                                                'navbarBrandColor',               '', 'value',  '@navbarLinkColor',                 ' ',       ' '),
        array('Navbar: Textfarbe',                                                                      'navbarText',                     '', 'color',  ' ',                                '#3a1c00', ' '),
        array('Navbar: Hintergrundfarbe Highlight',                                                     'navbarBackgroundHighlight',      '', 'color',  '#ffffff',                          '#ffffff', ' '),
        array('Navbar: Hintergrundfarbe',                                                               'navbarBackground',               '', 'value',  '#31393f',                          ' ',       ' '),
        array('Navbar: Höhe',                                                                           'navbarHeight',                   '', 'value',  '72px',                             ' ',       ' '),
        array('Form states & alerts: Info - Hintergrundfarbe',                                          'infoBackground',                 '', 'color',  ' ',                                '#d9edf7', ' '),
        array('Form states & alerts: Info - Textfarbe',                                                 'infoText',                       '', 'color',  ' ',                                '#3a87ad', ' '),
        array('Form states & alerts: Erfolgreich - Hintergrundfarbe',                                   'successBackground',              '', 'color',  ' ',                                '#dff0d8', ' '),
        array('Form states & alerts: Erfolgreich - Textfarbe',                                          'successText',                    '', 'color',  ' ',                                '#468847', ' '),
        array('Form states & alerts: Fehler Hintergrundfarbe',                                          'errorBackground',                '', 'color',  ' ',                                '#f2dede', ' '),
        array('Form states & alerts: Fehlertext Farbe',                                                 'errorText',                      '', 'color',  ' ',                                '#b94a48', ' '),
        array('Form states & alerts: Warnung - Hintergrundfarbe',                                       'warningBackground',              '', 'color',  ' ',                                '#fcf8e3', ' '),
        array('Form states & alerts: Warnung - Textfarbe',                                              'warningText',                    '', 'color',  ' ',                                '#c09853', ' '),
        array('Forms: Button Primärer Highlight-Hintergrdundfarbe',                                     'btnPrimaryBackgroundHighlight',  '', 'value',  'spin(@btnPrimaryBackground, 20%)', ' ',       ' '),
        array('Forms: Button Primärer - Hintergrundfarbe',                                              'btnPrimaryBackground',           '', 'value',  '@linkColor',                       ' ',       ' '),
        array('Forms: ????',                                                                            'formActionsBackground',          '', 'color',  ' ',                                '#f5f5f5', ' '),
        array('Forms: Hintergrundfarbe eines deaktiviertem Feld',                                       'inputDisabledBackground',        '', 'value',  '@grayLighter',                     ' ',       ' '),
        array('Forms: Feld-Rahmen-Radius',                                                              'inputBorderRadius',              '', 'value',  '0',                                ' ',       ' '),
        array('Forms: Feld-Rahmen',                                                                     'inputBorder',                    '', 'color',  ' ',                                '#7f7f7f', ' '),
        array('Forms: Feld-Hintergrund Farbe',                                                          'inputBackground',                '', 'value',  '@white',                           ' ',       ' '),
        array('Forms: Platzhaltertext Farbe',                                                           'placeholderText',                '', 'value',  '@grayLight',                       ' ',       ' '),
        array('Tables: Tabellen- und Zellen-Rahmen',                                                    'tableBorder',                    '', 'color',  ' ',                                '#ddd',    ' '),
        array('Tables: Tabellenhintergrund Hover',                                                      'tableBackgroundHover',           '', 'color',  ' ',                                '#f5f5f5', ' '),
        array('Tables:Tabellenhintergrund Akzent // for striping',                                      'tableBackgroundAccent',          '', 'color',  ' ',                                '#f9f9f9', ' '),
        array('Tables: Gesamter Tabellenhintergrund',                                                   'tableBackground',                '', 'value',  'transparent',                      ' ',       ' '),
        array('Typography: Hero unit ???',                                                              'heroUnitLeadColor',              '', 'value',  'inherit',                          ' ',       ' '),
        array('Typography: Hero unit ???',                                                              'heroUnitHeadingColor',           '', 'value',  'inherit',                          ' ',       ' '),
        array('Typography: Hero unit ???',                                                              'heroUnitBackground',             '', 'value',  '@grayLighter',                     ' ',       ' '),
        array('Typography: Kleiner Radius',                                                             'borderRadiusSmall',              '', 'value',  '3px',                              ' ',       ' '),
        array('Typography: Großer Radius',                                                              'borderRadiusLarge',              '', 'value',  '6px',                              ' ',       ' '),
        array('Typography: Basis Radius',                                                               'baseBorderRadius',               '', 'value',  '4px',                              ' ',       ' '),
        array('Typography: Mini Abstand // 22px',                                                       'paddingMini',                    '', 'value',  '0 6px',                            ' ',       ' '),
        array('Typography: Kleiner Abstand // 26px',                                                    'paddingSmall',                   '', 'value',  '2px 10px',                         ' ',       ' '),
        array('Typography: Großer Abstand // 44px',                                                     'paddingLarge',                   '', 'value',  '11px 19px',                        ' ',       ' '),
        array('Typography: Mini Schriftengröße // ~11px (Based on 14px font-size)',                     'fontSizeMini',                   '', 'value',  '@baseFontSize * 0.75',             ' ',       ' '),
        array('Typography: Kleine Schriftgröße  // ~12px (Based on 14px font-size)',                    'fontSizeSmall',                  '', 'value',  '@baseFontSize * 0.85',             ' ',       ' '),
        array('Typography: Große Schriftgröße // ~18px (Based on 14px font-size)',                      'fontSizeLarge',                  '', 'value',  '@baseFontSize * 1.25',             ' ',       ' '),
        array('Typography: Überschriftenfarbe // empty to use BS default, @textColor',                  'headingsColor',                  '', 'value',  'inherit',                          ' ',       ' '),
        array('Typography: Überschriften-Auszeichnung // instead of browser default, bold',             'headingsFontWeight',             '', 'value',  'normal',                           ' ',       ' '),
        array('Typography: Überschriften Schriftenfamilie // empty to use BS default, @baseFontFamily', 'headingsFontFamily',             '', 'value',  'inherit',                          ' ',       ' '),
        array('Typography: Alternative Schriftenfamilie',                                               'altFontFamily',                  '', 'value',  '@serifFontFamily',                 ' ',       ' '),
        array('Typography: Basis Zeilenhöhe',                                                           'baseLineHeight',                 '', 'value',  '22px',                             ' ',       ' '),
        array('Typography: Basis Schriftenfamilie',                                                     'baseFontFamily',                 '', 'value',  '@serifFontFamily',                 ' ',       ' '),
        array('Typography: Basis Schriftgröße',                                                         'baseFontSize',                   '', 'value',  '13px',                             ' ',       ' '),
        array('Typography: Serif Schriftenfamilie',                                                     'serifFontFamily',                '', 'value',  '"Droid Serif", "Times New Roman", Times, serif', ' ', ' '),
        array('Typography: Sans Schriftenfamilie',                                                      'sansFontFamily',                 '', 'value',  '"Helvetica Neue", Helvetica, Arial, sans-serif', ' ', ' '),
        array('Grid system: Abstand bei 768px-979px',                                                   'gridGutterWidth768',             '', 'value',  '20px',                             ' ',       ' '),
        array('Grid system: Breite bei 768px-979px',                                                    'gridColumnWidth768',             '', 'value',  '42px',                             ' ',       ' '),
        array('Grid system: Abstand bei 1200px min',                                                    'gridGutterWidth1200',            '', 'value',  '30px',                             ' ',       ' '),
        array('Grid system: Breite bei 1200px min',                                                     'gridColumnWidth1200',            '', 'value',  '70px',                             ' ',       ' '),
        array('Grid system: Abstandsbreite (Default 940px grid)',                                       'gridGutterWidth',                '', 'value',  '20px',                             ' ',       ' '),
        array('Typography: Mono Schriftenfamilie',                                                      'monoFontFamily',                 '', 'value',  'Monaco, Menlo, Consolas, "Courier New", monospace', ' '),
        array('Grid system: Breite der Spalten (Default 940px grid)',                                   'gridColumnWidth',                '', 'value',  '60px',                             ' ',       ' '),
        array('Grid system: Anzahl der Spalten',                                                        'gridColumns',                    '', 'value',  '12',                               ' ',       ' '),
        array('Sprites: Icons Weiß',                                                                    'iconWhiteSpritePath',            '', 'string', ' ',                                ' ', '@{baseUrlTemplate}Resources/Public/Contrib/bootstrap/img/glyphicons-halflings-white.png'),
        array('Sprites: Icons',                                                                         'iconSpritePath',                 '', 'string', ' ',                                ' ', '@{baseUrlTemplate}Resources/Public/Contrib/bootstrap/img/glyphicons-halflings.png'),
        array('Colors: Lila',                                                                           'purple',                         '', 'color',  ' ',                                '#7a43b6'),
        array('Colors: Pink',                                                                           'pink',                           '', 'color',  ' ',                                '#c3325f'),
        array('Colors: Orange',                                                                         'orange',                         '', 'color',  ' ',                                '#f89406'),
        array('Colors: Gelb',                                                                           'yellow',                         '', 'color',  ' ',                                '#ffc40d'),
        array('Colors: Rot',                                                                            'red',                            '', 'color',  ' ',                                '#9d261d'),
        array('Colors: Grün',                                                                           'green',                          '', 'color',  ' ',                                '#46a546'),
        array('Colors: Dunkelblau',                                                                     'blueDark',                       '', 'color',  ' ',                                '#0064cd'),
        array('Colors: Blau',                                                                           'blue',                           '', 'color',  ' ',                                '#049cdb'),
        array('Links: Hover',                                                                           'linkColorHover',                 '', 'value',  'darken(@linkColor, 15%)',          ' ',       'darken(@linkColor, 15%)'),
        array('Links: Color',                                                                           'linkColor',                      '', 'color',  ' ',                                '#be9e55', '#08c'),
        array('Scaffolding: Text-Frabe',                                                                'textColor',                      '', 'color',  '#31393f',                          '#31393f', '@grayDark'),
        array('Scaffolding: Seiten-Hintergrund-Frabe',                                                  'bodyBackground',                 '', 'value',  '@white',                           '@white',  '@white'),
    );


    /**
     * TemplateLessVariable Repository
     *
     * @var \CodingMs\Ftm\Domain\Repository\TemplateLessVariableRepository
     */
    protected $templateLessVariableRepository;

    /**
     * injectTemplateLessVariableRepository
     *
     * @param \CodingMs\Ftm\Domain\Repository\TemplateLessVariableRepository $fluidTemplateLessVariableRepository
     * @return void
     */
    public function injectTemplateLessVariableRepository(\CodingMs\Ftm\Domain\Repository\TemplateLessVariableRepository $templateLessVariableRepository) {
        $this->templateLessVariableRepository = $templateLessVariableRepository;
    }
    
    /**
     * Prueft alles was Richtung Bootstrap abweicht
     *
     * @author     Thomas Deuling <typo3@coding.ms>
     * @since      22.11.2013
     * 
     * @return mixed boolean wenn alles aktuell ist, ansonsten die Meldungens
     */
    public function checkStructure($pid, $fluidTemplate) {
        
        parent::checkStructure($pid, $fluidTemplate);
        
        
        // Bootstrap-Layouts bereitstellen
        $sourceFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("TemplateStructureBootstrap", $fluidTemplate->getTemplateDir())."Layouts/";
        $targetFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("FluidTemplates",             $fluidTemplate->getTemplateDir())."Layouts/";
        $sourceFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($sourceFolder);
        $targetFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($targetFolder);
        if(!empty($this->fluidLayouts)) {
            foreach($this->fluidLayouts as $name=>$filename) {
                
                // Nur kopieren wenn es das noch nicht gibt
                if(!file_exists($targetFolder.$filename)) {
                    copy($sourceFolder.$filename, $targetFolder.$filename);
                }
                
            }
        }
        
        
        // Bootstrap-Templates bereitstellen
        $sourceFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("TemplateStructureBootstrap", $fluidTemplate->getTemplateDir())."Templates/";
        $targetFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("FluidTemplates",             $fluidTemplate->getTemplateDir())."Templates/";
        $sourceFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($sourceFolder);
        $targetFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($targetFolder);
        if(!empty($this->fluidTemplates)) {
            foreach($this->fluidTemplates as $name=>$filename) {
                
                // Nur kopieren wenn es das noch nicht gibt
                if(!file_exists($targetFolder.$filename)) {
                    copy($sourceFolder.$filename, $targetFolder.$filename);
                }
                
            }
        }
        
        
        // Bootstrap-Partials bereitstellen
        $sourceFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("TemplateStructureBootstrap", $fluidTemplate->getTemplateDir())."Partials/";
        $targetFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("FluidTemplates",             $fluidTemplate->getTemplateDir())."Partials/";
        $sourceFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($sourceFolder);
        $targetFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($targetFolder);
        if(!empty($this->fluidPartials)) {
            foreach($this->fluidPartials as $name=>$filename) {
                
                // Nur kopieren wenn es das noch nicht gibt
                if(!file_exists($targetFolder.$filename)) {
                    copy($sourceFolder.$filename, $targetFolder.$filename);
                }
                
            }
        }
        
        
        // Less-Dateien bereitstellen
        $sourceFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("TemplateStructureBootstrap", $fluidTemplate->getTemplateDir())."Less/";
        $targetFolder = \CodingMs\Ftm\Utility\Tools::getDirectory("Less",                       $fluidTemplate->getTemplateDir());
        $sourceFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($sourceFolder);
        $targetFolder = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($targetFolder);
        if(!empty($this->lessFiles)) {
            foreach($this->lessFiles as $name=>$filename) {
                
                // Nur kopieren wenn es das noch nicht gibt
                if(!file_exists($targetFolder.$filename)) {
                    copy($sourceFolder.$filename, $targetFolder.$filename);
                }
                
            }
        }
        
        
        // Less-Variablen bereitstellen
        if(!empty($this->lessVariables)) {
            foreach($this->lessVariables as $variable) {
                
                
                $lessVariable = $this->templateLessVariableRepository->findOneByNameAndPid($variable[1], $pid);
                
                // Nur kopieren wenn es das noch nicht gibt
                if(!($lessVariable instanceof \CodingMs\Ftm\Domain\Model\TemplateLessVariable)) {
                    
                    /**
                     * @var \CodingMs\Ftm\Domain\Model\TemplateLessVariable
                     */
                    $lessVariableObject = $this->objectManager->create('CodingMs\Ftm\Domain\Model\TemplateLessVariable');
                    $lessVariableObject->setPid($pid);
                    $lessVariableObject->setTemplate($fluidTemplate);
                    $lessVariableObject->setVariableTitle( $variable[0]);
                    $lessVariableObject->setVariableName(  $variable[1]);
                    $lessVariableObject->setCategory(      $variable[2]);
                    $lessVariableObject->setVariableType(  $variable[3]);
                    $lessVariableObject->setVariableValue( $variable[4]);
                    $lessVariableObject->setVariableColor( $variable[5]);
                    $lessVariableObject->setVariableString($variable[6]);
                    
                    // Variable speichern
                    $this->templateLessVariableRepository->add($lessVariableObject);
                              
                    // und persistieren
                    $this->persistenceManager->persistAll();
                    
                }
                else {
                    // echo $variable[2]." exists<br>";
                }
                
            }
        }
        
       
        
    }
    
}

?>