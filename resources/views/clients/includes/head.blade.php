<meta charset="UTF-8">
<title>{{ $config['seo']['title'] ?? '' }}</title>
<meta name="keywords" content="HTML5 News Magazine Template">
<meta name="description" content="The Next Mag - Ultimate News and Magazine Template">
<meta name="author" content="minimaldog.net">
<link rel="icon" href="img/favicon.png" sizes="32x32">
<link rel="icon" href="img/favicon.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="img/favicon.png">
<meta name="msapplication-TileImage" content="img/favicon.png"><!-- Mobile Metas -->
<meta name="viewport" content="width=device-width,initial-scale=1"><!-- Vendor CSS -->
<link href="{{ asset('assets/clients/css/vendors.css') }}" rel="stylesheet"><!-- Theme CSS -->
<link href="{{ asset('assets/clients/css/style.css') }}" rel="stylesheet"><!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/clients/css/custom.css') }}"><!-- Web Fonts  -->
<script>
	WebFontConfig = {
			google: {
				families: ['Poppins:300,400,700,900', 'Oswald:300,400,700']
			},
			active: function () {
				$(window).trigger('webfontLoaded');
			}
		};

		(function (d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
</script>