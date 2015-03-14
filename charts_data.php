<?php
    $data_file_url = get_stylesheet_directory_uri() . "/GE_2005_Edinburgh_South.csv";

    $data_file = fopen( $data_file_url ,"r");
    while(! feof( $data_file ) ) {
        $data_edinburgh_south_2005 = fgetcsv( $data_file );
    }
    fclose($data_file);

    print_r($data_edinburgh_south_2005);

    echo "<br>HERE IS SOME FILLER<br>";

    print_r($data_edinburgh_south_2005);   


    $data_file_url = get_stylesheet_directory_uri() . "/GE_1992_2001_Edinburgh_South.csv";

    $data_file = fopen( $data_file_url ,"r");
    while(! feof( $data_file ) ) {
        $data_edinburgh_south_1992_to_2001 = fgetcsv( $data_file );
    }
    fclose($data_file);

    $data_edinburgh_south_1992_to_2001 = array(
        //These arrays can't be automated because the data were recorded slightly differently at each election
        array(
            'year' => '1992',
            'Labour' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[97],
                'candidate' => ""
            ),
            'Conservative' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[96],
                'candidate' => ""
            ),
            'Lib Dem' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[98],
                'candidate' => ""
            ),
            'UKIP' => array(
                'votes' => null,
                'candidate' => ""
            ),
            'Green' => array(
                'votes' => null,
                'candidate' => ""
            ),
            'SNP' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[100],
                'candidate' => ""
            ),
            'Plaid Cymru' => array(
                'votes' => null,
                'candidate' => ""
            ),
        ),
        array(
            'year' => '1997',
            'Labour' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[65],
                'candidate' => $data_edinburgh_south_1992_to_2001[77]
            ),
            'Conservative' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[64],
                'candidate' => $data_edinburgh_south_1992_to_2001[74]
            ),
            'Lib Dem' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[66],
                'candidate' => $data_edinburgh_south_1992_to_2001[80]
            ),
            'UKIP' => array(
                'votes' => null,
                'candidate' => ""
            ),
            'Green' => array(
                'votes' => null,
                'candidate' => ""
            ),
            'SNP' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[67],
                'candidate' => $data_edinburgh_south_1992_to_2001[83]
            ),
            'Plaid Cymru' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[68],
                'candidate' => ""
            ),
        ),
        array(
            'year' => '2001',
            'Labour' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[20],
                'candidate' => $data_edinburgh_south_1992_to_2001[38]
            ),
            'Conservative' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[19],
                'candidate' => $data_edinburgh_south_1992_to_2001[42]
            ),
            'Lib Dem' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[21],
                'candidate' => $data_edinburgh_south_1992_to_2001[46]
            ),
            'UKIP' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[24],
                'candidate' => ""
            ),
            'Green' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[25],
                'candidate' => ""
            ),
            'SNP' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[22],
                'candidate' => ""
            ),
            'Plaid Cymru' => array(
                'votes' => $data_edinburgh_south_1992_to_2001[23],
                'candidate' => ""
            ),
        )
    );

    $data_edinburgh_south = array(
        array(
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
        )
    );

    function chartDataToString ($constituency_data) {
        $data_string = "[";

        foreach ($constituency_data as $party => $party_info) {
            //First include the year
            if ($party == 'year') {
                $data_string .= "'" . $party_info . "'" . ",";
            }
            else {
                //If someone stood for election from a particular party
                if ( isset( $party_info['votes'] ) ) {
                    //Include the number of votes for the chart
                    if ($party_info['votes'] == 0) {
                        $data_string .= 'null' . ",";
                    }
                    else {
                        $data_string .= $party_info['votes'] . ",";  
                    }
                    //Make the tooltip
                    //Add the candidate's name
                    $data_string .= "createTooltip(" . "'" . $party_info['candidate'] . "',";
                    //Add the party name. Conditional allows for party name to change
                    if ( isset($party_info['actual_name']) ) {
                        $data_string .= "'" . $party_info['actual_name'] . "',";
                    }
                    else {
                        $data_string .= "'" . $party . "',";
                    }
                    //Add number of votes candidate received
                    $data_string .= $party_info['votes'] . ")" . ",";  
                }
                //Else if no one stood for election from a particular party
                else {
                    $data_string .= 'null' . "," . "'" . $party_info['candidate'] . "'" . ",";
                }
            }
        }

        $data_string .= "],";
        return $data_string;  
    }
    //Define data variable that will produce the charts in charts.php
    $data = "";
    //Populate the data variable
    // foreach ($data_edinburgh_south as $year) {
    //     $data .= chartDataToString($year);
    // }

    foreach ($data_edinburgh_south_1992_to_2001 as $year) {
        $data .= chartDataToString($year);
    }

    // $data .= "['1983', 
    //             12824, 'some text or other', 
    //             16485 , 'some text',
    //             12830, 'actually the SDP',
    //             null, 'some text',
    //             450, 'actually the Ecology party',
    //             2256 , 'some text',
    //             null, 'some text',],
    //         ['1987', 
    //             18211, 'some text or other', 
    //             16352 , 'some text',
    //             10900, 'actually the SDP',
    //             null, 'some text',
    //             440, 'some text',
    //             2455, 'some text',
    //             null, 'some text',],
    //         ['1992', 
    //             18485, createTooltip('Nigel Griffiths', 'Labour', 18485), 
    //             14309, 'some text',
    //             5961, 'some text',
    //             null, 'some text',
    //             null, 'some text',
    //             5727, 'some text',
    //             null, 'some text',],
    //         ['1997', 
    //             20993, 'Nigel Griffiths (Labour): 20,993 votes, or 46.8% of the turnout', 
    //             9541, 'some text',
    //             7911, 'some text',
    //             null, 'some text',
    //             null, 'some text',
    //             5791, 'some text',
    //             null, 'some text',],
    //         ['2001', 
    //             15671, 'Nigel Griffiths (Labour): 15,671 votes, or 42.2% of the turnout', 
    //             6172, 'some text',
    //             10172, 'some text',
    //             null, 'some text',
    //             null, 'some text',
    //             3683, 'some text',
    //             null, 'some text',],
    //         ['2005', 
    //             14188, 'Nigel Griffiths (Labour): 14,188 votes, or 33.2% of the turnout', 
    //             10291, 'some text',
    //             13783, 'some text',
    //             null, 'some text',
    //             1387, 'some text',
    //             414, 'some text',
    //             null, 'some text',],
    //         ['2010', 
    //             15215, 'Ian Murray (Labour): 14,188 votes, or 34.7% of the turnout', 
    //             9452, 'some text',
    //             14899, 'some text',
    //             null, 'some text',
    //             881, 'some text',
    //             3354, 'some text',
    //             null, 'some text',]"

?>