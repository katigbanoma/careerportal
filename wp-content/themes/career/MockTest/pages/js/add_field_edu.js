$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".education_wrap"); //Fields wrapper
    var add_button      = $(".add_school_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append($("#addMoreEducation").html());
            //$(wrapper).append('<div class="row"><label class="col-md-3" for="input-sm">Institution</label><input type="text" class="form-control input-sm" name="institution[]" placeholder="Enter School Name"></div><div class="form-group"><label for="input-sm">Qualification</label><input type="text" name="qualification[]" class="form-control input-sm" placeholder="e.g. Bsc Computer Science"></div><div class="form-group"><label for="input-sm">Graduation Date</label><input type="date" name="courses[]" style=""  class="form-control input-sm" placeholder="e.g. 2016-12-30"><!--</div><a href="#" class="remove_field">Remove</a></div>-->'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
//$(function () {

        // $('form').on('submit', function (e) {
        //
        //   e.preventDefault();
        //
        //   $.ajax({
        //     type: 'post',
        //     url: 'dbinputeducation.php',
        //     data: $('form').serialize(),
        //     success: function (data) {
        //       alert('saved');
        //       console.log(data);
        //     }
        //   });
        //
        // });

     // });
