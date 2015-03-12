<?php

    $data_1979 = array(
        'year' => '1979',
        'labour' => array(
            'votes' => 15526, 
            'candidate' => 'some person or other'
        ),
        'conservative' => array(
            'votes' => 17986, 
            'candidate' => 'some person or other'
        ),
        'libdem' => array(
            'votes' => 7400, 
            'candidate' => 'some person or other'
        ),
        'ukip' => array(
            'votes' => null, 
            'candidate' => 'some person or other'
        ),
        'green' => array(
            'votes' => 552, 
            'candidate' => 'some person or other'
        ),
        'snp' => array(
            'votes' => 3800, 
            'candidate' => 'some person or other'
        ),
        'plaid' => array(
            'votes' => null, 
            'candidate' => 'some person or other'
        )
    );

    $data_1979_string = "[";

    foreach ($data_1979 as $key => $value) {
        if ($key == 'year') {
            $data_1979_string .= "'" . $value . "'" . ",";
        }
        else {
            if ( isset( $value['votes'] ) ) {
                $data_1979_string .= $value['votes'] . ",";
                $data_1979_string .= "createTooltip(" . 
                    "'" . $value['candidate'] . "'," . 
                    "'" . $key . "'," . 
                    $value['votes'] . ")" . ",";  
            }
            else {
                $data_1979_string .= 'null' . "," . "'" . $value['candidate'] . "'" . ",";
            }
        }
    }

    $data_1979_string .= "],";

    $data = $data_1979_string .
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