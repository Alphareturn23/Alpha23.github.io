<?php


$id = $_POST['id'];
if ($id==1) {
    //SITE
    echo '<option value="" selected>Select Courses</option>';
        echo '<option value="BSIT">BS in Information Technology</option>
        <option value="BSCE">BS in Civil Engineering</option>
        <option value="BSEnSE">BS in Environmental and Sanitary Engineering</option>
        <option value="BSCpE">BS in Computer Engineering</option>';
} elseif ($id==2) {
    //SASTE
    echo '<option value="" selected>Select Courses</option>';
    echo '<option value="BAELS">BA in English Language Studies</option>
    <option value="BSPsych">BS in Psychology</option>
    <option value="BSBio">BS in Biology</option>
    <option value="BSSW">BS in Social Work</option>
    <option value="BSPA">BS in Public Administration</option>
    <option value="BSBio-MicroBiology">BS in Biology Major in MicroBiology</option>
    <option value="BSE">Bachelor in Secondary Education</option>
    <option value="BEE">Bachelor in Elementary Education</option>
    <option value="BPEd">BS in Physical Education</option>';
} elseif ($id==3) {

     //SNAHS
     echo '<option value="" selected>Select Courses</option>';
     echo '<option value="BSN">BS in Nursing</option>
     <option value="BSPharma">BS in Pharmacy</option>
     <option value="BSMT">BS in Medical Technology</option>
     <option value="BSPT">BS in Physical Therapy</option>
     <option value="BSRT">BS in Radiologic Technology</option>
     <option value="BSMidwifery">BS in Midwifery</option>';
   
} elseif ($id==4) {
   


     //SBAHM
     echo '<option value="" selected>Select Courses</option>';
     echo '<option value="BSA">BS in Accountancy</option>
     <option value="BSEntrep">BS in Entrepreneurship</option>
     <option value="BSBA-MM">BS in Business Administration major in Marketing Management</option>
     <option value="BSBA-FM">BS in Business Administration major in Financial Management</option>
     <option value="BSBA-OM">BS in Business Administration major in Operations Management</option>
     <option value="BSMA">BS in Management Accounting</option>
     <option value="BSHM">BS in Hospitality Management</option>
     <option value="BSTM">BS in Tourism Management</option>
     <option value="BSHM/TM">BS in Hospitality Management/Tourism Management</option>
     <option value="BSPDMI">BS in Product Design and Marketing Innovation</option>';
}


