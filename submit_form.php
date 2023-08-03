<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tourType = $_POST['tour'];
$departureDate = $_POST['departure'];
$arrivalDate = $_POST['arrival'];

$totalAdultTwin = $_POST['total_adult_twin'];
$adultTwinPrice = $_POST['adult_twin_price'];
$totalChildWithBed = $_POST['total_child_with_bed'];
$childWithBedPrice = $_POST['child_with_bed_price'];
$totalChildNoBed = $_POST['total_child_no_bed'];
$childNoBedPrice = $_POST['child_no_bed_price'];
$totalInfant = $_POST['total_infant'];
$infantPrice = $_POST['infant_price'];
$totalSingleSupplement = $_POST['total_single_supplement'];
$singleSupplementPrice = $_POST['single_supplement_price'];
$totalTipping = $_POST['total_tipping'];
$tippingPrice = $_POST['tipping_price'];
$totalMealsOnBoard = $_POST['total_meals_on_board'];
$mealsOnBoardPrice = $_POST['meals_on_board_price'];
$totalVisa = $_POST['total_visa'];
$visaPrice = $_POST['visa_price'];
$totalTravelInsurance = $_POST['total_travel_insurance'];
$travelInsurancePrice = $_POST['travel_insurance_price'];
$totalUpgradeBusiness = $_POST['total_upgrade_business'];
$upgradeBusinessPrice = $_POST['upgrade_business_price'];
$totalLevyTax = $_POST['total_levy_tax'];
$levyTaxPrice = $_POST['levy_tax_price'];

$roomPreference = $_POST['room_preference'];
$visitorMessage = $_POST['visitor_message'];
$visitorName = $_POST['visitor_name'];

$totalCost = ($adultTwinPrice * $totalAdultTwin) +
             ($childWithBedPrice * $totalChildWithBed) +
             ($childNoBedPrice * $totalChildNoBed) +
             ($infantPrice * $totalInfant) +
             ($singleSupplementPrice * $totalSingleSupplement) +
             ($tippingPrice * $totalTipping) +
             ($mealsOnBoardPrice * $totalMealsOnBoard) +
             ($visaPrice * $totalVisa) +
             ($travelInsurancePrice * $totalTravelInsurance) +
             ($upgradeBusinessPrice * $totalUpgradeBusiness) +
             ($levyTaxPrice * $totalLevyTax);

// Note: You should also validate and sanitize the data before using it in any operations to ensure security and avoid vulnerabilities.

// Example of using the total cost
echo "Total Cost: RM " . number_format($totalCost, 2);

// Here, you can proceed with other actions like storing the data in a database or sending emails, etc.
// Ensure proper validation, error handling, and security measures are implemented for any data processing.

?>
