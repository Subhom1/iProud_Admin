<?php
    class userModel extends CI_Model{
        public function __construct() {
            $this->load->database();
        }
        function fetchCoach($limit,$offset=0) {
            $query = $this->db->query("SELECT * FROM users WHERE usertype='coach' AND isdeleted=0 limit $limit offset $offset");
            
            
            return $query->result_array();
            
        }
        
        function fetchCoachforTrainee() {
            $query = $this->db->query("SELECT * FROM users WHERE usertype='coach' AND isdeleted=0");
            return $query->result_array();
        }

        function getCoachCount(){
            $query = $this->db->query("SELECT * FROM users WHERE usertype='coach' AND isdeleted=0");
            $count=$query->num_rows();
            return $count;
        }

        function getTraineeCount(){
            $query = $this->db->query("SELECT * FROM users WHERE usertype='user' AND isdeleted=0");
            $count=$query->num_rows();
            return $count;
        }
        function fetchCoachDetails($coachid) {
            $query = $this->db->query("SELECT * FROM users WHERE usertype='coach' AND isdeleted=0 AND userid=$coachid");
            return $query->row_array();
        }
        function fetchTrainee($limit,$offset=0) {
            $query = $this->db->query("SELECT *, (select sum(pointsearned) as points from useractivity where createdbyuserid = userid) as 
            totalpts, (select levelindex from userlevel where userid = users.userid order by iduserlevel desc limit 1) as 
            userlevel, (select u2.fullname from users u2 where u2.userid = users.coachid) as coachname FROM users WHERE usertype='user' AND isdeleted=0 limit $limit offset $offset");
            
            return $query->result_array();

        }
        function fetchcoachTrainees($coachid){
            $query = $this->db->query("SELECT *, (select sum(pointsearned) as points from useractivity where createdbyuserid = userid) as 
            totalpts, (select levelindex from userlevel where userid = users.userid order by iduserlevel desc limit 1) as 
            userlevel,(select u2.fullname from users u2 where u2.userid = users.coachid) as coachname FROM users WHERE usertype='user' AND coachid = $coachid");
            return $query->result_array();
        }
        function fetchAllDetails(){
            $query = $this->db->query("SELECT * FROM users WHERE usertype='coach' AND isdeleted=0");
            $statcoach= $query->num_rows();
            $query1 = $this->db->query("SELECT * FROM users WHERE usertype='user' AND isdeleted=0");
            $stattrainee=$query1->num_rows();

            $total=$statcoach+$stattrainee;
            $percent=ceil($stattrainee/$statcoach);

          return  $data = array(
                'totalcoach' => $statcoach,
                'totaltrainee'=>$stattrainee,
                'total'=>$total,
                'percent'=>$percent

            );
            
        }

        function searchtrainee($key){
            $query=$this->db->query("SELECT *, (select sum(pointsearned) as points from useractivity where createdbyuserid = userid) as 
            totalpts, (select levelindex from userlevel where userid = users.userid order by iduserlevel desc limit 1) as 
            userlevel, (select u2.fullname from users u2 where u2.userid = users.coachid) as coachname FROM users where usertype='user' 
            AND isdeleted=0 AND ((users.fullname LIKE '%{$key}%') OR (users.email LIKE '%{$key}%')) ");
            return $query->result_array();
        }

        function searchCoach($key){
            $query=$this->db->query("SELECT * FROM users WHERE usertype='coach' AND ((users.fullname LIKE '%{$key}%') OR (users.email LIKE '%{$key}%'))");
            return $query->result_array();
        }

        function invite($email, $fullname){
            $this->db->query("INSERT INTO users (email, fullname) VALUES ('$email', '$fullname') ");
        }

        

        function deleteUser($userid){
            $this->db->query("UPDATE users SET isdeleted =1 WHERE userid = $userid");
        }


        function fetchTraineeDetail($userid)
        {
            $query = $this->db->query("SELECT * FROM users WHERE userid = {$userid}  AND isdeleted=0 LIMIT 1");
            return $query->row_array();
        }

        function fetchActivityDetail($userid)
        {
            $query = $this->db->query("SELECT * FROM useractivity WHERE createdbyuserid = {$userid}");
            return $query->result_array();
        }


        function updateUser($fullname,$dob,$gender,$relationshipstatus,$noofchildren,
            $height,$heightunit,$weight,$weightunit,$doexercise,$workingschedule,$challengesfaceCSV,
            $needsCSV,$workingweekhours,$workingdailyhours,$dailywalkinghours,$badhabitsCSV,$foodallergiesCSV,$userid)
        {
            $sql = "UPDATE users SET fullname='$fullname', dob='$dob', gender ='$gender', relationshipstatus = '$relationshipstatus',
             noofchildren = '$noofchildren', height='$height', heightunit='$heightunit', weight ='$weight', weightunit='$weightunit', doexercise = '$doexercise',workingschedule = '$workingschedule',
             challengesfaceCSV = '$challengesfaceCSV',
             needsCSV = '$needsCSV', workingweekhours = '$workingweekhours', workingdailyhours = '$workingdailyhours',
              dailywalkinghours = '$dailywalkinghours', badhabitsCSV = '$badhabitsCSV', foodallergiesCSV = '$foodallergiesCSV' 
              WHERE users.userid = $userid ";

            $this->db->query($sql);
        }
        
        function updatecoach($fullname,$coachid,$bio){

            $this->db->query("UPDATE users SET fullname = '$fullname', bio = '$bio' WHERE usertype='coach' AND users.userid=$coachid");

            //echo "UPDATE users SET fullname = '$fullname' WHERE usertype='coach' AND users.userid=$coachid";

        }



        


        
    }
?>