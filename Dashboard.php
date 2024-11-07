<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page with Sidebar</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-content">
            <a href="index.php" class="logo">Log out</a>
        </div>
    </nav>

  
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰ Menu</button>

  
    <div id="sidebar" class="sidebar">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="ABC of Tax.pdf">About</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Tax Regime</a></li>
            <li><a href="#">Report</a></li>
        </ul>
    </div>

  
    <div class="content">
        <div class="login-container">
           <SPan>WRITE DOWN WHAT YOU WANT TO PUT</SPan>
        </div>


    </div>

 
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("active");
        }
    </script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Sidebar</title>
    <link rel="stylesheet" href="Dashboard.css">
    <!-- <link rel="stylesheet" href="Dashboard2.css"> -->
</head>
<body>
    <!-- Sticky Navbar -->
    <nav class="navbar">
        <div class="nav-content">
            <a href="index.php" class="logo">Log out</a>
        </div>
    </nav>

    <!-- Sidebar Toggle Button -->
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰ Menu</button>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <ul>
            <li><a href="#" onclick="showSection('home')">Home</a></li>
            <li><a href="homepage.php">Go to Homepage</a></li>
            <li><a href="ABC of Tax.pdf">About</a></li>
            <li><a href="#" onclick="showSection('change-password')">Change Password</a></li>
            <li><a href="tax_regime.php" onclick="showSection('tax-regime')">Tax Regime</a></li>
            <li><a href="report.php" onclick="showSection('report')">Report</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Home Section -->
        <div id="home" class="section">
            <h2>Welcome to the Home Page</h2>


 <ul>
  <li>This is a basic information page for the website, serving as your comprehensive guide to understanding the various features and functionalities available.</li>
  <li>Information displayed on this page includes:</li>
  <ul>
    <li>
      The <strong>Home</strong> features a user-friendly interface that welcomes you and provides easy access to all sections of the website. It's designed to help you navigate efficiently through different functionalities and resources.
    </li>

    <li>
      A <strong>Go to Homepage</strong> button is strategically placed to provide a quick and convenient way for you to navigate back to the homepage at any point during your visit. This ensures that you can easily access other sections of the site without hassle.
    </li>

    <li>
      The <strong>About</strong> page provides crucial information regarding the website's purpose and functionality. It includes a downloadable PDF document that covers all essential aspects of tax filing, equipping you with valuable insights, tips, and guidelines to navigate the tax filing process with confidence and accuracy.
    </li>

    <li>
      A <strong>Change Password</strong> page is available to ensure that you can easily update your password whenever necessary. This feature enhances your security and protects your personal information, allowing you to maintain control over your account access.
    </li>
    <li>
      The <strong>Tax Regime</strong> page is designed for you to enter your financial data accurately. Once submitted, this information will be meticulously processed and reflected on the Report page. This seamless integration ensures that you have a complete overview of your tax situation.
    </li>
    <li>
      On the <strong>Report</strong> page, your submitted data will be organized into well-structured tables. This makes it easy for you to review, analyze, and understand your tax obligations. The tables will provide clear insights, enabling you to make informed decisions regarding your finances.
    </li>
    <li>
      A <strong>Logout</strong> button is conveniently located on the top left of the navigation bar. This feature allows you to securely sign out of your account, ensuring your information remains protected, especially on shared or public devices.
    </li>
  </ul>
  <li>
    “Filing taxes can be complex, but staying informed and organized can make the process much more manageable. Taking proactive steps towards understanding your tax obligations not only simplifies the process but also empowers you to maximize your financial well-being.”
  </li>
</ul>



        </div>

        <!-- Change Password Section -->
        <div id="change-password" class="section" style="display:none;">
            <h2>Change Password</h2>
            <h4 style="color: red;">Current we're unable to provide change password feature!</h4>
            <form>
                <label for="old-password">Old Password:</label>
                <input type="password" id="old-password" name="old-password">
                
                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" name="new-password">
                
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password">
                
                <button type="submit">Submit</button>
            </form>
        </div>

        <!-- Tax Regime Section -->
        <div id="tax-regime" class="section" style="display:none;">
            <h2>Tax Regime Information</h2>
            <p>On our tax filing website, we offer a dedicated section that makes submitting your tax information both easy and efficient. In this section, you’ll find a comprehensive form where you can securely input all the required data related to your tax filings, from personal details to income specifics and deductions. Once you’ve filled out and submitted the form, your data is automatically transferred to the Report Page, where it is neatly presented in a structured table format. This allows you to review and verify each detail you entered, ensuring accuracy and peace of mind. The table format provides an intuitive layout, making it simple to navigate and check all your information at a glance. Designed to streamline the tax filing process, this feature gives you confidence that your data is well-organized and easily accessible for any future reference or updates, all in one convenient place.</p>
            <!-- <div class="form-container">
                <h3>Tax Regime Switch option facility from default (New Tax Regime) to Old Tax Regime for Financial Year 2024-25</h3>
                <div class="form-header">
                    <h4>Record Details</h4>
                </div>
            </div> -->

        </div>

        <!-- Report Section -->
    <div id="report" class="section" style="display:none;">
          <h2>Report page</h2>

          <ul>
  <li>Welcome to the Report Page! Here, you’ll find a summary of all the information entered on the Tax Regime page.</li>
  <li>Simply click on the "Report" button to display the latest updates from the Tax Regime page.</li>
  <li>Our system ensures that the report is accurate and reflects the most recent data you’ve entered.</li>
  <li>This page provides an easy-to-read overview, making it simple for you to review and verify tax-related information.</li>
  <li>If you need to make changes, just go back to the Tax Regime page, update the details, and return here to see the updated report.</li>
  <li>Thank you for using our platform! We hope this feature makes your experience smoother and more efficient.</li>
</ul>


    </div>

    <!-- JavaScript -->
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("active");
        }

        function showSection(sectionId) {
            // Hide all sections
            var sections = document.querySelectorAll('.section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
</body>
</html>
