<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="hung">
        <title>Page Title</title>
        <script src="https://js.pusher.com/4.0/pusher.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.4/vue.min.js"></script>
    </head>
    <body>
        <h3>Welcome</h3>
        <ul id="users">
            <li v-repeat="user: users">@{{ user.name }}</li>
        </ul>

        <script>
            // Enable pusher logging - don't include this in production
            {{--Pusher.logToConsole = true;--}}
            {{--var pusher = new Pusher("{{env("PUSHER_KEY")}}", {--}}
                {{--encrypted: true--}}
            {{--});--}}

            {{--var channel = pusher.subscribe('test');--}}
            {{--channel.bind('my-event', function(data) {--}}
                {{--alert(data);--}}
            {{--});--}}

            new Vue({
                el : '#users',
                data: {
                    users : [{name:'hung'}, {name : 'hoan'}]
                },
                methods: {
                    addUser : function (user) {
                        this.users.push(user);
                    }
                },
                ready : function () {
                    var pusher = new Pusher("{{env("PUSHER_KEY")}}", {
                       encrypted: true
                    });
                    pusher.subscribe('test')
                         .bind('App\\Events\\UserHasRegisterd', this.addUser)
                },
            });

        </script>
    </body>
</html>