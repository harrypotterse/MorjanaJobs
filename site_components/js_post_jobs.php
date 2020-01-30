 <script>
            $(function () {
                var data = [
                    'css',
                    'html',
                    'php',
                    'jquery'
                ];
                $(".tags_input").tagComplete({
                    keylimit: 1,
                    hide: false,
                    autocomplete: {
                        data: data
                    }
                });
            });
        </script>