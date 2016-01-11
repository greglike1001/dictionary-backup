
jQuery(document).ready(function($) {

	$("#login").click(function(){
            var uname=encodeURIComponent($("#uname").val());
            var p1=encodeURIComponent($("#p1").val());

            var dataString= 'uname=' + uname +
                            '&p1=' + p1;

            $.ajax({
                type: "POST",
		url: "db/get_user.php",
		data: dataString,
		cache: false,
		success: function(remark){
                    $('#login_stat').html(remark);
                    return false;
		}
            });
        });

 });


