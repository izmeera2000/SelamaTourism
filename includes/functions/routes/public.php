<?php


function home()
{
    include('includes/server.php');
    include 'views/public/home.php';
}


function login()
{
    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/login.php';
}

function register()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/register.php';
}




function logout()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session
    global $basePath2;

    header("Location: " . $basePath2 . "/signin");
    exit();
}




function notFound()
{
    http_response_code(404);
    echo "404 Not Found";
    // echo $requestUri;

}


function unAuth()
{
    http_response_code(401);
    echo "Unauthorized";
    // echo $requestUri;

}
function checkLogin()
{

    checkRole();
    if (!isset($_SESSION['user_details'])) {
        global $basePath2;

        header("Location: " . $basePath2 . "/signin");
        exit();

    }

}



function register_2()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/register2.php';
}






function checkRole()
{
    // Ensure the 'role' session is set and is one of the valid roles
    if (isset($_SESSION['user_details']['role'])) {
        $role = $_SESSION['user_details']['role'];
        // Check for different roles
        if ($role == 1) {
            return 'admin';
        } elseif ($role == 2) {
            return 'guide';
        } elseif ($role == 3) {
            return 'user';
        }
    }


}


function getBookingStatuses($num)
{

    $statusArray = [
        'declined',
        'processing',
        'accepted',
        'ongoing',
        'finished',
        'cancelled',
        'delayed',
        'didnt attend',
        'emergency',


     ];

    return $statusArray[$num];


}

function getHikingStatuses($num = null)
{

    $statusArray = [
        'not yet',
        'ongoing',
        'finished',
        'didnt attend',
        'emergency',
    ];

        // If a number is provided, return the status at that index
        if ($num !== null && isset($statusArray[$num])) {
            return $statusArray[$num];
        }
    

        return $statusArray;


}
function getGuideStatuses($num = null)
{
    // Define the status array
    $statusArray = [
        '',
        '',
        'not yet',
        'ongoing',
        'finished',
        'cancelled',
        'delayed',
        '',
        'emergency',
    ];

    // If a number is provided, return the status at that index
    if ($num !== null && isset($statusArray[$num])) {
        return $statusArray[$num];
    }

    return $statusArray;
}



function dashboard()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];
    echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    if ($role === 'admin') {

        include 'views/system/admin/dashboard.php';

    } elseif ($role == 'guide') {
        include 'views/system/guide/dashboard.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        include 'views/system/user/dashboard.php';

    }
}

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

require 'vendor/autoload.php'; // Ensure Composer's autoload is included

 


function generateQRCodeWithLogo($data, $logoPath){
    $options = new QROptions([
        'outputType' => QRCode::OUTPUT_IMAGE_PNG,
        'eccLevel' => QRCode::ECC_H,
        'scale' => 10,
        'imageBase64' => false, // We will convert to base64 manually
    ]);
  
    // Generate the QR code image
    $qrOutputInterface = new QRCode($options);
    $qrImage = $qrOutputInterface->render($data);
  
    // Load the QR code and logo images
    $qrImageResource = imagecreatefromstring($qrImage);
    $logoImageResource = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . $logoPath);
  
    // Get dimensions
    $qrWidth = imagesx($qrImageResource);
    $qrHeight = imagesy($qrImageResource);
    $logoWidth = imagesx($logoImageResource);
    $logoHeight = imagesy($logoImageResource);
  
    // Calculate logo placement
    $logoQRWidth = $qrWidth / 5; // Logo will cover 1/5th of the QR code
    $scaleFactor = $logoWidth / $logoQRWidth;
    $logoQRHeight = $logoHeight / $scaleFactor;
  
    $xPos = ($qrWidth - $logoQRWidth) / 2;
    $yPos = ($qrHeight - $logoQRHeight) / 2;
  
    // Merge logo onto QR code
    imagecopyresampled(
        $qrImageResource,
        $logoImageResource,
        $xPos,
        $yPos,
        0,
        0,
        $logoQRWidth,
        $logoQRHeight,
        $logoWidth,
        $logoHeight
    );
  
    // Output QR code with logo to a string
    ob_start();
    imagepng($qrImageResource);
    $outputImage = ob_get_clean();
  
    // Convert to base64
    $base64 = base64_encode($outputImage);
  
    // Free memory
    imagedestroy($qrImageResource);
    imagedestroy($logoImageResource);
  
    return $base64;
  }