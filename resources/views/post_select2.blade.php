<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <title>Select 2 Ajax</title>
</head>
<body>
    <style>
        #search_input_container{ margin: 5% auto;width: 50%;text-align: center; }
        #search_input{ width: 100%; }
        #search_input + span.select2.select2-container.select2-container{ text-align: left; }
    </style>

    <div id="search_input_container">
        <select class="form-control select2 w-100" id="search_input">
            <option>Search Post</option>
          </select>
    </div>

    <script>
    window.search_input = "{{ route('post.search.autocomplete') }}";
    $('#search_input').select2({
        ajax: {
            // url: function (params) { //Dinamic URL
            //     var _search = params.term ? params.term : '';
            //    return window.search_input +'/'+ _search;
            // },
            url: window.search_input,
            dataType: 'json',
            type: 'GET',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.identifyer
                        }
                    })
                };
            }
        }
    });
    </script>
</body>
</html>