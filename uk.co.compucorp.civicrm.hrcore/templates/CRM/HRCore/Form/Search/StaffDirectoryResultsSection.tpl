{if $rowsEmpty}
  {include file="CRM/Contact/Form/Search/EmptyResults.tpl"}
{elseif $rows}
  {include file="CRM/HRCore/Form/Search/StaffDirectoryResultsSectionActions.tpl"}
  {include file="CRM/HRCore/Form/Search/StaffDirectoryResultsSectionList.tpl"}
{/if}
