<?php

use App\Models\User;
use Illuminate\Http\Request;
include('countryList.php');

function getUploadPath()
{
    return public_path('storage');
}

function baseUrl(){
//    return 'http://127.0.0.1:8000';
    return 'https://designermusekuwait.com';
}
 function sendNotification($title,$body,$tokenList)
{
    $url = 'https://fcm.googleapis.com/fcm/send';

    $FcmToken = $tokenList;

    $serverKey = 'AAAAt8rfTjQ:APA91bF_W12e3gWL_YU0QNAYEQUb_yVJTEvt3ZFszKfuXIsq2fiKPlW-pEPxyGA2E-xN2nXkQPYpeKymRRfkMLaZ6GU5M7nB_I68YAh_O6N4ZRbVb3DbyW6RfN1GoxiBPW2gwVAq06xr'; // ADD SERVER KEY HERE PROVIDED BY FCM

    $data = [
        "registration_ids" => $FcmToken,
        "notification" => [
            "title" => $title,
            "body" => $body,
        ],
    ];
    $encodedData = json_encode($data);

    $headers = [
        'Authorization:key=' . $serverKey,
        'Content-Type: application/json',
    ];
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    // Disabling SSL Certificate support temporarly
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
    // Execute post
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }
    // Close connection
    curl_close($ch);
    // FCM response
    return true;
}



function countryList(){
    return countryListData();
}
 function stateList(){
    return  $us_state_abbrevs_names = array(
        'AL'=>'ALABAMA',
        'AK'=>'ALASKA',
        'AS'=>'AMERICAN SAMOA',
        'AZ'=>'ARIZONA',
        'AR'=>'ARKANSAS',
        'CA'=>'CALIFORNIA',
        'CO'=>'COLORADO',
        'CT'=>'CONNECTICUT',
        'DE'=>'DELAWARE',
        'DC'=>'DISTRICT OF COLUMBIA',
        'FM'=>'FEDERATED STATES OF MICRONESIA',
        'FL'=>'FLORIDA',
        'GA'=>'GEORGIA',
        'GU'=>'GUAM GU',
        'HI'=>'HAWAII',
        'ID'=>'IDAHO',
        'IL'=>'ILLINOIS',
        'IN'=>'INDIANA',
        'IA'=>'IOWA',
        'KS'=>'KANSAS',
        'KY'=>'KENTUCKY',
        'LA'=>'LOUISIANA',
        'ME'=>'MAINE',
        'MH'=>'MARSHALL ISLANDS',
        'MD'=>'MARYLAND',
        'MA'=>'MASSACHUSETTS',
        'MI'=>'MICHIGAN',
        'MN'=>'MINNESOTA',
        'MS'=>'MISSISSIPPI',
        'MO'=>'MISSOURI',
        'MT'=>'MONTANA',
        'NE'=>'NEBRASKA',
        'NV'=>'NEVADA',
        'NH'=>'NEW HAMPSHIRE',
        'NJ'=>'NEW JERSEY',
        'NM'=>'NEW MEXICO',
        'NY'=>'NEW YORK',
        'NC'=>'NORTH CAROLINA',
        'ND'=>'NORTH DAKOTA',
        'MP'=>'NORTHERN MARIANA ISLANDS',
        'OH'=>'OHIO',
        'OK'=>'OKLAHOMA',
        'OR'=>'OREGON',
        'PW'=>'PALAU',
        'PA'=>'PENNSYLVANIA',
        'PR'=>'PUERTO RICO',
        'RI'=>'RHODE ISLAND',
        'SC'=>'SOUTH CAROLINA',
        'SD'=>'SOUTH DAKOTA',
        'TN'=>'TENNESSEE',
        'TX'=>'TEXAS',
        'UT'=>'UTAH',
        'VT'=>'VERMONT',
        'VI'=>'VIRGIN ISLANDS',
        'VA'=>'VIRGINIA',
        'WA'=>'WASHINGTON',
        'WV'=>'WEST VIRGINIA',
        'WI'=>'WISCONSIN',
        'WY'=>'WYOMING',
        'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
        'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
        'AP'=>'ARMED FORCES PACIFIC'
    );
}
