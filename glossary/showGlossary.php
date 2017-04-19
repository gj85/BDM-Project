<?php

$host ='localhost';
$user ='root';
$pw ='';
        
        
        
        
$dbh = new PDO('mysql:host=localhost;dbname=developing', $user, $pw);
        
$data= $dbh->query("select GlossaryID, SubmittingDepartmentID, TermName"
        . ", TermDescriptionTxt, TermCalculationTxt,"
        . "TermAliasTxt, "
        . "SubjectMatterExpertNam,"
        . "TermCmnt, TermStatusType"
        . ", BusinessUseDesc, ValidationTxt, BusinessMeasureInd,"
        . "DatatrieveStatementTxt , DatatrieveProcedureNam,"
        . "DatatrieveCmnt, RelatedMeasuresTxt,"
        . "ApprovedInd, ApprovedByNam, ApprovedDt, keywordsTxt,"
        . "CreatedByUserNam, CreatedDt, UpdatedByUserNam, "
        . "UpdatedDt from glossary");
       
     
       
header("Content-Type: application/json");
echo json_encode($data->fetchAll(PDO::FETCH_ASSOC));
                