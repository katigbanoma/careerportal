<?php
/**
 * Created by PhpStorm.
 * User: LordRahl
 * Date: 2/23/17
 * Time: 11:46 AM
 */

include("./pages/header.php");
?>

<div class="col-lg-6 col-lg-offset-3">

    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                Welcome
            </div>
        </div>

        <div class="panel-body">
                <div class="row">
                    <label class="col-md-3">
                        Phone Number
                    </label>
                    <input type="text" class="form-control required" name="phone" id="phone_number" style="width:70%" placeholder="234-xx-xxxx-xxxx" />
                </div>

                <div align="center">
                    <button type="button" class="btn btn-info" id="registerUserBtn">Proceed</button>
                </div>
        </div>
    </div>

</div>

<?php
include ("./pages/footer.php");
?>

<script>
    $(function(){

        $("#registerUserBtn").click(function(){
            var phone=$("#phone_number").val();

            if(phone!==""){
                $.post('./Servers/register_session.php',{phone:phone},function(_data){
                    console.log(_data);

                    var data=JSON.parse(_data);

                   if(data.status!=='success'){
                       error(data.desc);
                       return;
                   }

                   window.location="cvbuilder.php";
                });
            }
        });
    });
</script>