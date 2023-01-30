<!DOCTYPE html>
<html>

<body>
    <?php
        $name = $_GET["name"];
        $age = $_GET["age"];
        $gender = $_GET["gender"];
        $status = $_GET["status"];
        $nametitle = "";
        $male = "ชาย";
        $female = "หญิง";
        $married = "สมรส";       
        if ($gender == $male)
        {
            if ($age <= 14)
            {
                $nametitle = "เด็กชาย";
            }
            else
            {
                $nametitle = "นาย";
            }
        }
        else if ($gender == $female)
        {
            if ($age <= 14)
            {
                $name_title = "เด็กหญิง";
            }
            else if ($status==$married)
            {
                $nametitle = "นาง";
            }
            else
            {
                $nametitle = "นางสาว";
            }
        }
        echo  "ชื่อ :".$nametitle.$name;
        echo  "อายุ :".$age;
        echo  "เพศ :".$gender;
        echo  "สถานะ :".$status;
    ?>
</body>

</html>