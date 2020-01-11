<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Test</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>NodeMcu Demo
                    <span class="pull-right">
                        <div id="light"></div>
                    </span>
                </h1>
                <button type="button" id="toggle" data-state="1" class="btn-danger">Toggle</button>
            </div>

            <div class="col">
                <table class="table table-bordered table-sm table-striped">
                    <thead>
                        <tr>
                            <th>
                                State
                            </th>
                            <th>
                                Where
                            </th>
                            <th>
                                when
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){

            function current_state(){
                btn = $('toggle');
                light = $('light');

            }

            $('#toggle').click(function(){
                var current = $(this).data('state');
                $.ajax({
                    url: 'toggle.php?state='+current
                });
            });
        });

    </script>

  </body>
</html>
