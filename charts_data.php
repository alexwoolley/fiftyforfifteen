<?php

    $data_1979 = array(
        'year' => '1979',
        'Labour' => array(
            'votes' => 15526, 
            'candidate' => 'some person or other'
        ),
        'Conservative' => array(
            'votes' => 17986, 
            'candidate' => 'some person or other'
        ),
        'Lib Dem' => array(
            'actual_name' => 'Liberal',
            'votes' => 7400, 
            'candidate' => 'some person or other'
        ),
        'UKIP' => array(
            'votes' => null, 
            'candidate' => 'some person or other'
        ),
        'Green' => array(
            'actual_name' => 'Ecology',
            'votes' => 552, 
            'candidate' => 'some person or other'
        ),
        'SNP' => array(
            'votes' => 3800, 
            'candidate' => 'some person or other'
        ),
        'Plaid Cymru' => array(
            'votes' => null, 
            'candidate' => 'some person or other'
        )
    );

    function chartDataToString ($data) {
        $data_string = "[";

        foreach ($data as $key => $value) {
            //First include the year
            if ($key == 'year') {
                $data_string .= "'" . $value . "'" . ",";
            }
            else {
                //If someone stood for election from a particular party
                if ( isset( $value['votes'] ) ) {
                    //Include the number of votes for the chart
                    $data_string .= $value['votes'] . ",";
                    //Make the tooltip
                    //Add the candidate's name
                    $data_string .= "createTooltip(" . "'" . $value['candidate'] . "',";
                    //Add the party name. Conditional allows for party name to change
                    if ( isset($value['actual_name']) ) {
                        $data_string .= "'" . $value['actual_name'] . "',";
                    }
                    else {
                        $data_string .= "'" . $key . "',";
                    }
                    //Add number of votes candidate received
                    $data_string .= $value['votes'] . ")" . ",";  
                }
                //Else if no one stood for election from a particular party
                else {
                    $data_string .= 'null' . "," . "'" . $value['candidate'] . "'" . ",";
                }
            }
        }

        $data_string .= "],";
        return $data_string;  
    }

    $data = chartDataToString ($data_1979) .
            "['1983', 
                12824, 'some text or other', 
                16485 , 'some text',
                12830, 'actually the SDP',
                null, 'some text',
                450, 'actually the Ecology party',
                2256 , 'some text',
                null, 'some text',],
            ['1987', 
                18211, 'some text or other', 
                16352 , 'some text',
                10900, 'actually the SDP',
                null, 'some text',
                440, 'some text',
                2455, 'some text',
                null, 'some text',],
            ['1992', 
                18485, createTooltip('Nigel Griffiths', 'Labour', 18485), 
                14309, 'some text',
                5961, 'some text',
                null, 'some text',
                null, 'some text',
                5727, 'some text',
                null, 'some text',],
            ['1997', 
                20993, 'Nigel Griffiths (Labour): 20,993 votes, or 46.8% of the turnout', 
                9541, 'some text',
                7911, 'some text',
                null, 'some text',
                null, 'some text',
                5791, 'some text',
                null, 'some text',],
            ['2001', 
                15671, 'Nigel Griffiths (Labour): 15,671 votes, or 42.2% of the turnout', 
                6172, 'some text',
                10172, 'some text',
                null, 'some text',
                null, 'some text',
                3683, 'some text',
                null, 'some text',],
            ['2005', 
                14188, 'Nigel Griffiths (Labour): 14,188 votes, or 33.2% of the turnout', 
                10291, 'some text',
                13783, 'some text',
                null, 'some text',
                1387, 'some text',
                414, 'some text',
                null, 'some text',],
            ['2010', 
                15215, 'Ian Murray (Labour): 14,188 votes, or 34.7% of the turnout', 
                9452, 'some text',
                14899, 'some text',
                null, 'some text',
                881, 'some text',
                3354, 'some text',
                null, 'some text',]"

?>