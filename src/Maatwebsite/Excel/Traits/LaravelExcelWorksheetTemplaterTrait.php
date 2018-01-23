<?php namespace Maatwebsite\Excel\Traits;


trait LaravelExcelWorksheetTemplaterTrait
{
    public function templatize ( array $placeholdersMap )
    {
        return $this->flattenSheetValues();
    }

    public function flattenSheetValues ()
    {
        $flattenedSheetValues = [];

        foreach ( $this->toArray() as $rowCount => &$row ) {
            foreach ( $row as $cellCount => &$cell ) {
                $flattenedSheetValues[] = [
                    'value'   => $cell,
                    'cellKey' => $cellCount,
                    'rowKey'  => $rowCount + 1,
                ];
            }
        }

        return $flattenedSheetValues;
    }
}
