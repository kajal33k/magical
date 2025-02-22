<!-- Navbar Start -->
<nav class="bg-black lg:px-4 p-1 shadow-md">
  <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center mt-4 lg:mt-0">
          <img src="{{ asset('asset/img/New-Project-8.png') }}" alt="Magical Logo" class="h-10 lg:h-12 w-auto">
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-8">
          <a href="#home" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">Home</a>
          <a href="#about" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">About</a>
          <a href="#product" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">Our Product</a>
          <a href="#contact" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">Contact Us</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
          <button id="mobile-menu-button" class="text-yellow-300 hover:text-green-400 transition duration-300" aria-expanded="false">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
              </svg>
          </button>
      </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden mt-4">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <a href="#home" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Home</a>
          <a href="#about" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">About</a>
          <a href="#product" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Our Product</a>
          <a href="#contact" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Contact Us</a>
      </div>
  </div>
</nav>

<!-- Popup Modal -->
<<<<<<< HEAD
<div id="mymodal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
  <div class="bg-white p-6 rounded-lg text-center">
      <h2 class="text-2xl font-bold mb-4">Please fill in the details</h2>
      <input type="text" id="name" name="name" placeholder="Name" class="px-4 py-2 border rounded mb-4 w-full" />
      <input type="text" id="mobile_no" name="mobile_no" placeholder="Mobile No" class="px-4 py-2 border rounded mb-4 w-full" />
      <div class="flex justify-center space-x-4">
          <button id="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Submit</button>
          <button id="close-modal" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Close</button>
      </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Mobile Menu Script -->
<script>
  $(document).ready(function () {
      $('#mobile-menu-button').click(function () {
          $('#mobile-menu').toggleClass('hidden');
          let expanded = $(this).attr('aria-expanded') === 'true' || false;
          $(this).attr('aria-expanded', !expanded);
      });
  });
</script>

<!-- Popup Modal Script -->
<script>
  $(document).ready(function() {
      // Show modal after user scrolls 10% of the page
      $(window).scroll(function() {
          var scrollPosition = $(window).scrollTop();
          var documentHeight = $(document).height();
          var windowHeight = $(window).height();

          if (scrollPosition >= documentHeight * 0.1) {
              if (!sessionStorage.getItem('mymodal_shown')) {
                  $('#mymodal').removeClass('hidden');
                  sessionStorage.setItem('mymodal_shown', 'true'); // Store in sessionStorage
              }
          }
      });

      // Close modal
      $('#close-modal').click(function() {
          $('#mymodal').addClass('hidden');
      });

      // Form submission
      $('#submit').click(function() {
          var name = $('#name').val().trim();
          var mobile_no = $('#mobile_no').val().trim();

          if (!/^\d{10}$/.test(mobile_no)) {
              alert("Mobile number must be exactly 10 digits.");
              return;
          }

          if (!/^[A-Za-z\s]+$/.test(name)) {
              alert("Name should contain only letters and spaces.");
              return;
          }

          $.ajax({
              url: '/store-lead',
              type: 'POST',
              data: {
                  name: name,
                  mobile_no: mobile_no,
                  _token: '{{ csrf_token() }}'
              },
              success: function(response) {
                  alert(response.message);
                  $('#mymodal').addClass('hidden'); // Close modal on success
              },
              error: function(xhr) {
                  let errorMessage = xhr.responseJSON?.message || "An error occurred. Please try again.";
                  alert('Error: ' + errorMessage);
              }
          });
      });
  });
=======

<!-- Popup Modal -->
<div id="mymodal"
    class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
    <div class="bg-white p-6 rounded-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Please fill in the details</h2>
        <input type="text" id="name" placeholder="Name" class="px-4 py-2 border rounded mb-4 w-full" />
        <input type="text" id="mobile_no" placeholder="Mobile No" class="px-4 py-2 border rounded mb-4 w-full" />
        <div class="flex justify-center space-x-4">
            <button id="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Submit</button>
            <button id="close-modal" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Close</button>
        </div>
    </div>

    <scrip src="https://code.jquery.com/jquery-3.6.0.min.js">
        </script>

        <script>
            $(document).ready(function() {
                $('#submit').click(function() {
                    var name = $('#name').val().trim();
                    var mobile_no = $('#mobile_no').val().trim();

                    if (!/^\d{10}$/.test(mobile_no)) {
                        alert("Mobile number must be exactly 10 digits.");
                        return;
                    }

                    if (!/^[A-Za-z\s]+$/.test(name)) {
                        alert("Name should contain only letters and spaces.");
                        return;
                    }

                    $.ajax({
                        url: '/store-lead',
                        type: 'POST',
                        data: {
                            name: name,
                            mobile_no: mobile_no,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(response.message);
                        },
                        error: function(response) {
                            alert('Error: ' + response.responseJSON.message);
                        }
                    });
                });
            });
        </script>

</div>

<script>
    $(document).ready(function() {
        // Function to show modal after scroll
        $(window).scroll(function() {
            var scrollPosition = $(window).scrollTop(); // current scroll position
            var documentHeight = $(document).height(); // total height of the page
            var windowHeight = $(window).height(); // visible height of the browser window

            // Show modal when user scrolls 10% of the page
            if (scrollPosition >= documentHeight * 0.1) {
                // Check if modal has already been shown
                if (localStorage.getItem('mymodal') !== 'true') {
                    $('#mymodal').removeClass('hidden');
                    localStorage.setItem('mymodal', 'true'); // Mark the modal as shown
                }
            }
        });

        // Close modal when the close button is clicked
        $('#close-modal').click(function() {
            $('#mymodal').addClass('hidden');
        });
    });
>>>>>>> 2131911b75f61651809012578a65bf3399acb9d2
</script>
