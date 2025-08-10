<?php
    include_once __DIR__ . '/../functions/InputFunc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="max-w-2xl mx-auto py-16 px-4">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-gray-900 mb-4">Contact Us</h1>

            <!-- Display submitted data -->
            <div class="bg-white p-6 rounded-lg border mb-8 text-left">
              <p>
                <?php print_R( $_REQUEST )?>
              </p>
                <p class="text-2xl font-bold text-gray-700 mb-2">
                    <?php
                        if ( isset( $_POST['name'] ) && ! empty( $_POST['name'] ) ) {
                            echo htmlspecialchars( $_POST['name'] );
                        }
                    ?>
                </p>
                <p class="text-lg text-gray-600 mb-2">
                    <?php
                        if ( isset( $_POST["email"] ) && ! empty( $_POST["email"] ) ) {
                            echo filter_input( INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS );
                        }
                    ?>
                </p>
                <p class="text-gray-700">
                    <?php
                        // if ( isset( $_POST["message"] ) && ! empty( $_POST["message"] ) ) {
                        //     echo htmlspecialchars( $_POST["message"] );
                        // }
                        echo inputFunc( INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS );
                    ?>
                </p>
            </div>
        </div>

        <form action="" method="POST" class="bg-white p-8 rounded-lg border">
            <!-- Name and Email -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="name" class="block text-sm font-medium
                    text-gray-700 mb-1">Name</label>
                    <input type="text" id="name" name="name"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md
                           focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700
                    mb-1">Email</label>
                    <input type="email" id="email" name="email"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md
                           focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <!-- Message -->
            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-700
                mb-1">Message</label>
                <textarea id="message" name="message" rows="4"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                          </textarea>
            </div>


<!-- gender starts here -->
<div class="mb-6">
 <label for="sex" class="block mb-2 text-sm font-medium text-gray-900">Select your sex</label>
  <select id="sex" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Prefer not to say">Prefer not to say</option>
  </select>
</div>
<!-- gender ends here -->

            <!-- Country Selection -->
            <div class="mb-6">

                <fieldset>
                    <legend class="text-sm font-medium text-gray-700 mb-3">Country</legend>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="radio" name="countries[]" value="USA" class="mr-2"
                            <?php isChecked( "countries", "USA" )?>>
                            <span class="text-sm text-gray-700">United States</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="countries[]" value="Germany" class="mr-2"
                            <?php isChecked( "countries", "Germany" )?>>
                            <span class="text-sm text-gray-700">Germany</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="countries[]" value="Spain" class="mr-2"
                            <?php isChecked( "countries", "Spain" )?>>
                            <span class="text-sm text-gray-700">Spain</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="countries[]"
                             value="United Kingdom" class="mr-2"
                             <?php isChecked( "countries", "United Kingdom" )?>>
                            <span class="text-sm text-gray-700">United Kingdom</span>
                        </label>
                    </div>
                </fieldset>
            </div>

            <!-- File Upload -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">Upload File</label>
                <input type="file" class="w-full px-3 py-2 border border-gray-300 rounded-md file:mr-4 file:py-1 file:px-3 file:border-0 file:bg-gray-100 file:text-gray-700 file:rounded">
            </div>

            <!-- Checkboxes -->
            <div class="mb-6">
                <fieldset>
                    <legend class="text-sm font-medium text-gray-700 mb-3">Options</legend>
                    <div class="space-y-3">
                        <label class="flex items-start">
                            <input type="checkbox" class="mr-2 mt-0.5" name="terms[]"
                             value="agree"<?php isChecked( "terms", "agree" )?>>
                            <span class="text-sm text-gray-700">I agree to the
                            <a href="#" class="text-blue-600 hover:underline">
                            terms and conditions</a></span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" name="terms[]"
                             value="offers"
                             <?php isChecked( "terms", "offers" )?>>
                            <span class="text-sm text-gray-700">
                            I want to get promotional offers</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" name="terms[]"
                             value="adult"
                             <?php isChecked( "terms", "adult" )?>>
                            <span class="text-sm text-gray-700">
                              I am 18 years or older</span>
                        </label>
                        <label class="flex items-start">
                            <input type="checkbox" class="mr-2 mt-0.5" name="terms[]"
                             value="free-Shipping"
                             <?php isChecked( "terms", "free-Shipping" )?>>
                            <div>
                                <span class="text-sm font-medium text-gray-700">
                                Free shipping</span>
                                <p class="text-xs text-gray-500">For orders shipped
                                from $25 in books or $29 in other categories</p>
                            </div>
                        </label>

                    </div>
                </fieldset>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-8 py-2 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>