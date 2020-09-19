<?php

    require("connect.php");

    $con = getConn();

    //Check for DB Connection
    if(!$con){
        die("Connection Failed :" + mysqli_connect_error());
    }else{

        $query ="SELECT * FROM participant_details WHERE event_ID='".$_POST["event_id"] ."'";

        $retval = mysqli_query($GLOBALS['con'],$query);

        $number_filter_row = mysqli_num_rows($retval);

        $data = array();

    
    
    while($rs=$retval->fetch_assoc()) {

    	 $participants_data = array();
    	 $participants_data[] = $rs['participant_name'];
    	 $participants_data[] = $rs['member_roll'];
    	 $participants_data[] = $rs['email_id'];
    	 $participants_data[] = $rs['phone_number'];
    	 $participants_data[] = $rs['organization'];
    	 $data[] = $participants_data;
        /* echo "<tr>";
         echo "<td>".$rs['participant_name']."</td>";
         echo "<td>".$rs['member_roll']."</td>";
         echo "<td>".$rs['email_id']."</td>";
         echo "<td>".$rs['phone_number']."</td>";
         echo "<td>".$rs['organization']."</td>";
         echo "</tr>";

*/
    }

     function get_all_data($con)
     {
		 $query = "SELECT * FROM participant_details" ;
		 $result = mysqli_query($con, $query);
		 return mysqli_num_rows($result);
     }



	$output = array(
	 "draw"    => intval($_POST["draw"]),
	 "recordsTotal"  =>  get_all_data($con),
	 "recordsFiltered" => $number_filter_row,
	 "data"    => $data
	);

	echo json_encode($output);

}



?>
