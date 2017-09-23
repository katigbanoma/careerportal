<?php include('header.php'); ?>

<div id="example-basic">
    <h3>Basic</h3>
    <section>
        <div class="row">
            <div class="form-group">
                <label for="basicFirstName">FIRST NAME</label>
                <input type="text" class="form-control" id="basicFirstName" placeholder="" name="first_name">
            </div>
            <div class="form-group">
                <label for="basicLastName">LAST NAME</label>
                <input type="text" class="form-control" id="basicLastName" placeholder="" name="last_name">
            </div>
            <div class="form-group">
                <label for="middle_name">MIDDLE NAME</label>
                <input type="text" class="form-control" id="basicmiddlename" placeholder="" name="middle_name">
            </div>
            <div class="form-group">
                <label for="date_of_birth">DATE OF BIRTH</label>
                <input type="date" class="form-control" id="dateofbirth" placeholder="" name="date_of_birth">
            </div>
            <div class="form-group">
                <label for="basicEmail">E-MAIL</label>
                <input type="email" class="form-control" id="basicEmail" placeholder="" name="email">
            </div>
        </div>
    </section>
    <h3>Education</h3>
    <section>
        <p>Wonderful transition effects.</p>
    </section>
    <h3>Experience</h3>
    <section>
        <p>The next and previous buttons help you to navigate through your content.</p>
    </section>
    <h3>Skills & Interest</h3>
    <section>
        <div class="form-group">
            <label for="input-sm">Skill</label>
            <input type="text" placeholder="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
        </div>
        <div class="form-group">
            <label for="input-sm">Interest</label>
            <input type="text" placeholder="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
        </div>

    </section>
    <h3>Referee</h3>
    <section>
        <p>The next and previous buttons help you to navigate through your content.</p>
    </section>
    <h3>Hobbies</h3>
    <section>
        <p>The next and previous buttons help you to navigate through your content.</p>
    </section>
</div>

<?php include('footer.php'); ?>
<script type="text/javascript" src="../js/jquery.validate.min.js" ></script>
<script type="text/javascript" src="../js/steps.js"></script>
<script type="text/javascript" src="../js/additional-methods.min.js"></script>