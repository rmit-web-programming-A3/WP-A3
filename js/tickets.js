$(document).ready(function() {
    var SA;
    var SP;
    var SC;
    var FA;
    var FC;
    var B1;
    var B2;
    var B3;
    var movie;
    var day;
    var time;
    
    
    
    function acquireHash(url){
        return $("<a />").attr("href", url)[0].hash.replace(/^#/, "");
    }
    
    function priceSetter(discountStatus){
        $("#comments .ticketNo").prop("disabled", false);
        document.getElementById("submit").disabled = false;
        SA = $("#SA").val();
        SP = $("#SP").val();
        SC = $("#SC").val();
        FA = $("#FA").val();
        FC = $("#FC").val();
        B1 = $("#B1").val();
        B2 = $("#B2").val();
        B3 = $("#B3").val();
        
        total = $("#to").val();
        
        if(discountStatus){
            $("#SAPrice").val((SA * 12));
            $("#SPPrice").val((SP * 10));
            $("#SCPrice").val((SC * 8));
            $("#FAPrice").val((FA * 25));
            $("#FCPrice").val((FC * 20));
            $("#B1Price").val((B1 * 20));
            $("#B2Price").val((B2 * 20));
            $("#B3Price").val((B3 * 20));
            
        } else if (!discountStatus){
            $("#SAPrice").val((SA * 18));
            $("#SPPrice").val((SP * 15));
            $("#SCPrice").val((SC * 12));
            $("#FAPrice").val((FA * 30));
            $("#FCPrice").val((FC * 25));
            $("#B1Price").val((B1 * 30));
            $("#B2Price").val((B2 * 30));
            $("#B3Price").val((B3 * 30));
            }

        $("#to").val((+SA + +SP + +SC + +FA + +FC + +B1 + +B2 + +B3));
        $("#toPrice").val(+$("#SAPrice").val() + +$("#SPPrice").val() + +$("#SCPrice").val() + +$("#FAPrice").val() + +$("#FCPrice").val() + +$("#B1Price").val() + +$("#B2Price").val() + +$("#B3Price").val() + ".00");
        
    }
    function priceClearer(){ 
        $("#SAPrice").val(0);
        $("#SPPrice").val(0);
        $("#SCPrice").val((0));
        $("#FAPrice").val((0));
        $("#FCPrice").val((0));
        $("#B1Price").val((0));
        $("#B2Price").val((0));
        $("#B3Price").val((0));
        $("#to").val((0));
        $("#toPrice").val(0.00);
        $("#SA").val(0);
        $("#SP").val(0);
        $("#SC").val(0);
        $("#FA").val(0);
        $("#FC").val(0);
        $("#B1").val(0);
        $("#B2").val(0);
        $("#B3").val(0);
    }
    
    
    function calculatePrices(){
        movie = $("movie").val();
        day = $("#day").val();
        time = $("#time").val();
        var discountStatus;
        
        if(time == "none")
        {
            $("#comments .ticketNo").prop("disabled", true);
            document.getElementById("submit").disabled = true;
            priceClearer();
            
            
        }else{
            
            if((day == "mon" || day == "tue")||((day == "wed" || day == "thu" || day == "fri")&&(time=="1pm")))
            {
                priceSetter(true);
            } else if (((day == "wed" || day == "thu" || day == "fri")&& time!="1pm")||(day == "sat" || day =="sun"))
            {
                priceSetter(false);
            }
        }
    }
    
    
    
   var movie = acquireHash(window.location.href);
   
    if (movie != ""){
        $("#movie").val(movie);
        
    } else {
        movie = "CH";
        $("#movie").val(movie);
    }
    
    
    $(".cover").css("background", "url(images/" + movie + ".jpg) no-repeat center");
    
    $("#time").chained("#movie, #day");
    calculatePrices();
    
    $(document).on('change', 'select', function() {
        calculatePrices();
    });
    $(":input").bind('keyup mouseup', function () {
        calculatePrices();
    });
    
    
    

});