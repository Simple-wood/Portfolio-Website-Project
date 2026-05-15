<?php
    /**
     * Inserts an associative array into a collection, ordered newest to oldest.
     * Manually handles the shifting of elements without built-in splice functions.
     */
    function insertEntryByDate(&$array, $newData) {
        $count = count($array);
        $insertionIndex = $count; // Default to the end of the array
        $newTimestamp = strtotime($newData['dateOfEntry']);

        // 1. Find the first index where the existing entry is older than the new entry
        for ($i = 0; $i < $count; $i++) {
            $existingTimestamp = strtotime($array[$i]['dateOfEntry']);
            
            if ($newTimestamp > $existingTimestamp) {
                $insertionIndex = $i;
                break;
            }
        }

        // 2. Manually shift elements to the right to make room
        // We start from the end of the array and move backwards to the insertion point
        for ($j = $count; $j > $insertionIndex; $j--) {
            $array[$j] = $array[$j - 1];
        }

        // 3. Place the new data in the "hole" we created
        $array[$insertionIndex] = $newData;
    }
?>