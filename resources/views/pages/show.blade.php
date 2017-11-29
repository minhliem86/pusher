<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <title>Document</title>
    <script>

        Pusher.logToConsole = true;
        Pusher.logToConsole = true;
        var key = 'c42f9ea98d92ebe0c23b';
        var cluster = 'ap1';
        var pusher = new Pusher(key,{
            cluster : cluster,
            encrypted: true
        });

        var channel = pusher.subscribe('AdminDashboard');
        channel.bind('skill', function(data){
            alert(data.mes);
        });
    </script>
</head>
<body>
    <h4>Show Data Pusher</h4>
    <div id="content">

    </div>
</body>
</html>