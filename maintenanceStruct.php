<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/table.css" />
    <link rel="stylesheet" href="css/modalWindow.css" />

    <link rel="icon" href="img/favicon.ico">

    <style>
        #main{
            margin: 50px 10px;
            width:320px;
            height:400px;
            float: left;
        }
        .multiline{
            line-height: 25px !important;
        }
    </style>

    <title>Наружные сети</title>
</head>
<body style="background-color: #F5FFFA;">
    <div id="main" style="padding: 0; margin-top: 8px; width: 100%; height: 90%;">
        <div class="m-content" style="width: 1520px; height: 665px;">

            <div class="layot_line" id="layout1" style="white-space: nowrap; width: 1520px; height: 38px; margin-left: 0px; margin-top: 0px;">
                <div class="menu1" id="menu1" style="border-width: 1px; display: inline-block; vertical-align: top; margin-top: 0px; margin-left: 0px; width: 1149px; height:36px">
                    <div class="m_list" style="width: auto;">
                        <div class="dropdown">
                            <a id="gas-pipes" class="m_list_item" style="width: auto; height:34px; overflow: hidden;">Газопроводы</a>
                                <div class="dropdown-content">
                                    <a href="journalUch.php">Журнал учёта</a>
                                    <a href="pasports.php">Паспорта</a>
                                    <a href="pasports.php">Обходы газопроводов</a>
                                    <a href="outfitTask.php">Наряд задания</a>
                                </div>
                        </div>
                        <div class="dropdown">        
                            <a id="locking-device" class="m_list_item" style="width: auto; height:34px; overflow: hidden;">Запорные устройства</a>
                                <div class="dropdown-content">
                                    <a href="listZU.php">Список ЗУ</a>
                                    <a href="maintenanceStruct.php">ТО сооружений</a>
                                </div>
                        </div>
                        <div class="dropdown">
                            <a id="journals" class="m_list_item" style="width: auto; height:34px; overflow: hidden;">Журналы</a>
                                <div class="dropdown-content">
                                    <a href="journal6OF.php">Журнал 6-ОФ</a>
                                    <a href="journal26OF.php">Журнал 26-ОФ</a>
                                </div>
                        </div>    
                        <div class="dropdown">
                            <a id="earthwork" class="m_list_item" style="width: auto; height:34px; overflow: hidden;">Земляные работы</a>
                                <div class="dropdown-content">
                                    <a href="journal9EG.php">Журнал 9-ЭГ</a>
                                    <a href="journal3OF.php">Журнал 3-ОФ</a>
                                    <a href="outfitTaskKZR.php">Наряд-задания КЗР</a>
                                    <a href="journal11EG.php">Журнал 11-ЭГ</a>
                                </div>
                        </div>
                        <div class="dropdown">
                            <a id="surveyGP" class="m_list_item" style="width: auto; height:34px; overflow: hidden;">Обследование г/пр</a>
                                <div class="dropdown-content">
                                    <a href="KPOData.php">Данные КПО</a>
                                    <a href="outfitTaskKPO.php">Наряд-задания КПО</a>
                                </div>
                        </div>
                        <div class="dropdown">
                            <a id="handbook" class="m_list_item" style="width: auto; height:34px; overflow: hidden;">Справочники</a>
                                <div class="dropdown-content">
                                    <a href="#">Балансовая</a>
                                    <a href="#">Паспорта</a>
                                    <a href="#">Маршруты</a>
                                    <a href="#">Маршрутные карты</a>
                                    <a href="#">Работники</a>
                                    <a href="#">Подразделения</a>
                                    <a href="#">Приборы для КПО</a>
                                    <a href="#">Трудоёмкость ТО трубы</a>
                                    <a href="#">Трудоёмкость ТО ЗУ</a>
                                    <a href="#">Виды неисправностей</a>
                                </div>
                        </div>
                        <div class="dropdown">
                            <a id="exit" class="m_list_item" style="width: auto; height:34px; overflow: hidden;" href="logout.php">Выход</a>
                        </div>
                    </div>
                </div>
                <div id="unit" style="display: inline-block; vertical-align: top; border-width: 0px; margin-top: 0px; margin-left: -1px; width: 370px; height: 38px;">
                    <label  style="font-size: 25px; font-family: 'Roboto', sans-serif; text-align: center; line-height: 32px;" class="label"><font color="#428bca">ПУ "Барановичигаз"</font></label>
                </div>
            </div>
            <p><strong style="font-size:18px; font-family: 'Roboto', sans-serif;"><center>ТО сооружений</center></strong></p>
            <div class="datatable">
                <div align="center" style="height:100%; width: auto;overflow-y:scroll;">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "gas") 
                        or die("Ошибка " . mysqli_error($link));

                        $query ="SELECT * FROM maintenancestruct";

                        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                        echo "<table id='table_blur' class='table_blur' style='width: 1450px; height: auto;'>
                                    <thead class='fixedHeader'>
                                    <tr>
                                        <th></th>
                                        <th>Дата ТО</th>
                                        <th>Паспорт</th>
                                        <th>Маршрутная карта</th>
                                        <th>ЗУ(№/давление/диаметр)</th>
                                        <th>Газапровод</th>
                                    </tr>
                                    <tr id='table-filters' style='visibility: visible;' class='table-filters'>
                                        <td></td>
                                        <td>
                                            <input type='text'/>
                                        </td>
                                        <td>
                                            <input type='text'/>
                                        </td>
                                        <td>
                                            <input type='text'/>
                                        </td>
                                        <td>
                                            <input type='text'/>
                                        </td>
                                        <td>
                                            <input type='text'/>
                                        </td>
                                    </tr>
                                    </thead>";

                        if($result)
                        {
      
                            
                            while($row = mysqli_fetch_array($result)){
                                echo "
                                    <tr class='table-data' style='text-align: center;'>
                                        <td>
                                            <form method='GET' action='#editBtn' style='margin-bottom:5px;'>
                                                <button name='id_record' value='".$row['id_record']."'  type='submit'class='btn btn-info btn-sm'>
                                                    <span class='glyphicon glyphicon-pencil'></span>
                                                </button>
                                            </form>
                                            <form method='post' action='includes/maintenancestructActions/removemaintenancestruct.php'>
                                                <button name='id_record' value='".$row['id_record']."' type='submit'class='btn btn-danger btn-sm'>
                                                    <span class='glyphicon glyphicon-trash'></span>
                                                </button>
                                            </form>
                                        </td>
                                        <td id='MIDate'>" . $row['MIDate'] . "</td>
                                        <td id='passport'>" . $row['passport'] . "</td>
                                        <td id='routeMap'>" . $row['routeMap'] . "</td>
                                        <td id='locDevice'>" . $row['locDevice'] . "</td>
                                        <td id='gasPipe'>" . $row['gasPipe'] . "</td>
                                    </tr>
                                ";
                            }
                            echo "</table>";
                        };
                    ?>
                </div>
                                <script>
                                    $('.table-filters input').on('input', function () {
                                        filterTable($(this).parents('table'));
                                    });
                                    
                                    function filterTable($table) {
                                        var $filters = $table.find('.table-filters td');
                                        var $rows = $table.find('.table-data');
                                        $rows.each(function (rowIndex) {
                                            var valid = true;
                                            $(this).find('td').each(function (colIndex) {
                                                if ($filters.eq(colIndex).find('input').val()) {
                                                    if ($(this).html().toLowerCase().indexOf(
                                                    $filters.eq(colIndex).find('input').val().toLowerCase()) == -1) {
                                                        valid = valid && false;
                                                    }
                                                }
                                            });
                                            if (valid === true) {
                                                $(this).css('display', '');
                                            } else {
                                                $(this).css('display', 'none');
                                            }
                                        });
                                    }
                                </script>
                                  
                <div class="botMenu">
                    <div class="countRecords" style="border-width: 1px; display: inline-block; 
                    vertical-align: top; margin-top: 8px; width: 120px; height: 40px; background-color: white;">
                        <?php 
                            $link = mysqli_connect("localhost", "root", "", "gas") or die("Ошибка " . mysqli_error($link));

                            $query ="SELECT * FROM maintenancestruct";

                            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

                            $rows = mysqli_num_rows($result);

                        ?>
                        <div style="text-align: left; margin-top:8px; color: #777777; display: block;font-size: 15px;" >
                            <?php    
                                if($result)
                                {
                                        echo "Найдено : " . $rows;
                                }
                            ?>
                        </div>
                    </div>   

                    <form method='post' action='#addBtn' style='display:inline-block'>
                        <button style='width:650px; margin-left:50px; margin-top:5px;' type='submit'class='btn btn-info btn-lg'>
                            добавить новую запись
                        </button>
                    </form>

                    
                        <button id='search' style='width:650px; display:inline-block; margin-left:5px; margin-top:5px;' type='submit'class='btn btn-info btn-lg'>
                            фильтр записей
                        </button>

                    <script>
                        const btn = document.getElementById("search");
                        const content = document.getElementById("table-filters");
                        content.classList.toggle("hidden");
                        btn.addEventListener("click", btnClick);

                        function btnClick() {
                        console.log(content.classList);

                        if (content.classList.contains("hidden")) {
                            btn.textContent = "скрыть фильтрацию";
                        } else {
                            btn.textContent = "фильтр записей";
                        }

                        content.classList.toggle("hidden");
                        }       
                    </script>

                    <div id="addBtn" class="modalDialog">
                        <div class="addRecord" >
                            <form action="" method="POST">
                            <a href="#close" title="Закрыть" class="close">X</a>
                            <h2>Добавление записи</h2>
                            <div style="height: 250px; overflow-y: scroll; overflow-x: hidden;">
                                <span><b>Дата ТО</b></span>
                                <div class="input-group" >
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="date" class="form-control" placeholder="Дата ТО" name="MIDateadd"
                                    required="required">
                                </div><br>
                                <span><b>Паспорт</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Паспорт" name="passportadd"
                                        required="required">
                                </div><br>
                                <span><b>Маршрутная карта</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Маршрутная карта" name="routeMapadd"
                                        required="required">
                                </div><br>
                                <span><b>ЗУ(№/давление/диаметр)</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="ЗУ(№/давление/диаметр)" name="locDeviceadd"
                                        required="required">
                                </div><br>
                                <span><b>Газапровод</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Газапровод" name="gasPipeadd"
                                        required="required">
                                </div><br>
                                </div>
                                <center><button id="add" class="btn btn-info btn-lg" name="add" style="width: 300px; margin-top: 15px;">Добавить запись</button></center>
                                
                                <?php include("includes/maintenancestructActions/insertmaintenancestruct.php");?>
                            </form>
                        </div>
                    </div>

                    

                    <div id="editBtn" class="modalDialog">
                        <div class="editRecord" >
                            <form action="" method="POST">
                            <a href="#close" title="Закрыть" class="close">X</a>
                            <h2>Редактирование записи</h2>
                            <div style="height: 250px; overflow-y: scroll; overflow-x: hidden;">
                                <span><b>Дата ТО</b></span>
                                <div class="input-group" >
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="date" class="form-control" placeholder="Дата ТО" name="MIDateEdit"
                                    required="required">
                                </div><br>
                                <span><b>Паспорт</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Паспорт" name="passportEdit"
                                        required="required">
                                </div><br>
                                <span><b>Маршрутная карта</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Маршрутная карта" name="routeMapEdit"
                                        required="required">
                                </div><br>
                                <span><b>ЗУ(№/давление/диаметр)</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="ЗУ(№/давление/диаметр)" name="locDeviceEdit"
                                        required="required">
                                </div><br>
                                <span><b>Газапровод</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Газапровод" name="gasPipeEdit"
                                        required="required">
                                </div><br>
                                </div>
                                <center><button id="edit" class="btn btn-info btn-lg" name="edit" style="width: 300px; margin-top: 15px;">Сохранить изменения</button></center>

                                <?php include("includes/maintenancestructActions/editmaintenancestruct.php");?>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>