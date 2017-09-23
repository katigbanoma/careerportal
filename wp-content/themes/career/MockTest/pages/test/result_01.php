<?php
session_start();
include("../../vendor/autoload.php");

use Dompdf\Dompdf;


// $user=$_SESSION['user'];
$user = 49;
$client=new \GuzzleHttp\Client();

//$url="http://localhost:8200/api/cad/cvb/builder/all_info/".$user;
$url="http://campaign.atp-sevas.com/MobiChurch/public/index.php/api/cad/cvb/builder/all_info/".$user;

$response=$client->get($url);

if($response->getStatusCode()!==200){
    echo 'An error occurred... Please reload the page';
    exit;
}

$json=$response->getBody()->getContents();
$data=json_decode($json);

//
$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);
$mpdf->SetDisplayMode('fullpage');


$output='
<body>
<nav class="navbar navbar-light bg-faded text-center ">
    <div class="personal">
                <span class="navbar-text text-center" >
                  <h3> <strong>'.strtoupper($data->basic_info->surname.' '.$data->basic_info->middlename.' 
                  '.$data->basic_info->firstname).'<br/></strong>
                    CONTACT ADDRESS ADDRESS<br/>
                    +'.$data->basic_info->phone.'<br/>
                    '.$data->basic_info->email.'<br/><h3/>
                </span>
    </div>
</nav>
<div class="container-fluid">
    <div id="personal">
        <nav class="navbar navbar-light bg-faded text-center ">
                    <span class="navbar-text text-left " >
                        <h3> <strong>Personal Statement<br/></strong></h5>
                        <p align="justify">'.$data->basic_info->summary .'</p>
                    </span>
            <br/>
        </nav>
    </div>
    <div id="education">
        <nav class="navbar navbar-light bg-faded">
                    <span class="text-left">
                     <strong>Educational Background<br/></strong>';


foreach ($data->education_info as $education){

    $output.='<div class="row text-center">
                            <div class="col-xs-6 col-md-4">
                               '.$education->school_name .'
                            </div>
                            <div class="col-xs-6 col-md-4">
                                '.$education->certificate .'
                            </div>
                            <div class="col-xs-6 col-md-4">
                                '.$education->grad_date .'
                            </div>

                            <br />
                        </div>';

}

$output.='</span>
        </nav>
    </div>
    <div id="experience">
        <nav class="navbar navbar-light bg-faded">
                    <span class="text-left" >
                        <strong>Experience<br/></strong>';

foreach ($data->experience_info as $experience){

    $output.='<div class="row text-center">
                            <div class="col-xs-2 col-md-4">
                                '.$experience->company .'
                            </div>
                            <div class="col-xs-2 col-md-4">
                                '.$experience->post_held.'
                            </div>
                            <div class="col-xs-2 col-md-4">
                                From: '.$experience->start_year .'
                            </div>

                            <div class="col-xs-2 col-md-4">
                                To: '.$experience->end_year.'
                            </div>

                            <div class="col-xs-2 col-md-4">
                                Job Description: '.$experience->job_desc.'
                            </div>

                            <br />
                        </div>';

}

$output.='<br />
                        </div>
                    </span>
        </nav>
    </div>
    <div id="skills">
        <nav class="navbar navbar-light bg-faded">
                    <span class="text-left">
                        <strong>Skills<br/></strong>
                        <ul>';

$interests=$data->interest_info->interests;
$skills=explode(',',$data->interest_info->skills);
foreach ($skills as $skill){

    if($skill!==""){
        $output.='<li>'.$skill.'</li>';

                        }
                    }

                        $output.='</ul>
    </div>
    <div id="referee">
        <nav class="navbar navbar-light bg-faded personal">
                    <span class="">
                         <div class="row ">
                            <h3>Refree</h3>';

        foreach ($data->referees as $referee){

            $output.='<div class="col-xs-2 col-md-4 text-left">
                                '.$referee->surname.' '.$referee->othernames.'<br />
                                '.$referee->organization .' <br />
                                '.$referee->phone .'<br/>
                                '.$referee->email .'<br />
                            </div>
                            <br />';

        }

        $output.='</div>
                    </span>
        </nav>
    </div>
</div>
</body>';

//echo $output;
$mpdf->WriteHTML($output);
$mpdf->Output();

// $pdf=new Dompdf();

// var_dump($pdf);
// exit;
// $pdf->loadHtml($output);
// $pdf->setPaper('A4','portrait');
// $pdf->render();
// $pdf->stream();
// $pdf->stream('my_pdf.pdf','I');


