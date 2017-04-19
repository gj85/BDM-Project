<?php

    error_reporting(E_ALL);
    ini_set('display_errors','On');
    
    $user = 'root';
    $pw ='';
    
    $dsn =new PDO('mysql:host=localhost;dbname=developing', $user, $pw);
    
    $GlossaryID = $_GET['GlossaryID'];
    $SubmittingDepartmentID = $_GET['SubmittingDepartmentID'];
    $TermName = $_GET['TermName'];
    $TermDescriptionTxt = $_GET['TermDescriptionTxt'];
    $TermCalculationTxt = $_GET['TermCalculationTxt'];
    $TermAliasTxt = $_GET['TermAliasTxt'];
    $SubjectMatterExpertNam = $_GET['SubjectMatterExpertNam'];
    $TermCmnt = $_GET['TermCmnt'];
    $TermStatusType = $_GET['TermStatusType'];
    $BusinessUseDesc = $_GET['BusinessUseDesc'];
    $ValidationTxt = $_GET['ValidationTxt'];
    $BusinessMeasureInd = $_GET['BusinessMeasureInd'];
    $DatatrieveStatementTxt = $_GET['DatatrieveStatementTxt'];
    $DatatrieveProcedureNam = $_GET['DatatrieveProcedureNam'];
    $DatatrieveCmnt = $_GET['DatatrieveCmnt'];
    $RelatedMeasuresTxt = $_GET['RelatedMeasuresTxt'];
    $ApprovedInd = $_GET['ApprovedInd'];
    $ApprovedByNam = $_GET['ApprovedByNam'];
    $ApprovedDt = $_GET['ApprovedDt'];
    $KeywordsTxt = $_GET['KeywordsTxt'];
    $CreatedByUserNam = $_GET['CreatedByUserNam'];
    $CreatedDt = $_GET['CreatedDt'];
    $UpdatedByUserNam = $_GET['UpdatedByUserNam'];
    $UpdatedDt = $_GET['UpdatedDt'];
    
    
    $sql = "insert into glossary(GlossaryID"
        
            . ", SubmittingDepartmentID, TermName"
            
        . ", TermDescriptionTxt, TermCalculationTxt,"
        . "TermAliasTxt, "
        . "SubjectMatterExpertNam,"
        . "TermCmnt, TermStatusType"
        . ", BusinessUseDesc, ValidationTxt, BusinessMeasureInd,"
        . "DatatrieveStatementTxt , DatatrieveProcedureNam,"
        . "DatatrieveCmnt, RelatedMeasuresTxt,"
        . "ApprovedInd, ApprovedByNam, ApprovedDt, KeywordsTxt,"
        . "CreatedByUserNam, CreatedDt, UpdatedByUserNam, "
        . "UpdatedDt)"
              
              
             
        . " values (?)";
    
    $results = $dsn->prepare($sql);
    
    /*
    $a = $results->execute([$GlossaryID,$SubmittingDepartmentID,$TermName,
        $TermDescriptionTxt,$TermCalculationTxt,$TermAliasTxt
            ,$TermAliasTxt,$SubjectMatterExpertNam,$TermCmnt
            ,$TermStatusType,$BusinessUseDesc,$ValidationTxt,
        $BusinessMeasureInd,$DatatrieveStatementTxt,$DatatrieveProcedureNam
            ,$DatatrieveCmnt,$RelatedMeasuresTxt,$ApprovedInd,
        $ApprovedByNam,$ApprovedDt,$KeywordsTxt,$CreatedByUserNam
            ,$CreatedDt,$UpdatedByUserNam,$UpdatedDt]);
    
     **/
      
     
    $a = $results->execute([$GlossaryID]);
    
    
    $b = $results->execute([$SubmittingDepartmentID]);
    $c = $results->execute([$TermName]);
    
    $d = $results->execute([$TermDescriptionTxt]);
    $e = $results->execute([$TermCalculationTxt]);
    $f = $results->execute([$TermAliasTxt]);
    $g = $results->execute([$SubjectMatterExpertNam]);
    $h = $results->execute([$TermCmnt]);
    $i = $results->execute([$TermStatusType]);
    $j = $results->execute([$BusinessUseDesc]);
    $k = $results->execute([$ValidationTxt]);
    $l = $results->execute([$BusinessMeasureInd]);
    $m = $results->execute([$DatatrieveStatementTxt]);
    $n = $results->execute([$DatatrieveProcedureNam]);
    $o = $results->execute([$DatatrieveCmnt]);
    $p = $results->execute([$RelatedMeasuresTxt]);
    $q = $results->execute([$ApprovedInd]);
    $r = $results->execute([$ApprovedByNam]);
    $s = $results->execute([$ApprovedDt]);
    $t = $results->execute([$KeywordsTxt]);
    $u = $results->execute([$CreatedByUserNam]);
    $v = $results->execute([$CreatedDt]);
    $w = $results->execute([$UpdatedByUserNam]);
    $x = $results->execute([$UpdatedDt]);
    
    
    
    
    /*
    $arr =array($GlossaryID,$SubmittingDepartmentID,$TermName,
        $TermDescriptionTxt,$TermCalculationTxt,$TermAliasTxt
            ,$TermAliasTxt,$SubjectMatterExpertNam,$TermCmnt
            ,$TermStatusType,$BusinessUseDesc,$ValidationTxt,
        $BusinessMeasureInd,$DatatrieveStatementTxt,$DatatrieveProcedureNam
            ,$DatatrieveCmnt,$RelatedMeasuresTxt,$ApprovedInd,
        $ApprovedByNam,$ApprovedDt,$KeywordsTxt,$CreatedByUserNam
            ,$CreatedDt,$UpdatedByUserNam,$UpdatedDt);
    echo $arr;
    
    foreach ($arr as &$value){
        $n = $results->execute([$arr]);
        
        header("Content-type: text/plain");
        echo $n;
    }
    */
    
    header("Content-type: text/plain");
    echo $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x;