$("#example-vertical").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
    stepsOrientation:'vertical',
    saveState:true,
    startIndex:0,
    labels:{
        'finish':"Complete"
    },
    onStepChanging: function(event,currentIndex,newIndex){
        var move=false;
        if(currentIndex==0){
            //we r on the basic page,lets submit the basic form
            // alert("We are fine");

            var form=$("#basicInfoForm");

            if(form.valid()){

                 $.ajax({
                    type:'post',
                    url:getUrl('cad/cvb/basic'),
                     async:false,
                    data: $("#basicInfoForm").serialize(),
                    dataType:'json',
                    success: function(data){
                        if(data.status!=="success"){
                            error(data.message);
                            move=false;
                            return false;
                        }

                        move=true;
                        return true;

                    },
                    error: function(err){
                        move=false;
                        console.log(err);
                    }

                });

                 return move;
            }else{
                return false;
            }

            // console.log("Got Here too");
            // return true;
        }
        else if(currentIndex==1){
            var form=$("#addEducationRecord");

            if(form.valid()){
                $.ajax({
                    type:'POST',
                    url:getUrl('cad/cvb/education'),
                    async:false,
                    data:form.serialize(),
                    dataType:'json',
                    success: function(data){
                        console.log(data);
                        if(data.status!=='success'){
                            error(data.message);
                            move=false;
                            return;
                        }

                        //success(data.description);
                        move=true;
                        return true;
                    },
                    error: function(err){
                        console.log(err);
                    }
                });

                return move;
            }


            return false;
        }
        else if(currentIndex==2){
            var form=$("#addExperienceForm");

            if(form.valid()){
                $.ajax({
                    type:'POST',
                    url:getUrl('cad/cvb/experience'),
                    async:false,
                    data:form.serialize(),
                    dataType:'json',
                    success: function(data){
                        if(data.status!=='success'){
                            error(data.message);
                            return;
                        }

                        move=true;
                        //success(data.description);
                        return true;
                    },
                    error: function(err){
                        console.log(err);
                    }
                });

                return move;
            }

            return false;
        }
        else if(currentIndex==3){
            var form=$("#interestAndSkillForm");

            if(form.valid()){
                $.ajax({
                    type:'POST',
                    url:getUrl('cad/cvb/interests'),
                    data:form.serialize(),
                    dataType:'json',
                    async:false,
                    success:function(data){
                        if(data.status!=='success'){
                            error(status.message);
                            return;
                        }

                        move=true;
                        //success(data.description);
                        return true;
                    },
                    error: function(err){
                        console.log(err);
                    }
                });

                return move;
            }

            return false;
        }

        return true;
    },
    onStepChanged: function(event,currentIndex){
        var user_id=$("#addEducationRecord .user_id").val();

        if(currentIndex==1){
            //lets get the education level too
            getEductionInfo(user_id);
        }
        else if(currentIndex==2){
            getExperienceInfo(user_id);
        }
        else if(currentIndex==3){
            getInterestsInfo(user_id);
        }else if(currentIndex==4){
            getReferralInfo(user_id);
        }

    },
    onFinished: function(){
        var move=false;

        var form=$("#addRefreeForm");
        if(form.valid()){
            $.ajax({
                type:'POST',
                url:getUrl('cad/cvb/referee'),
                dataType:'json',
                async:false,
                data:form.serialize(),
                success: function(data){
                    if(data.status!=='success'){
                        error(data.message);
                        return false;
                    }

                    move=true;
                    //success(data.description);
                    return true;

                },
                error: function(err){
                    console.log(err);
                }
            });

            redirect_url = "http://localhost:9800/index.php/cv-output";
            // window.location=locki;
            window.location=redirect_url;
        }
    }
});

$(function(){
   //alert("Basic Loaded");
    var user_id=$("#basicInfoForm .user_id").val();
    getBasicInfo(user_id);
});

function getReferralInfo(user_id){
    $.get(getUrl("cad/cvb/referee/"+user_id),function(data){
       console.log(data);
       if(data.status!=='success'){
           console.log("New Comer");
           return;
       }

       var response=data.message;

       if(response.length<=0){
           return;
       }

        $(".refree_wrap").html("");
       $.each(response,function(i,v){
            $(".refree_wrap").append('<div class="form-group">'
            +'<label for="ref_first_name">First Name</label>'
           +'<input type="text" name="ref_first_name[]" class="form-control required" value="'+v.surname+'" />'
               +'</div>'
               +'<div class="form-group">'
               +'<label for="ref_last_name">Last Name</label>'
           +'<input type="text" name="ref_last_name[]" class="form-control required" value="'+v.othernames+'" />'
               +'</div>'
               +'<div class="form-group">'
               +'<label for="ref_email">E-Mail</label>'
               +'<input type="email" name="ref_email[]" class="form-control required" value="'+v.email+'" />'
               +'</div>'
               +'<div class="form-group">'
               +'<label for="basicPhoneNumber">Phone Number</label>'
           +'<input type="text" class="input-medium bfh-phone form-control required" data-format="+234 (000) 000-0000"'
           +'name="ref_phone_number[]" id="ebasicPhoneNumber" placeholder="000-0000-0000" value="'+v.phone+'" />'
               +'</div>'
               +'<div class="form-group">'
               +'<label for="ref_organization">Organazition</label>'
               +'<input type="text" name="ref_organization[]" class="form-control required" value="'+v.organization+'" />'
               +'</div>'
               +'<div class="form-group">'
               +'<label for="ref_job_description">Job Description</label>'
           +'<input type="text" name="ref_job_description[]" class="form-control required" value="'+v.job_desc+'" />'
               +'</div>'
               +'<hr />'
            );
       });
    });
}


function getInterestsInfo(user_id){


    $.get(getUrl('cad/cvb/interests/'+user_id),function(data){

        console.log(data);
        if(data.status!=='success'){
            console.log("New Comer");
            return;
        }

       
        var response=data.message;
        if(response==null || response==undefined){
            return;
        }
        $("#interests").tokenfield('setTokens',response.interests);
        $("#skills").tokenfield('setTokens',response.skills);
        $("#hobbies").tokenfield('setTokens',response.hobbies);

    });
}


function getExperienceInfo(user_id){
    $.get(getUrl('cad/cvb/experience/'+user_id),function(data){
        if(data.status!=='success'){
            console.log("New User");
            return;
        }


        var response=data.message;

        if(response.length<=0 || response==""){
            return;
        }

        $(".experience_wrap").html("");
        $.each(response,function(i,v){
            $(".experience_wrap").append('<div class="form-group">'
            +'<label for="input-sm">Organization</label>'
                +'<input type="text" class="form-control input-sm required" name="organization[]"'
            +'placeholder="Enter Company Name" value="'+v.company+'">'
                +'</div>'
                +'<div class="form-group">'
                +'<label for="input-sm">Post Held</label>'
            +'<input type="text" name="post_held[]" class="form-control input-sm required"'
            +'placeholder="e.g. Project Manager" value="'+v.post_held+'">'
                +'</div>'
                +'<div class="form-group">'
                +'<label for="reg_job_desc">Job Description</label>'
            +'<textarea cols="40" rows="5" class="form-control input-sm required" name="job_desc[]">'+v.job_desc+'</textarea>'
                +'</div>'
                +'<div class="form-group">'
                +'<label for="input-sm">From</label>'
                +'<input type="date" name="start_year[]" class="form-control input-sm required" value="'+v.start_year+'"' +
                ' placeholder="e.g. 2016">'
                +'</div>'
                +'<div class="form-group">'
                +'<label for="input-sm">To</label>'
                +'<input type="date" name="end_year[]" class="form-control input-sm required" value="'+v.end_year+'"' +
                ' placeholder="e.g. 2019">'
                +'</div>'
                +'<hr />'
            );
        });
    });
}

function getEductionInfo(user_id){

    $.get(getUrl('cad/cvb/education/'+user_id), function(data){
       if(data.status!=='success'){
           console.log("New Registrant");
           return;
       }

       var response=data.message;
       if(response.length<=0){
           return;
       }

       $(".education_wrap").html("");
       $.each(response,function(i,v){
            $(".education_wrap").append('<div class="form-group">'
            +'<label for="input-sm">Institution</label>'
                +'<input type="text" class="form-control input-sm required" name="institution[]"'
           +'placeholder="Enter School Name" value="'+v.school_name+'">'
               +'</div>'
               +'<div class="form-group">'
               +'<label for="input-sm">Qualification</label>'
               +'<input type="text" name="qualification[]" class="form-control input-s required"'
           +'placeholder="e.g. Bsc Computer Science" value="'+v.certificate+'">'
               +'</div>'
               +'<div class="form-group">'
               +'<label for="input-sm">Graduation Date</label>'
           +'<input type="date" name="graduation_date[]" class="form-control input-sm required"'
           +'placeholder="e.g. 2016-05-20" value="'+v.grad_date+'">'
               +'</div><hr />');
       });
    });
}


function getBasicInfo(user_id){
    $.get(getUrl('cad/cvb/basic/'+user_id),function(data){
        console.log(data);
        if(data.status!=='success'){
            console.log("New Member");
            return;
        }

        var user=data.message;
        $("#basicFirstName").val(user.firstname);
        $("#basicmiddlename").val(user.middlename);
        $("#basicLastName").val(user.surname);
        $("#dateofbirth").val(user.dob);
        $("#basicPhone").val(user.phone);
        $("#basicEmail").val(user.email);
        $("#basicGender").val(user.gender).change();
        $("#basicMaritalStatus").val(user.marital_status).change();
        $("#basicSummary").val(user.summary);

    });
}
// {
//     first_name:$("#basicFirstName").val(),
//         middle_name:$("#basicmiddlename").val(),
//     last_name:$("#basicLastName").val(),
//     dob:$("#dateofbirth").val(),
//
// }