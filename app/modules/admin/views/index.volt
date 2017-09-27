<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{% block page_title %}Admin | People in Crowd{% endblock %}</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
            {{ content() }}
        </div>
        <!-- app.js -->
        <script src="/js/app.js"></script>
    </body>
</html>
