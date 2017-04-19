/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    /*
     * showing departments table
     */
    $("#showDepartments").click(function(){
       console.log("Clicking show department button");
       $.get("showDepartments.php", function(data, status){
           console.log("ssipal");
          $("#departmentsRecords").empty();
          console.log("departmentsRecords.empty()");
          
          $.each(data, function(index, record){
             $("#departmentsRecords").append("<li>" + record['BusinessDepartmentID']
                     + "| " + record['DepartmentNam']+ "| " + record['DepartmentDesc']
                     + "| " + record['DataStewardNam']+ "| " + record['CreatedByUserNam']
                     + "| " + record['CreatedDt']+ "| " + record['UpdatedByUserNam']
                     + "| " + record['UpdatedDt'] + "</li>"); 
                     console.log("each data function");
          });
       });
    });
    }); 