<?php
    include('../database/connectdb.php');
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Thông tin thanh toán</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="assets/jumbotron-narrow.css" rel="stylesheet">      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
        <script src="assets/jquery-1.11.3.min.js"></script>
        <link href="assets/main.css" rel="stylesheet">  
    </head>
    <body>
        <?php
        require_once("./config.php");
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }

        //$secureHash = md5($vnp_HashSecret . $hashData);
		$secureHash = hash('sha256',$vnp_HashSecret . $hashData);
        ?>
        <!--Begin display -->
        <?php
            $id  = $_SESSION['khachhang_id'];
            $sql_infor_cus = mysqli_query($con, "SELECT * FROM tbl_khachhang WHERE khachhang_id = '$id' ") ;
            $inf_kh = mysqli_fetch_array($sql_infor_cus);
        ?>
        <div class="container">
            <table>  
                <tbody>
                    <tr>
                        <td colspan="2" style="text-align: center">
                        <p style='color:red; text-align: center;  font-size: 29px;  text-transform: capitalize;'>Thanh toán thành công !</p>
                        <p style='color:rgb(0, 255, 13); text-align: center;  font-size: 50px;  text-transform: capitalize;'><i class="fa fa-check-circle-o"></i></p>
                        </td>
                    </tr>
                    <tr>
                        <td  class="td-title">Mã giao dịch </td>
                        <td><?php echo $_GET['vnp_TransactionNo'] ?></td>
                        
                    </tr>
                     <tr>
                        <td class="td-title">Họ Tên Người Nhận</td>
                        <td><?php echo $inf_kh['names']?></td>
                        
                    </tr> 
                    <tr>
                        <td class="td-title">Địa Chỉ Nhận Hàng</td>
                        <td><?php echo $inf_kh['addresss']  ?></td>
                        
                    </tr>
                    <tr>
                        <td class="td-title">Số Điện Thoại</td>
                        <td><?php echo $inf_kh['phone']?></td>
                        
                    </tr>
                    <tr>
                        <td class="td-title">Hình Thức Thanh Toán</td>
                        <td>Chuyển Khoản NH <?php echo $_GET['vnp_BankCode'] ?></td>
                        
                    </tr>
                    <tr>
                        <td class="td-title">Số Tiền thanh toán</td>
                        <td><?=number_format($_GET['vnp_Amount']/100) ?> VNĐ</td>
                    </tr>
                    <tr>
                        <td class="td-title">Nội dung thanh toán</td>
                        <td><?php echo $_GET['vnp_OrderInfo'] ?></td>
                    </tr>
                 
                    <tr>
                        <td class="td-title">
                            Kết quả
                        </td>
                        <td >
                        <?php
                        if ($secureHash == $vnp_SecureHash) {
                            if ($_GET['vnp_ResponseCode'] == '00') {
                                $order_id = $_GET['vnp_TxnRef'];
                                $money = $_GET['vnp_Amount']/100;
                                $note = $_GET['vnp_OrderInfo'];
                                $vnp_response_code = $_GET['vnp_ResponseCode'];
                                $code_vnpay = $_GET['vnp_TransactionNo'];
                                $code_bank = $_GET['vnp_BankCode'];
                                $time = $_GET['vnp_PayDate'];
                                $date_time = substr($time, 0, 4) . '-' . substr($time, 4, 2) . '-' . substr($time, 6, 2) . ' ' . substr($time, 8, 2) . ' ' . substr($time, 10, 2) . ' ' . substr($time, 12, 2);
                               
                               
                                $taikhoan = $_SESSION['khachhang_id'];
                                $sql = "SELECT * FROM payments WHERE giaodich_id= '$order_id'";
                                $query = mysqli_query($con, $sql);
                                $row = mysqli_num_rows($query);
                                
                                if ($row > 0) {
                                    $sql = "UPDATE payments SET giaodich_id = '$order_id',khachhang_id='$taikhoan', money = '$money', note = '$note', vnp_response_code = '$vnp_response_code', code_vnpay = '$code_vnpay', code_bank = '$code_bank' WHERE giaodich_id = '$order_id'";
                                   
                                    mysqli_query($con, $sql);
                                } else {
                                    $sql = "INSERT INTO payments(giaodich_id,khachhang_id, money, note, vnp_response_code, code_vnpay, code_bank, time) VALUES ('$order_id', '$taikhoan', '$money', '$note', '$vnp_response_code', '$code_vnpay', '$code_bank','$date_time')";
                                    mysqli_query($con, $sql);
                                }
                                
                                echo "GD Thanh cong";
                            } else {
                                echo "GD Khong thanh cong";
                            }
                        } else {
                            echo "Chu ky khong hop le";
                        }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="td-a">
                            <a href="../index.php">
                                <button class="custom-btn btn-15">Tiếp Tục Mua Sắm</button>
                            </a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" class="td-a">
                            <p>Mọi thắc mắc, hỗ trợ xin vui lòng gọi : 0814.515.062</p>
                        </td>
                        
                    </tr>
                   
                </tbody>
            </table>

        </div>  
        
    </body>
</html>
