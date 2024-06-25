<!DOCTYPE html>
<html   lang="en" >

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="./assets/css/theme.css" />
	<title>Modernize TailwindCSS HTML Admin Template</title>
</head>

<body class=" bg-white">
	<main>
		<!--start the project-->
		<div id="main-wrapper" class=" flex">
            <!--sidbar ici-->
            @include('layouts/components.sidbar')
			<div class=" w-full page-wrapper overflow-hidden">

				<!--header ici-->
                @include('layouts/components.header')
				<!-- Main Content -->
				<main class="h-full overflow-y-auto  max-w-full  pt-4">

                    @yield("content")

				</main>
				<!-- Main Content End -->

			</div>
		</div>
		<!--end of project-->
	</main>



<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="./assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="./assets/libs/@preline/dropdown/index.js"></script>
<script src="./assets/libs/@preline/overlay/index.js"></script>
<script src="./assets/js/sidebarmenu.js"></script>



	<script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/js/dashboard.js"></script>
</body>

</html>
