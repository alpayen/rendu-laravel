<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
      integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>


<div class="container">

    <div class="row">

        @yield("content")

        <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nom</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Mail</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre mail" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Sujet</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet du message" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>

                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message" placeholder="Votre message"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="human" name="human" placeholder="Votre réponse">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Envoyer le message" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <! Will be used to display an alert to the user>
                </div>
            </div>
        </form>
    </div>
</div>