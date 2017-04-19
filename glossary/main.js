$(document).ready(function(){
    
    
    /*
     * Showing glossary table 
     */
    
    $("#showGlossary").click(function(){
        console.log("Clicks");
        $.get("showGlossary.php", function(data, status){
            console.log("calling php");
            $("#glossaryRecords").empty();
            $.each(data, function(index, record){
                $("#glossaryRecords").append("<li>" + record['GlossaryID']
                        
                        + "| " +
                        record['SubmittingDepartmentID'] + "| " + record['TermName']
                        
                        + "| " + record['TermDescriptionTxt'] 
                        + "| "+ record['TermCalculationTxt']  
                        + "| "+ record['TermAliasTxt'] 
                        + "| "+ record['SubjectMatterExpertNam']  
                        + "| "+ record['TermCmnt'] 
                        + "| "+ record['TermStatusType']  
                        + "| "+ record['BusinessUseDesc']  
                        + "| "+ record['ValidationTxt']  
                        + "| "+ record['BusinessMeasureInd']  
                        + "| "+ record['DatatrieveStatementTxt'] 
                        + "| "+ record['DatatrieveProcedureNam']  
                        + "| "+ record['DatatrieveCmnt']  
                        + "| "+ record['RelatedMeasuresTxt']  
                        + "| "+ record['ApprovedInd']  
                        + "| "+ record['ApprovedByNam']  
                        + "| "+ record['ApprovedDt']  
                        + "| "+ record['KeywordsTxt']  
                        + "| "+ record['CreatedByUserNam']  
                        + "| "+ record['CreatedDt']  
                        + "| "+ record['UpdatedByUserNam']  
                        + "| "+ record['UpdatedDt'] 
                        
                        
                        + "</li>");
                
               
                //$("#glossaryRecords").append("<li>" + record[''] + "</li>");
            });
        });
    });
    
    /*
     * Adding rows/inputs to glosssary tables
     */
    
    $("#addGlo").click(function(){
        
        GlossaryID = $("#GlossaryID").val();
        SubmittingDepartmentID = $("#SubmittingDepartmentID").val();
        TermName = $("#TermName").val();
        TermDescriptionTxt  = $("#TermDescriptionTxt").val();
        TermCalculationTxt  = $("#TermCalculationTxt").val();
        TermAliasTxt = $("#TermAliasTxt").val();
        SubjectMatterExpertNam  = $("#SubjectMatterExpertNam").val();
        TermCmnt  = $("#TermCmnt").val();
        TermStatusType  = $("#TermStatusType").val();
        BusinessUseDesc  = $("#BusinessUseDesc").val();
        ValidationTxt  = $("#ValidationTxt").val();
        BusinessMeasureInd  = $("#BusinessMeasureInd").val();
        DatatrieveStatementTxt  = $("#DatatrieveStatementTxt").val();
        DatatrieveProcedureNam = $("#DatatrieveProcedureNam").val();
        DatatrieveCmnt = $("#DatatrieveCmnt").val();
        RelatedMeasuresTxt = $("#RelatedMeasuresTxt").val();
        ApprovedInd = $("#ApprovedInd").val();
        ApprovedByNam = $("#ApprovedByNam").val();
        ApprovedDt = $("#ApprovedDt").val();
        KeywordsTxt = $("#KeywordsTxt").val();
        CreatedByUserNam = $("#CreatedByUserNam").val();
        CreatedDt = $("#CreatedDt").val();
        UpdatedByUserNam = $("#UpdatedByUserNam").val();
        UpdatedDt = $("#UpdatedDt").val();
        
 
        $.get("addGlossary.php?GlossaryID="+ GlossaryID +
                "&SubmittingDepartmentID="+SubmittingDepartmentID+
                "&TermName="+TermName+
                "&TermDescriptionTxt="+TermDescriptionTxt+
                "&TermCalculationTxt="+TermCalculationTxt+
                "&TermAliasTxt="+TermAliasTxt+
                "&SubjectMatterExpertNam="+SubjectMatterExpertNam+
                "&TermCmnt="+TermCmnt+
                "&TermStatusType="+TermStatusType+
                "&BusinessUseDesc="+BusinessUseDesc+
                "&ValidationTxt="+ValidationTxt+
                "&BusinessMeasureInd="+BusinessMeasureInd+
                "&DatatrieveStatementTxt="+DatatrieveStatementTxt+
                "&DatatrieveProcedureNam="+DatatrieveProcedureNam+
                "&DatatrieveCmnt="+DatatrieveCmnt+
                "&RelatedMeasuresTxt="+RelatedMeasuresTxt+
                "&ApprovedInd="+ApprovedInd+
                "&ApprovedByNam="+ApprovedByNam+
                "&ApprovedDt="+ApprovedDt+
                "&KeywordsTxt="+KeywordsTxt+
                "&CreatedByUserNam="+CreatedByUserNam+
                "&CreatedDt="+CreatedDt+
                "&UpdatedByUserNam="+UpdatedByUserNam+
                "&UpdatedDt="+UpdatedDt,
                
        
        
        
        
        function(data, status){
            $("#status").text(data + " record," + GlossaryID +
                    ", "+TermName+
                    " has been added to the glossary table.");
            
        });
    });
    
    /*
     * Showing Departments table
     */
    

    
    
    
    
    
    
});
