<?php
if (is_category("Edinburgh South")) {
  $data = "['Party', 'Votes', { role: 'style' }],
     ['Labour', 15251, '#E90000'],
     ['Lib Dem', 14899, '#FFDF00'],
     ['Conservative', 9452, '#0089DB'],
     ['SNP', 3354, '#EDE600'],
     ['Green', 881, '#5AC72C']";
}
elseif (is_category("Dundee East")) {
    // NB these are actually the data for Edinburgh South in 2005
  $data = "['Party', 'Votes', { role: 'style' }],
     ['Labour', 13251, '#E90000'],
     ['Lib Dem', 14899, '#FFDF00'],
     ['Conservative', 9452, '#0089DB'],
     ['SNP', 3354, '#EDE600'],
     ['Green', 881, '#5AC72C']";
}

?>