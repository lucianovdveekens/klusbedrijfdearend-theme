        <div class="copyright py-4 text-center text-white">
            <div class="container">
            <small>&copy; Klusbedrijf De Arend Zaandam 2018</small>
            </div>
        </div>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-to-top d-lg-none position-fixed ">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
            </a>
        </div>
        <!--[htmlclean-protect]-->
        <!-- build:js js/combined.js defer -->
        <!-- bower:js -->
        <!-- endbower -->
        <!-- inject:js -->
        <!-- endinject -->
        <!-- endbuild -->
        <!--[/htmlclean-protect]-->

        <script>
            function initMap() {
            var klusbedrijf = { lat: 52.443127, lng: 4.802956 }
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: klusbedrijf
            });
            var markerLabel = {
                text: 'Klusbedrijf De Arend',
                color: '#000',
                fontSize: '12px',
                fontWeight: 'bold',
            }
            var marker = new google.maps.Marker({
                position: klusbedrijf,
                map: map,
                label: markerLabel,
                icon: {
                url: 'images/eagle-black2.png',
                size: new google.maps.Size(60, 60),
                anchor: new google.maps.Point(30, 30),
                labelOrigin: new google.maps.Point(30, 5),
                },
            });
            }
        </script>
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7NiQsDOS2uJv0577opSLwBjxlhmFDJJc&callback=initMap"></script>
        <?php wp_footer();?>
    </body>
</html>