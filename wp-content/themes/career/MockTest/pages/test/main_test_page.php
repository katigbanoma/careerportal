<div class="col-md-12">

<div class="page-header">
                <h1>Mock Test</h1>
            </div>

    <div class="col-md-6 col-md-offset-3">

        <form id="question_form" method="post">
            <input type="hidden" name="question_no" id="question_no" value="" />
            <input type="hidden" name="test_id" id="test_id" value="" />
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">
                        <span>Question <span id="quest_count"></span></span>
                    </div>
                </div>

                <div class="panel-body" style="padding-left: 20px;">

                    <div class="row wells">
                        <p id="question">Question</p>
                    </div>

                    <div class="row" id="option_a">
                    </div>

                    <div class="row" id="option_b">
                    </div>

                    <div class="row" id="option_c">
                    </div>

                    <div class="row" id="option_d">

                    </div>


                    <div align="center" id="buttonDiv" style="display: none;">
                        <button type="button" class="btn btn-primary" id="proceedTestBtn">Proceed</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>


<script>
    $(function(){
        var i=1;
       var test_id=getValue('test_id');

       console.log("Test ID" + test_id);

       //get the question
        $.get(getUrl('cad/test/loadQuestion/'+test_id), function(data){


            var result=JSON.parse(data);
            if(result.length<=0){
                error("There are no questions yet for this category!!");
                return;
            }

            if(result.status!=='question'){
                location="./test_result_page.php?test_id="+result.test_id;
            }


           $("#quest_count").html(i);
          $("#question_no").val(result.id);
          $("#test_id").val(getValue('test_id'));
          $("#question").html(result.question);
          $("#option_a").html('<input type="radio" name="options" value="'+result.option_a+'"  /> '+result.option_a);
          $("#option_b").html('<input type="radio" name="options" value="'+result.option_b+'"  /> '+result.option_b);
          $("#option_c").html('<input type="radio" name="options" value="'+result.option_c+'"  /> '+result.option_c);
          $("#option_d").html('<input type="radio" name="options" value="'+result.option_d+'"  /> '+result.option_d);

          $("#buttonDiv").slideDown();

          //we can also start the time here
        });


        $("#question_form").ajaxForm(function(data){
            i++;
//            console.log(data);
            result=JSON.parse(data);

            if(result.status!=='question'){
                //we reload to the answer page
                console.log(result.test_id);
                // location="./test_result_page.php?test_id="+result.test_id;
                window.location.href = "<?php echo get_home_url() ?>/index.php/mock-test?action=test_result_page&test_id="+result.test_id;

            }

            $("#quest_count").html(i);
            $("#question_no").val(result.id);
            $("#test_id").val(getValue('test_id'));
            $("#question").html(result.question);
            $("#option_a").html('<input type="radio" name="options" value="'+result.option_a+'"  /> '+result.option_a);
            $("#option_b").html('<input type="radio" name="options" value="'+result.option_b+'"  /> '+result.option_b);
            $("#option_c").html('<input type="radio" name="options" value="'+result.option_c+'"  /> '+result.option_c);
            $("#option_d").html('<input type="radio" name="options" value="'+result.option_d+'"  /> '+result.option_d);

            $("#buttonDiv").slideDown();

        });


        $(document).on('click','#proceedTestBtn',function(){
            $("#buttonDiv").slideUp();
            $("#question_form").prop('action',getUrl('cad/test/proceed'));
            $("#question_form").submit();
        });
    });
</script>