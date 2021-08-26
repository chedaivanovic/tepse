<?php $title = 'S&J | Tepih Servis & Dubinsko Pranje | Greška 404'; ?>
<?php include('components/header.php') ?>
<?php include('components/body-before.php') ?>

<script>
    $(document).ready(function(e) {
        $("#contactForm").on('submit', (function(e) {
            e.preventDefault();
            $("#mail-status").hide();
            $('#send-message').hide();
            $('#loader-icon').show();
            $.ajax({
                url: "contact.php",
                type: "POST",
                dataType: 'json',
                data: {
                    "name": $('input[name="name"]').val(),
                    "email": $('input[name="email"]').val(),
                    "phone": $('input[name="phone"]').val(),
                    "message": $('textarea[name="message"]').val(),
                    "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                },
                success: function(response) {
                    $("#mail-status").show();
                    $('#loader-icon').hide();
                    if (response.type == "error") {
                        $('#send-message').show();
                        $("#mail-status").attr("class", "error");
                    } else if (response.type == "message") {
                        $('#send-message').hide();
                        $("#mail-status").attr("class", "success");
                    }
                    $("#mail-status").html(response.text);
                },
                error: function() {}
            });
        }));
    });
</script>
<!-- Page Content -->
<section class="page-404">
    <div class="wrapper">
        <div class="page-404-content d-flex justify-content-center align-items-center flex-wrap">
            <div class="page-404-content-inner d-flex justify-content-center flex-wrap text-white">
                <h2 class="text-center w-100 display-4 mb-4">Greška 404</h2>
                <h2 class="text-center w-100 mb-5 font-weight-light">Stranica koju tražite ne postoji, molimo Vas da se vratite na početnu stranu.</h2>
                <a href="index.php" class="btn btn-primary">Početna strana</a>
            </div>
        </div>
    </div>
</section>

<?php include('components/body-after.php') ?>
<?php include('components/footer.php') ?>