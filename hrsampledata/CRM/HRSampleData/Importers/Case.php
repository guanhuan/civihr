<?php


/**
 * Class CRM_HRSampleData_Importers_Case
 *
 */
class CRM_HRSampleData_Importers_Case extends CRM_HRSampleData_DataImporter
{

  /**
   * @see CRM_HRSampleData_DataImporter::insertRecord
   * @param array $row Should at least contain `id` & `contact_type`
   */
  protected function insertRecord(array $row) {
    $currentID = $this->unsetArrayElement($row, 'id');;

    $row['contact_id'] = $this->getDataMapping('contact_mapping', $row['contact_id']);

    $result = $this->callAPI('Case', 'create', $row);

    $this->setDataMapping('case_mapping', $currentID, $result['id']);
  }

}
