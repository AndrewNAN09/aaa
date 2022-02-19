<?php
echo "Привет!<br>";


try {
    $a = new qqq;
} catch (Throwable $e) {
    $errorMessage = $e->getMessage() . '; File: ' . $e->getFile() . '; Line: ' . $e->getLine();
echo 'Моя Ошибка: '. $errorMessage.'<br><br>';
}
$date = "27.01.2022 00:00";
$date_sec = strtotime($date);
echo $date_sec;
ini_set('auto_detect_line_endings',TRUE);
if (($file3 = fopen("output.csv", "w")) !== FALSE) {
    if (($file1 = fopen("internal_all500.csv", "r")) !== FALSE) {
        while (($file1Row = fgetcsv($file1)) !== FALSE) {
            if (($file2 = fopen("internal_all.csv", "r")) !== FALSE) {
                while (($file2Row = fgetcsv($file2)) !== FALSE) {
                    if ( strtolower(trim($file1Row[0])) == strtolower(trim($file2Row[0])) )
                        fputcsv($file3, $file1Row);
                }

                fclose($file2);
            }

        }
        fclose($file1);
    }
    fclose($file3);
}
ini_set('auto_detect_line_endings',FALSE);

ini_set('auto_detect_line_endings',TRUE);
if (($file6 = fopen("222.csv", "w")) !== FALSE) {
    if (($file4 = fopen("internal_all500.csv", "r")) !== FALSE) {
        while (($file4Row = fgetcsv($file4)) !== FALSE) {
            $ar500[]=$file4Row;

        }
        fclose($file1);
        if (($file5 = fopen("internal_all.csv", "r")) !== FALSE) {
            while (($file5Row = fgetcsv($file5)) !== FALSE) {
                $ar[]=$file5Row;
            }
            fclose($file5);
        }
    }
    $ar3=[];
    foreach ($ar as $item) {
        array_push($ar3, $item['0']);
    }
    foreach ($ar500 as $key=>$item) {
        if (in_array($item['0'], $ar3)) unset($ar500[$key]);
    }
    foreach ($ar500 as $aaa) {

        $aaaa[1]=$aaa[0];

        fputcsv($file6, $aaaa);
    }
    fclose($file6);
}
ini_set('auto_detect_line_endings',FALSE);