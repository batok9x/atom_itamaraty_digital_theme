<?php
// auto-generated by arGearmanConfigHandler
// date: 2024/10/20 09:26:24
return array (
  'servers' => 
  array (
    'default' => '127.0.0.1:4730',
  ),
  'worker_types' => 
  array (
    'general' => 
    array (
      0 => 'arFindingAidJob',
    ),
    'acl' => 
    array (
      0 => 'arInheritRightsJob',
    ),
    'actor_relations' => 
    array (
      0 => 'arUpdateEsActorRelationsJob',
    ),
    'calculate_dates' => 
    array (
      0 => 'arCalculateDescendantDatesJob',
    ),
    'move' => 
    array (
      0 => 'arObjectMoveJob',
    ),
    'search_csv_export' => 
    array (
      0 => 'arInformationObjectCsvExportJob',
    ),
    'sword' => 
    array (
      0 => 'qtSwordPluginWorker',
    ),
    'publication_status' => 
    array (
      0 => 'arUpdatePublicationStatusJob',
    ),
    'file_import' => 
    array (
      0 => 'arFileImportJob',
    ),
    'xml_export' => 
    array (
      0 => 'arInformationObjectXmlExportJob',
    ),
    'xml_export_single_file' => 
    array (
      0 => 'arXmlExportSingleFileJob',
    ),
    'generate_csv_report' => 
    array (
      0 => 'arGenerateReportJob',
    ),
    'actor_csv_export' => 
    array (
      0 => 'arActorCsvExportJob',
    ),
    'actor_xml_export' => 
    array (
      0 => 'arActorXmlExportJob',
    ),
    'repository_csv_export' => 
    array (
      0 => 'arRepositoryCsvExportJob',
    ),
    'update_io_es_documents' => 
    array (
      0 => 'arUpdateEsIoDocumentsJob',
    ),
    'holdings_report' => 
    array (
      0 => 'arPhysicalObjectCsvHoldingsReportJob',
    ),
    'csv_validation' => 
    array (
      0 => 'arValidateCsvJob',
    ),
  ),
);
