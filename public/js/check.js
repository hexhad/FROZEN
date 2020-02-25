$(document).ready(function(){
    $("input[name='s1']").change(function(){
        var maxAllowed=1;
        var cnt = $("input[name='s1']:checked").length;
        if (cnt > maxAllowed){
        $(this).prop("checked", "");
            // alert('You can select maximum' + maxAllowed + 'Ingreadieant');
           
        //    document.getElementById('ss1').innerHTML="You can select only one ice cream base"
        swal({
            title: "Ice Cream Base",
            text: "You can select only one ice cream base....",
            timer: 3000,     
            icon: "warning",
            dangerMode: true,
            showConfirmButton: false
          });
                  
            
        }else{
           
        //    document.getElementById('ss1').innerHTML=" "
            
        }
    });
});

$(document).ready(function(){
    $("input[name='s2']").change(function(){
        var maxAllowed=2;
        var cnt = $("input[name='s2']:checked").length;
        if (cnt > maxAllowed){
        $(this).prop("checked", "");
            // alert('You can select maximum' + maxAllowed + 'Ingreadieant');
            // document.getElementById('ss2').innerHTML="You can select maximum two ingreadients"

            swal({
                title: "Pick 2 Mix In",
                text: "You can select maximum two ingreadients....",
                timer: 3000,     
                icon: "warning",
                dangerMode: true,
                showConfirmButton: false
              });

        }else{
            // document.getElementById('ss2').innerHTML=" " 
        }
    });
    
});

$(document).ready(function(){
    $("input[name='s3']").change(function(){
        var maxAllowed=2;
        var cnt = $("input[name='s3']:checked").length;
        if (cnt > maxAllowed){
        $(this).prop("checked", "");
            // alert('You can select maximum' + maxAllowed + 'Ingreadieant');
            // document.getElementById('ss3').innerHTML="You can select maximum two ingreadients"

            swal({
                title: "Pick 2 Topping",
                text: "You can select maximum two ingreadients....",
                timer: 3000,     
                icon: "warning",
                dangerMode: true,
                showConfirmButton: false
              });

        }else{
            // document.getElementById('ss3').innerHTML=" " 
        }
    });
});

$(document).ready(function(){
    $("input[name='s4']").change(function(){
        var maxAllowed=1;
        var cnt = $("input[name='s4']:checked").length;
        if (cnt > maxAllowed){
        $(this).prop("checked", "");
            // alert('You can select maximum' + maxAllowed + 'Ingreadieant');
            // document.getElementById('ss4').innerHTML="You can select maximum one ingreadient"

            swal({
                title: "Sauce",
                text: "You can select maximum one ingreadient....",
                timer: 3000,     
                icon: "warning",
                dangerMode: true,
                showConfirmButton: false
              });

        }else{
            // document.getElementById('ss4').innerHTML=" " 
        }
    });
});