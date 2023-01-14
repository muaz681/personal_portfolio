<!-- all js here -->
        <script src="{{ url('assets/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ url('assets/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ url('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ url('assets/frontend/js/main.js') }}"></script>
        <script src="{{ url('assets/frontend/js/slick.min.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                disable: function() {
                    var maxWidth = 800;
                    return window.innerWidth < maxWidth;
                }
            });
        </script>


