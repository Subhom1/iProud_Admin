<?php 

    class BulkImport extends CI_Controller{

        public function excel (){
            require(APPPATH.'third_party/Classes/PHPExcel.php');
            if(!isset($_POST['submit'])){
                redirect('/index.php/user/bulkimport?msg=No Input File');
            }
            else{
                $filetype = strtolower(pathinfo(basename($_FILES['upload']['name']),PATHINFO_EXTENSION));
                if(strcmp($filetype,"xlsx")!=0){
                    redirect('/index.php/user/bulkimport?msg=Not an excel or CSV file');
                }
            }
            $excel=PHPExcel_IOFactory::load(realpath($_FILES['upload']['tmp_name']));
            $excel->setActiveSheetIndex(0);
            $i=2;
            while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!=""){
                $data=array(
                    'email'=> $excel->getActiveSheet()->getCell('A'.$i)->getValue(),
                    'fullname'=> $excel->getActiveSheet()->getCell('B'.$i)->getValue(),
                    'mobilenumber'=> $excel->getActiveSheet()->getCell('C'.$i)->getValue(),
                    'password'=> $excel->getActiveSheet()->getCell('D'.$i)->getValue(),
                    'dob'=> $excel->getActiveSheet()->getCell('E'.$i)->getValue(),
                    'bio'=> $excel->getActiveSheet()->getCell('F'.$i)->getValue(),
                    'gender'=> $excel->getActiveSheet()->getCell('G'.$i)->getValue(),
                    'height'=> $excel->getActiveSheet()->getCell('H'.$i)->getValue(),
                    'heightunit'=> $excel->getActiveSheet()->getCell('I'.$i)->getValue(),
                    'weight'=> $excel->getActiveSheet()->getCell('J'.$i)->getValue(),
                    'weightunit'=> $excel->getActiveSheet()->getCell('K'.$i)->getValue(),
                    'bmi'=> $excel->getActiveSheet()->getCell('L'.$i)->getValue(),
                    'doexercise'=> $excel->getActiveSheet()->getCell('M'.$i)->getValue(),
                    'challeengesfaceCSV'=> $excel->getActiveSheet()->getCell('N'.$i)->getValue(),
                    'needsCSV'=> $excel->getActiveSheet()->getCell('O'.$i)->getValue(),
                    'profilepic'=> $excel->getActiveSheet()->getCell('P'.$i)->getValue(),
                    'relationshipstatus'=> $excel->getActiveSheet()->getCell('Q'.$i)->getValue(),
                    'noofchildren'=> $excel->getActiveSheet()->getCell('R'.$i)->getValue(),
                    'workingschedule'=> $excel->getActiveSheet()->getCell('S'.$i)->getValue(),
                    'workingweekhours'=> $excel->getActiveSheet()->getCell('T'.$i)->getValue(),
                    'workingdailyhours'=> $excel->getActiveSheet()->getCell('U'.$i)->getValue(),
                    'dailywalkinghours'=> $excel->getActiveSheet()->getCell('V'.$i)->getValue(),
                    'manuallabourdifficultylevel'=> $excel->getActiveSheet()->getCell('W'.$i)->getValue(),
                    'badhabitsCSV'=> $excel->getActiveSheet()->getCell('X'.$i)->getValue(),
                    'foodallergiesCSV'=> $excel->getActiveSheet()->getCell('Y'.$i)->getValue(),
                    'usertype'=> $excel->getActiveSheet()->getCell('Z'.$i)->getValue(),
                    'preferredcoachgender'=> $excel->getActiveSheet()->getCell('AA'.$i)->getValue(),
                    'preferredcoach'=> $excel->getActiveSheet()->getCell('AB'.$i)->getValue(),
                    'preferredcoachabilitiesCSV'=> $excel->getActiveSheet()->getCell('AC'.$i)->getValue(),
                    'userlevel'=> $excel->getActiveSheet()->getCell('AD'.$i)->getValue(),
                    'totalpoints'=> $excel->getActiveSheet()->getCell('AE'.$i)->getValue(),
                    'magiclinktoken'=> $excel->getActiveSheet()->getCell('AF'.$i)->getValue(),
                    'onesignalid'=> $excel->getActiveSheet()->getCell('AG'.$i)->getValue(),
                    'coachid'=> $excel->getActiveSheet()->getCell('AH'.$i)->getValue(),
                    'isactive'=> $excel->getActiveSheet()->getCell('AI'.$i)->getValue(),
                    'isdeleted'=> $excel->getActiveSheet()->getCell('AJ'.$i)->getValue(),
                    'createdon'=> $excel->getActiveSheet()->getCell('AK'.$i)->getValue(),
                    'updatedon'=> $excel->getActiveSheet()->getCell('AL'.$i)->getValue(),
                    );
                    $this->db->insert('users',$data);
                    $i++;
                }
                redirect('/index.php/pages/import');
        }
    }






?>