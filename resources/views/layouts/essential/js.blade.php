<!-- all js here -->
        <script src="{{ url('assets/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ url('assets/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ url('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ url('assets/frontend/js/main.js') }}"></script>
        <script src="{{ url('assets/frontend/js/slick.min.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script
			src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
			integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
        <script>
            AOS.init({
                disable: function() {
                    var maxWidth = 300;
                    return window.innerWidth < maxWidth;
                }
            });
        </script>
        <script>
			const button = document.getElementById('download-button');

			function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('des_text');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save();
			}

			button.addEventListener('click', generatePDF);
		</script>


