<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Registration Form
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsible Innovation in Investing Services">
    <meta name="Language" content="English">
    <meta name="distribution" content="Global">
    <meta name="coverage" content="Worldwide">
    <meta name="Classification" content="Business">
    <meta name="url" content="https://websitename.com">
    <link rel="shortcut icon" href="assets/images/WebsiteName-favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="c-body">
    <div class="c-form-container">
        <h3 class="c-form-heading">Sign up</h3>
        <p class="c-form-description">Join millions of users from around the globe.</p>
        <form id="c-form" method="post" action="users.php">
            <div class="c-form-input-main-container">
                <div class="c-form-input-container">
                    <label for="firstname">First Name <span class="c-required-input">*</span></label>
                    <input type="text" name="firstname" id="firstname" class="c-form-data">
                    <small id="c-error-message-firstname"></small>
                </div>
                <div class="c-form-input-container">
                    <label for="lastname">Last Name <span class="c-required-input">*</span></label>
                    <input type="text" name="lastname" id="lastname" class="c-form-data">
                    <small id="c-error-message-lastname"></small>
                </div>
                <div class="c-form-input-container">
                    <label for="email">Email <span class="c-required-input">*</span></label>
                    <input type="text" name="email" id="email" class="c-form-data">
                    <small id="c-error-message-email"></small>
                </div>
                <div class="c-form-input-container">
                    <label for="country">Country <span class="c-required-input">*</span></label>
                    <select id="country" name="country" class="c-form-data">
                        <option value=""></option>
                        <option value="uk">United Kingdom</option>
                        <option value="us">United States</option>
                        <option value="au">Australia</option>
                    </select>
                    <small id="c-error-message-country"></small>
                </div>
                <div class="c-form-input-container">
                    <label for="phone">Phone <span class="c-required-input">*</span></label>
                    <input type="tel" name="phone" id="phone" class="c-form-data">
                    <small id="c-error-message-phone"></small>
                </div>
                <div class="c-form-input-container">
                    <label for="password">Password <span class="c-required-input">*</span></label>
                    <input type="password" name="password" id="password" class="c-form-data">
                    <small id="c-error-message-password"></small>
                </div>
                <div class="c-form-input-container">
                    <label for="cpassword">Confirm Password <span class="c-required-input">*</span></label>
                    <input type="password" name="cpassword" id="cpassword" class="c-form-data">
                    <small id="c-error-message-cpassword"></small>
                </div>
                <div class="c-form-input-container c-form-radio-container">
                    <label for="male" class="c-radio">
                        <input type="radio" name="gender" value="male" class="c-radio-input" id="male">
                        <div class="c-radio-button"></div>
                        Male
                    </label>
                    <label for="female" class="c-radio">
                        <input type="radio" name="gender" value="female" class="c-radio-input" id="female">
                        <div class="c-radio-button"></div>
                        Female
                    </label>
                    <small id="c-error-message-gender"></small>
                </div>
                <div class="c-form-input-container">
                    <label for="message">Your Message</label>
                    <textarea name="message" id="message" rows="2"></textarea>
                    <small id="c-error-message-message"></small>
                </div>
                <div class="c-form-input-container c-form-input-container-terms">
                    <label for="terms" class="c-checkbox">
                        <input type="checkbox" name="terms" class="c-checkbox-input" value="termsAccepted" id="terms">
                        <div class="c-checkbox-button"></div>
                        <span class="c-terms-link">Agree To Our<a href="#" target="_blank"> Terms & Conditions</a></span>
                    </label>
                    <small id="c-error-message-terms"></small>
                </div>
                <div class="c-form-input-container c-form-submit-container">
                    <input type="submit" name="submit" id="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/custom.js"></script>
</body>

</html>