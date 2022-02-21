
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var firstName = $("#first-name").val();
            var lastName = $("#last-name").val();
            var userEmail = $("#user-email").val();
            var message = $("#message").val();

            if (firstName == "") {
                $("#first-name").html("Required.");
                $("#first-name").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (lastName == "") {
                $("#last-name").html("Required.");
                $("#last-name").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#user-email").html("Required.");
                $("#user-email").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#user-email").html("Invalid Email Address.");
                $("#user-email").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (message == "") {
                $("#userMessage-info").html("Required.");
                $("#message").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }