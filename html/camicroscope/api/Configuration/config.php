<?php 


///new
//$baseUrl = "http://127.0.0.1:9099";
$baseUrl = "172.17.0.7:9099";

$serviceUrl = "$baseUrl/services/Camicroscope_DataLoader";

$annotationsUrl = "$baseUrl/services/Camicroscope_Annotations";


$imageUrl = "$serviceUrl/DataLoader";

$templateUrl = "$serviceUrl/AnnotationTemplate";
$markupUrl = "$serviceUrl/Annotations";

$dynamicServices = $serviceUrl;
$firebase = "https://test-8f679.firebaseio.com/camicroscopeStates";
$firebase_key = "kweMPSAo4guxUXUodU0udYFhC27yp59XdTEkTSJ4";

$kueUrl = "http://172.17.0.5:3000";

$tempMarkupUrl = "http://localhost:9099/services/TCGABRCA_Dev";

return array(
    'auth_realm' => "$baseUrl/securityTokenService",
    /*
     * temp
     */
    'algorithmsForImage' => "$annotationsUrl/MarkupsForImages/query/MarkupsAvilableForImage?",
    'getMultipleAnnotations' => "$annotationsUrl/MarkupLoader/query/getMultipleMarkups?",
    //'getMultipleAnnotations' => "http://172.17.0.2:9099/services/Camicroscope_Annotations/MarkupLoader/query/getMultipleMarkups?",

    'deleteMarkups' => "$annotationsUrl/MarkupLoader/delete/deleteMultipleMarkups",
    'firebase' => $firebase,
    'firebase_key' => $firebase_key,
    'retrieveTemplate' => "$serviceUrl/AnnotationTemplate/query/retrieveTemplate",
    'getAllAnnotations' => "$tempMarkupUrl/Annotations/query/byUserAndImageID?iid=",
    'getAnnotationsSpatial' => "$serviceUrl/GeoJSONImageMetaData/query/getMarkups?",
    'getAnnotationSpatialFilter' => "$tempMarkupUrl/Annotations/query/allByFilter?iid=",
    'postAnnotation' => "$annotationsUrl/MarkupLoader/submit/json",
    'retrieveAnnotation' => "$tempMarkupUrl/Annotations/query/byAnnotId?annotId=",
    'postJobParameters' => "$tempMarkupUrl/AnalysisJobs/submit/singleJob",
    'deleteAnnotation' => "$tempMarkupUrl/Annotations/delete/singleAnnotation?annotId=",
    'getDimensions' => "$imageUrl/query/getDimensionsByIID?api_key=",
    'getFileLocation' => "$imageUrl/query/getFileLocationByIID?api_key=",
    'getROI' => "$annotationsUrl/MarkupLoader/query/getROI",
    'getMPP' => "$imageUrl/query/getMPPByIID?api_key=",
//    'fastcgi_server' => "/fastcgi-bin/iipsrv.fcgi",
    'fastcgi_server' => "/fcgi-bin/iipsrv.fcgi",
    'postWorkOrder' => "$dynamicServices/WorkOrders/submit/json",
    'kueUrl' => $kueUrl
);





?>
