$(document).ready(function() {


    var wrapper=$(".refree_wrap"); //Fields wrapper

    $(".add_ref_btn").click(function(){
        $(wrapper).append($("#addMoreRefreeDiv").html());
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});