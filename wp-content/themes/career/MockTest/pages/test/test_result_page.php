<?php
/**
 * Created by PhpStorm.
 * User: LordRahl
 * Date: 2/14/17
 * Time: 12:34 PM
 */
?>

<div class="col-md-6 col-md-offset-3">
        <div class="page-header">
                <h1> Test Result</h1>
            </div>

        <div class="panel-body">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td width="40%">Passed:</td>
                    <td><span id="passed"></span></td>
                </tr>

                <tr>
                    <td width="40%">Missed:</td>
                    <td><span id="missed"></span></td>
                </tr>

                <tr>
                    <td width="40%">Total:</td>
                    <td><span id="total"></span></td>
                </tr>

                <tr>
                    <td width="40%">Percentage:</td>
                    <td><span id="percentage"></span></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <a href="<?php echo home_url() ?>/index.php/mock-test" class="btn btn-info">Try Again</a>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>

<script>
    $(function(){
        var test_id=getValue('test_id');

        $.get(getUrl('cad/test/result/'+test_id),function(data){
           var result=JSON.parse(data);

           var passed=result.passed;
           var failed=result.failed;
           var total_count=result.set_count;

           var percentage=(passed/total_count)*100;

           $("#passed").text(passed);
           $("#missed").text(failed);
           $("#total").text(total_count);
           $("#percentage").text(percentage+"%");
        });
    });
</script>
