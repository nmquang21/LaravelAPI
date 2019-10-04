<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <div class="row">
        <div id="formWrapper" >
            <form class="form-vertical" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="image_name" class="form-control" id="name" value="">
                </div>
                <div class="form-group">
                    <button id="upload" type="button" class="btn btn-success">Upload </button>
                </div>
            </form>
        </div>
    </div>
    <div>
        <div id="status" style="display: none" class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <img id="img_uploaded" width="20%" src="">
    </div>

</div>
</body>
<script type="text/javascript" src="js/jquery.3.2.1.min.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('#upload').click(function(event){
            event.preventDefault();
            jQuery('#status').css('display','block');
            var img = document.querySelector('[name="image_name"]').files[0];
            var fd = new FormData();
            fd.append('upload_preset', 'bkww5lcp');
            // fd.append('tags', 'browser_upload');
            fd.append('file', img);
            jQuery.ajax({
            	method:'Post',
            	url:'https://api.cloudinary.com/v1_1/nm-q/image/upload',
                processData: false,
                contentType: false,
            	data:fd,
            }).done(function(data){
                jQuery('#img_uploaded').attr('src',data.url);
                jQuery('#status').css('display','none');
            	console.log(data);
            })
            // let file = jQuery("input[name='image_name']")[0].files[0];
            // var url='https://api.cloudinary.com/v1_1/nm-q/image/upload';
            // var xhr = new XMLHttpRequest();
            // xhr.onreadystatechange = function () {
            //     if (this.readyState == 4 && this.status == 200) {
            //         var responseDataJson = JSON.parse(this.responseText);
            //         console.log(responseDataJson);
            //         jQuery('#img_uploaded').attr('src',responseDataJson.url);
            //     }
            // }
            // xhr.open('POST', url, true);
            // var fd = new FormData();
            // fd.append('upload_preset', 'bkww5lcp');
            // fd.append('tags', 'browser_upload');
            // fd.append('file', file);
            // xhr.send(fd);

        })
    })
</script>

</html>
