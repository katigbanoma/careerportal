    <?php
        session_start();
        $_SESSION['user']=49;
    ?>
    <!-- <link href=<?php echo get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css'?> />
    <link href=<?php echo get_stylesheet_directory_uri().'/assets/bower_components/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.min.css'?> />
    <link href=<?php echo get_stylesheet_directory_uri().'/assets/css/2-col-portfolio.css'?>>
    <link href=<?php echo get_stylesheet_directory_uri().'/assets/css/jquery.steps.css'?>/>
    <link href=<?php echo get_stylesheet_directory_uri().'/assets/css/main.css'?>/>
    <link href=<?php echo get_stylesheet_directory_uri().'/assets/css/normalize.css'?> /> -->

    <div id="example-vertical">
        <h3>Basic</h3>
        <section>
            <div>
                <form id="basicInfoForm" method="post">
                    <input type="hidden" name="user_id" class="user_id" value="<?php echo $_SESSION['user'];  ?>" />
                    <div class="row">
                        <label class="col-md-3" for="basicFirstName">Firstname</label>
                        <input type="text" class="form-control required" id="basicFirstName" placeholder=""
                            name="first_name" style="width:70%">
                    </div>
                    <div class="row">
                        <label class="col-md-3" for="basicLastName">Lastname</label>
                        <input type="text" class="form-control required" id="basicLastName" placeholder="" name="last_name"
                            style="width:70%"/>
                    </div>
                    <div class="row">
                        <label class="col-md-3" for="middle_name">Middlename</label>
                        <input type="text" class="form-control" id="basicmiddlename" placeholder=""
                            name="middle_name" style="width:70%"/>
                    </div>
                    <div class="row">
                        <label class="col-md-3" for="date_of_birth">Date Of Birth</label>
                        <input type="date" class="form-control required" id="dateofbirth" placeholder=""
                            name="date_of_birth" style="width:70%"/>
                    </div>
                    <div class="row">
                        <label class="col-md-3" for="basicEmail">EMail</label>
                        <input type="email" class="form-control required" id="basicEmail" placeholder="" name="email"
                            style="width:70%"/>
                    </div>

                    <div class="row">
                        <label class="col-md-3" for="basicPhone">Phone</label>
                        <input type="tel" class="form-control required" id="basicPhone" placeholder="234-xxxxx" name="phone"
                            style="width:70%"/>
                    </div>


                    <div class="row">
                        <label class="col-md-3" for="basicGender">Gender</label>
                        <select id="basicGender" name="gender" class="form-control required" style="width:70%">
                            <option value="">Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>

                    <div class="row">
                        <label class="col-md-3" for="basicMaritalStatus">Marital Status</label>

                        <select id="basicMaritalStatus" name="marital_status" class="form-control required"
                                style="width:70%">
                            <option value="">Select Marital Status</option>
                            <option value="1">Married</option>
                            <option value="2">Single</option>
                        </select>
                    </div>

                    <div class="row">
                        <label class="col-md-3" for="basicSummary">Summary</label>
                        <textarea class="form-control required" rows="5" cols="40" style="width:70%" name="summary"
                                id="basicSummary">

                        </textarea>
                    </div>
                </form>
            </div>
        </section>

        <h3>Education</h3>
        <section style="height: 500px; overflow: auto;">

            <form id="addEducationRecord" method="post">
                <input type="hidden" name="user_id" class="user_id" value="<?php echo $_SESSION['user'];  ?>" />
                <div class="input_fields_wrap education_wrap">

                    <div class="form-group">
                        <label for="input-sm">Institution</label>
                        <input type="text" class="form-control input-sm required" name="institution[]"
                            placeholder="Enter School Name">
                    </div>
                    <div class="form-group">
                        <label for="input-sm">Qualification</label>
                        <input type="text" name="qualification[]" class="form-control input-s required"
                            placeholder="e.g. Bsc Computer Science">
                    </div>
                    <div class="form-group">
                        <label for="input-sm">Graduation Date</label>
                        <input type="date" name="graduation_date[]" class="form-control input-sm required"
                            placeholder="e.g. 2016-05-20">
                    </div>

                    <hr />

                </div>
            </form>


            <button type="button" class="add_school_button btn btn-default btn-xs"><strong> + Add School</strong></button>
        </section>

        <h3>Experience</h3>
        <section style="height: 500px; overflow: auto;">
            <form method="post" id="addExperienceForm">

                <input type="hidden" name="user_id" class="user_id" value="<?php echo $_SESSION['user'];  ?>" />

                <div class="input_fields_wrap experience_wrap">

                    <div class="form-group">
                        <label for="input-sm">Organization</label>
                        <input type="text" class="form-control input-sm required" name="organization[]"
                            placeholder="Enter Company Name">
                    </div>

                    <div class="form-group">
                        <label for="input-sm">Post Held</label>
                        <input type="text" name="post_held[]" class="form-control input-sm required"
                            placeholder="e.g. Project Manager">
                    </div>

                    <div class="form-group">
                        <label for="reg_job_desc">Job Description</label>
                        <textarea cols="40" rows="5" class="form-control input-sm required" name="job_desc[]"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="input-sm">From</label>
                        <input type="date" name="start_year[]" class="form-control input-sm required" placeholder="e.g. 2016">
                    </div>

                    <div class="form-group">
                        <label for="input-sm">To</label>
                        <input type="date" name="end_year[]" class="form-control input-sm required" placeholder="e.g. 2019">
                    </div>

                    <hr />
                </div>

                <button type="button" class="add_experience_button btn btn-default btn-xs"><strong> + Add Job</strong>
                </button>
            </form>
        </section>


        <h3>Skills & Interest</h3>
        <section>

            <form id="interestAndSkillForm" method="post">
                <input type="hidden" name="user_id" class="user_id" value="<?php echo $_SESSION['user'];  ?>" />
                <div class="row">
                    <label class="col-md-3" for="input-sm">Skill</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control required" placeholder="Your Skills" style="width:70%" name="skills"
                            id="skills"/>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-3" for="input-sm">Interest</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control required" placeholder="Your Interests" style="width: 70%;"
                                name="interests" id="interests"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3" for="input-sm">Hobbies</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control required" placeholder="Your Hobbies" style="width: 70%;"
                            name="hobbies" id="hobbies"/>
                    </div>
                </div>

            </form>

        </section>


        <h3>Referee</h3>
        <section style="height:100%; overflow: auto;">
            <form method="post" id="addRefreeForm">
                <input type="hidden" name="user_id" class="user_id" value="<?php echo $_SESSION['user'];  ?>" />

                <h1>REFERRAL</h1>
                <div class="input_fields_wrap refree_wrap">

                    <div class="form-group">
                        <label for="ref_first_name">First Name</label>
                        <input type="text" name="ref_first_name[]" class="form-control required">
                    </div>

                    <div class="form-group">
                        <label for="ref_last_name">Last Name</label>
                        <input type="text" name="ref_last_name[]" class="form-control required">
                    </div>

                    <div class="form-group">
                        <label for="ref_email">E-Mail</label>
                        <input type="email" name="ref_email[]" class="form-control required">
                    </div>

                    <div class="form-group">
                        <label for="basicPhoneNumber">Phone Number</label>
                        <input type="text" class="input-medium bfh-phone form-control required" data-format="+234 (000) 000-0000"
                            name="ref_phone_number[]" id="ebasicPhoneNumber" placeholder="000-0000-0000">
                    </div>

                    <div class="form-group">
                        <label for="ref_organization">Organazition</label>
                        <input type="text" name="ref_organization[]" class="form-control required">
                    </div>

                    <div class="form-group">
                        <label for="ref_job_description">Job Description</label>
                        <input type="text" name="ref_job_description[]" class="form-control required">
                    </div>

                    <hr />
                </div>


                <button type="button" class="add_ref_btn btn btn-default btn-xs"><strong> + Add Reference</strong>
                </button>

            </form>
        </section>

    </div>

    <div id="addMoreEducation" style="display: none;">
        <div class="row">
            <label class="col-md-3" for="input-sm">Institution</label>
            <input type="text" class="form-control input-sm required" name="institution[]" placeholder="Enter School Name"/>
        </div>

        <div class="row">
            <label class="col-md-3" for="input-sm">Qualification</label>
            <input type="text" name="qualification[] required" class="form-control input-sm" placeholder="e.g. Bsc Computer Science">
        </div>

        <div class="row">
            <label class="col-md-3" for="input-sm">Graduation Date</label>
            <input type="date" name="graduation_date[]" style="" class="form-control input-sm required" placeholder="e.g. 2016-12-30"/>
        </div>

        <hr />
    </div>


    <div id="addMoreExperience" style="display: none;">
        <div class="form-group">
            <label fdor="input-sm">Organization</label>
            <input type="text" class="form-control input-sm required" name="organization[]" placeholder="Enter Company Name"/>
        </div>

        <div class="form-group">
            <label for="input-sm">Post Held</label>
            <input type="text" name="post_held[]" class="form-control input-sm required" placeholder="e.g. Project Manager"/>
        </div>

        <div class="form-group">
            <label for="reg_job_desc">Job Description</label>
            <textarea cols="40" rows="5" class="form-control input-sm required" name="job_desc[]"></textarea>
        </div>

        <div class="form-group"><label for="input-sm">From</label>xx
            <input type="date" name="start_year[]" class="form-control input-sm required" placeholder="e.g. 20-01-2016"/>
            <div class="form-group">
                <label for="input-sm">To</label>
                <input type="date" name="end_year[]" class="form-control input-sm required" placeholder="e.g. 20-01-2019"/>
            </div>
        </div>
        <br />
        <!--</div><a href="#" class="remove_field">Remove</a></div>-->
    </div>


    <div id="addMoreRefreeDiv" style="display: none;">
        <div class="form-group">
            <label for="input-sm">First Name</label>
            <input type="text" name="ref_first_name[]" class="form-control" />
        </div>

        <div class="form-group">
            <label for="ref_last_name">Last Name</label>
            <input type="text" name="ref_last_name[]" class="form-control" />
        </div>

        <div class="form-group">
            <label for="ref_email">E-Mail</label>
            <input type="email" name="ref_email[]" class="form-control" />
        </div>

        <div class="form-group">
            <label for="basicPhoneNumber">Phone Number</label>
            <input type="text" class="input-medium bfh-phone form-control"
                data-format="+234 (000) 000-0000" name="ref_phone_number[]" id="ebasicPhoneNumber" placeholder="000-0000-0000" />
        </div>

        <div class="form-group">
            <label for="ref_organization">Organazition</label>
            <input type="text" name="ref_organization[]" class="form-control" />
        </div>

        <div class="form-group">
            <label for="ref_job_description">Job Description</label>
            <input type="text" name="ref_job_description[]" class="form-control" />
        </div>

        <hr />
    </div>

    <!-- <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/jquery-3.1.1.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/jquery.steps.min.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/jquery.validate.min.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/bower_components/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/utility.js'?> ></script>

    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/add_field_skl.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/steps.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/add_field_edu.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/add_field_exp.js'?> ></script>
    <script src=<?php echo get_stylesheet_directory_uri().'/assets/js/add_field_ref.js'?> ></script> -->