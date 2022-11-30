<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap Ve Nha ngay 30/11</title>
</head>

<body>
    <!-- B1: Khởi tạo mảng $arr = array(1,4,2,6,9,100,45,8,20); 
    Tìm phần tử lớn nhất của mảng ! -->
    <?php
    $arr = array(1, 4, 2, 6, 9, 100, 45, 8, 20);
    $max = 0;
    for ($index = 0; $index < count($arr); $index++) {
        if ($arr[$index] > $max) {
            $max = $arr[$index];
        }
    }
    echo "Phan tu lon nhat cua mang la: " . $max;
    ?>
    <br>

    <!-- B2:Khởi tạo mảng $arr = array(1,4,2,6,9,100,4,);
    Ví dụ:  Mảng đầu vào :       1       3         5         9        11
    Mảng khi  in ra:       11     9          5         3        1 -->

    <?php
    $arr = array(1, 4, 2, 6, 9, 100, 4,);
    $temp;
    $count = count($arr);
    for ($i = 0; $i < $count / 2; $i++) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$count - 1 - $i];
        $arr[count($arr) - 1 - $i] = $temp;
    }
    echo "Mang dao nguoc: ";
    for ($i = 0; $i < $count; $i++) {
        echo $arr[$i] . ", ";
    }
    ?>
    <br>

    


    <!-- B3: Khởi tạo mảng $arr = array(1,4,2,6,9,100,4,);
    Sắp xếp và in ra mảng theo thứ tự tăng dần. -->
    <?php
        $arr = array(1, 4, 2, 6, 9, 100, 4,);
        $result;
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $result = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $result;
                }
            }
        }

        echo "Mang tang dan la: ";
        for ($i = 0; $i < $count; $i++) {
            echo $arr[$i] . ",";
        }
    ?>
    <br>


    <!-- Hàm ucwords() sẽ chuyển tất cả các chữ đầu tiên của mỗi từ trong chuỗi thành chữ in hoa. -->
    <!-- Hàm strtolower() dùng để chuyển đổi các kí tự trong chuỗi thành kí tự in thường. -->
    <!-- Hàm trim() sẽ loại bỏ khoẳng trắng( hoặc bất kì kí tự nào được cung cấp) dư thừa ở đầu và cuối chuỗi. -->

    <!-- B4:Đề bài: Viết chương trình khởi tạo 1 chuỗi sau đó chuẩn hóa chuỗi. Cắt bỏ các khoảng trắng đầu cuối hoặc trong chuỗi, viết hoa chữ cái đầu tiên của các từ trong chuỗi. Cuối chuỗi có dấu chấm kết thúc chuỗi.
    Ví dụ:
    - Chuỗi đầu vào: “ vŨ văN thƯoNg ”
    - Chuỗi đầu ra: “Vũ Văn Thương.” -->

    <?php
        $chuoiVao = "    GiAp     VaN   ThAnH    DaT    ";
        $chuoiChuanHoa = ucwords(strtolower(trim($chuoiVao)));
        echo "Chuoi duoc in ra la: " . $chuoiChuanHoa;
    ?>
    <br>

    <!-- Hàm explode() trong php có nhiệm vụ chuyển một chuỗi thành một mảng và mỗi phần tử được cắt bởi một chuỗi con nào đó. -->

    <!-- B5: Đề bài: Viết chương trình tách họ, tên đệm và tên của một chuỗi họ tên được khởi tạo $name="...";
    Ví dụ:
    - Chuỗi đầu vào: “Dương Vũ Văn  Quá” or “Lưu Diệc Phi”
    - Kết quả đầu ra:
    Họ:     Dương             Lưu
    Đệm:  Vũ Văn            Diệc
    Tên:    Quá                  Phi -->

    <?php
        $chuoiVao = "Giap Thanh Dat";
        $LoaiBaoKhoangTrang = trim($chuoiVao);
        $tachChuoiThanhMang = explode(" ", $LoaiBaoKhoangTrang);
        
        $Ho = $tachChuoiThanhMang[0];
        $count = count($tachChuoiThanhMang);

        for ($i = 1; $i < $count - 1; $i++) {
            $tenDem = $tachChuoiThanhMang[$i];
        }
        echo "Ho: " .$Ho;
        echo "<br>Ten dem: " .$tenDem;
        echo "<br>Ten: " .$tachChuoiThanhMang[$count - 1];
    ?>
    <br>





        <!-- B6: Đề bài: Khởi tạo 1 chuỗi sau đó kiểm tra xem chuỗi đó có phải là chuỗi Palindrome hay không?
        Gợi ý: Palindrome nghĩa là khi đảo ngược chuỗi vẫn không thay đổi. Ví dụ: ZenttneZ viết ngược lại vẫn giống như chữ ban đầu nhập vào. -->

        <?php 
        function palindrome($chuoi) {
            $layDoDaiChuoi = strlen($chuoi) - 1;
            $ketqua = '';
            for($x = $layDoDaiChuoi; $x >= 0; $x--) {
                $ketqua .= $chuoi[$x];
                //dao nguoc chuoi
            }
            if ($ketqua == $chuoi) {
                echo $ketqua. " :Là chuỗi Palindrome";
            } else {
                echo $ketqua. " :Khong phai chuoi Palindrome";
            }

        }
        palindrome("dast");
        ?>


     


</body>

</html>