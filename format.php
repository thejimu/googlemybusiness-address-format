<?php

function addressFormat($addressObject)
    {
        $addressArray=[];
        if($addressObject['addressLines']!=null) {
            foreach ($addressObject['addressLines'] as $item) {
                array_push($addressArray, $item);
            }

            array_push($addressArray, $addressObject['locality'] ?? "");
            array_push($addressArray, $addressObject['administrativeArea'] ?? "");
            array_push($addressArray, $addressObject['postalCode'] ?? "");

            if ($addressObject['languageCode'] == 'zh-TW') {
                $addressString = implode("", array_reverse($addressArray));
            } else {
                $addressString = implode(" ", $addressArray);
            }
        }

        return $addressString ?? "";
     }