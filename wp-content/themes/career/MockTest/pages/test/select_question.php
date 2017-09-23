<div class="container-fluid">
            <div class="page-header">
                <h1>Mock Test</h1>
            </div>

            <section class="col-md-12">
                <article class="col-md-6 col-md-offset-3">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Take Your Test
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <label class="col-md-3">Select Category</label>
                                <select class="form-control" style="width:70%" id="test_category">
                                    <option value="0">Select Category</option>
                                </select>
                            </div>

                            <div class="row">
                                <label class="col-md-3">Number of Questions</label>
                                <input type="number" min="1" max="100" class="form-control" style="width:70%" id="test_quantity" />
                            </div>


                            <div class="row">
                                <label class="col-md-3">Select Level</label>
                                <select class="form-control" style="width:70%" id="test_level">
                                    <option value="0">Select Level</option>
                                    <option value="1">Beginner</option>
                                    <option value="2">Amateur</option>
                                    <option value="3">Professional</option>
                                    <option value="4">SuperStar</option>
                                </select>
                            </div>


                            <div align="center">
                                <button type="button" class="btn btn-primary" id="startTestBtn">
                                    Start Test
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>


    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/scripts/jquery.form.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/scripts/utility.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/scripts/startTest.js"></script>

     <script>
         $(function(){
            // Get Question Set
            $.get(getUrl('cad/questionset'), function(data){
                var record=JSON.parse(data);
                
                if(record.length>0){
                    $.each(record,function(i,v){
                        $("#test_category").append("<option value="+v.id+">"+v.set_name+"</option>");
                    });
                }
            });


             $("#startTestBtn").click(function(){


                 var level=$("#test_level").val();
                 var category=$("#test_category").val();
                 var quantity=$("#test_quantity").val();

                 if(category > 0 && quantity>0){
                    var user=<?php echo $_SESSION['user_id']; ?>;

                    if(quantity>100){
                        quantity=100;
                    }
                     var url=getUrl("cad/test/prepare");
                    //loading test page after this post
                     $.post(url,{category:category,user:user,quantity:quantity,level:level}, function(data){

                         if(data.code==500){
                             error(data.message);
                             return;
                         }

                         var test_id=data.test_id;
                         keepValue('test_id',test_id);

                         //move to the test page from here
                         window.location.href = "<?php echo get_home_url() ?>/index.php/mock-test?action=main_test_page&test_id="+test_id;
                     });
                 }

             });

         });
     </script>