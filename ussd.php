<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "Hi welcome, By Using this service, a ₦20 Services charge may apply \n";
$response .= "Press 1 to Accept";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "Welcome To Pad-Up Creations Limited \n";
$response .= "1. Locate Distributors \n";
$response .= "2. Buy Product \n";
$response .= "3. Learn More About our Products \n";
$response .= "4. Track your Order \n";
}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = "Select Your State \n";
$response .= "1. Abia \n";
$response .= "2. Adamawa \n";
$response .= "3. Akwa Ibom \n";
$response .= "4. Anambra \n";
$response .= "5. Bauchi \n";
$response .= "6. Bayelsa \n";
}
else if ($text == "1*1*1") {
$response = "Abia State Distributors \n";
$response .= "1. ugo 07088 \n";
$response .= "2. ahmed 05451\n";
$response .= "3. john 02541 \n";
$response .= "4. james 087 \n";
$response .= "5. peter 080 \n";
$response .= "6. mary 0254 \n";
}
else if ($text == "1*1*2") {
$response = "Adamawa State Distributors \n";
$response .= "1. Faith 07088 \n";
$response .= "2. Mercy 05451\n";
$response .= "3. Emeka 02541 \n";
$response .= "4. Mohammed 087 \n";
$response .= "5. peter 080 \n";
$response .= "6. mary 0254 \n";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
$response = "Buy Product \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
$response = "Select Product \n";
$response .= "1. Luxury Kit -N- 900 \n";
$response .= "2. Eco Kit -N- 550 \n";
$response .= "3. Heavy Duty -N- 1100 \n";
$response .= "4. Baby Diaper -N- 1350 \n";
$response .= "5. Sanitary Wipes -N- 300 \n";
$response .= "6. Panty Liner -N- 300 \n";
}
else if ($text == "1*2*1*1") {
$response = "still working on it";
}
else if ($text == "1*2*1*2") {
$response = "still working on it";
}
else if ($text == "1*2*1*3") {
$response = "still working on it";
}
else if ($text == "1*2*1*4") {
$response = "still working on it";
}
else if ($text == "1*2*1*5") {
$response = "still working on it";
}
else if ($text == "1*2*1*6") {
$response = "still working on it";
}

// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
$response = "Learn More About Our Products \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "Abount Our Product \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*3*1*1") {
$response = "Product Discribtions Goes Here";
}
else if ($text == "1*3*1*0") {
$response = "Thank You";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
$response = "Track Your Order Here \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
$response = "Enter Your Order ID \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*4*1*1") {
$response = "Thank You, SMS will be sent to your with your order location shortly ";
}
else if ($text == "1*4*1*0") {
$response = "Thank you";
}
//echo response
header('Content-type: text/plain');
echo $response
?>
