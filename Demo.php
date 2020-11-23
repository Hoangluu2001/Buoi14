<?php
//
//class CustomException extends Exception
//{
//    public function errorMessage()
//    {
//
//        $errorMsg = $this->getMessage() . ' is not a valid E-Mail address.';
//        return $errorMsg;
//    }
//}
//
//$email = "someone@example.com";
//
//try {
//    try {
//
//        if (strpos($email, "example") !== FALSE) {
//            throw new Exception($email);
//        }
//    } catch (Exception $e) {
//
//        throw new CustomException($email);
//    }
//} catch (CustomException $e) {
//
//    echo $e->errorMessage();
//}

function inverse($x)
{
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} finally {
    echo "First finally.\n";
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} finally {
    echo "Second finally.\n";
}
