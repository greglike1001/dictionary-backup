$(document).ready(function (e) {    
        $("#search_form").on('submit',(function(e) {           
            
            e.preventDefault();
            $("#remark").empty();
             //$('#image_preview').show();
         
            if ($("#search_form").validate().form() === true) {
                   $.ajax({
                    url: "new/db/get_definition.php", // Url to which the request is send
                    type: "POST",             // Type of request to be send, called as method
                    data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    cache: false,             // To unable request pages to be cached
                    processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data){                            
                        $("#remark").html(data);
                    }
                });
            }     
               
                
        }));               
});




