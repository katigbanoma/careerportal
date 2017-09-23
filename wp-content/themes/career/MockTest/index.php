<?php
/**
 * Created by PhpStorm.
 * User: LordRahl
 * Date: 2/13/17
 * Time: 1:32 PM
 */

session_start();
$_SESSION['user_id']=1;

?>
<!Doctype Html>

<html>
<head>

    <link rel="stylesheet" href="./assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/styles/styles.css" />
    <title>
        Mock Test Home
    </title>
</head>

<body>
<div class="container-fluid">
    <div class="page-header">
        <h1>Mock Test</h1>
    </div>

    <section class="col-md-12">
        <article class="col-md-6 col-md-offset-3">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">
                        Enter Your Phone Number
                    </div>
                </div>

                <div class="panel-body">


                    <div class="row">
                        <label class="col-md-3">Phone Number</label>
                        <input type="text" name="phone_number" id="phone" placeholder="234-xx-xxxx-xxxx" class="form-control" style="width:70%" />
                    </div>

                    <div align="center">
                        <button type="button" class="btn btn-primary" id="loadUserInfoBtn">
                            Proceed
                        </button>
                    </div>
                </div>
            </div>
        </article>
    </section>
</div>


<script src="./assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="./assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/scripts/jquery.form.min.js"></script>
<script src="./assets/scripts/utility.js"></script>
<!--<script src="./assets/scripts/startTest.js"></script>-->

<script>
    $(function(){

        $("#loadUserInfoBtn").click(function(){
           var phone=$("#phone").val();

           if(phone!==''){
               $.post('http://localhost:9000/servers/register_server.php',{phone:phone},function(_data){

                  var data=JSON.parse(_data);
                  if(data.status!=='success'){
                      error(data.desc);
                      return;
                  }

                  window.location="sel_question.php";
               });
           }
        });
    });
</script>


</body>
</html>
