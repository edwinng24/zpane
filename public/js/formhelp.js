
function getCityStateByZip(zip) {

    $.ajax({
            url : "http://www.zpane.com/zip/"+zip,
     type: "GET",
     async : true,
     contentType: "application/x-www-urlencoded",
     dataType : "json",
     beforeSend: function (xhr) {
         xhr.setRequestHeader("Authorization", "Client-ID your-client-id");
     },
     error : function(xhr,status,error){
         console.log(xhr);
     },
     success : function(xhr,status,error){
         $('#city').val(xhr['zip']['results']['zip_info']['city']);
         $('#state').val(xhr['zip']['results']['zip_info']['state']);
     },
     cache : true
     });
}

function getBankByRouting(routing) {

    $.ajax({
            url : "http://www.zpane.com/aba/"+routing,
     type: "GET",
     async : true,
     contentType: "application/x-www-urlencoded",
     dataType : "json",
     beforeSend: function (xhr) {
         xhr.setRequestHeader("Authorization", "Client-ID your-client-id");
     },
     error : function(xhr,status,error){
         console.log(xhr);
     },
     success : function(xhr,status,error){
         $('#bank_name').val(xhr['aba']['results']['aba_info']['name']);
     },
     cache : true
     });
}

      $(document).ready(validatepage);

