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
            <p><strong style="font-size:18px; font-family: 'Roboto', sans-serif;"><center>Список ЗУ</center></strong></p>
            <div class="datatable">
                <div align="center" style="height:100%; width: auto;overflow-y:scroll;">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "gas") 
                        or die("Ошибка " . mysqli_error($link));

                        $query ="SELECT * FROM listzu";

                        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                        echo "<table id='table_blur' class='table_blur'>
                                    <thead class='fixedHeader'>
                                    <tr>
                                        <th></th>
                                        <th>Арх.№</th>
                                        <th>Давление/диаметр трубы</th>
                                        <th>Номер</th>
                                        <th>Место установки</th>
                                        <th>Дата установки</th>
                                        <th>Дата демонтажа</th>
                                        <th>Диаметр условный</th>
                                        <th>Присоединение к газопроводу</th>
                                        <th>Материал</th>
                                        <th>Способ установки</th>
                                        <th>Компенсатор</th>
                                        <th>Год выпуска</th>
                                        <th>Функцианальное назначение</th>
                                        <th>Балансовая принадлежность</th>
                                        <th>Мастер по обслуживанию</th>
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
                                                <button name='arch№' value='".$row['arch№']."'  type='submit'class='btn btn-info btn-sm'>
                                                    <span class='glyphicon glyphicon-pencil'></span>
                                                </button>
                                            </form>
                                            <form method='post' action='includes/listZUActions/removeListZU.php'>
                                                <button name='arch№' value='".$row['arch№']."' type='submit'class='btn btn-danger btn-sm'>
                                                    <span class='glyphicon glyphicon-trash'></span>
                                                </button>
                                            </form>
                                        </td>
                                        <td id='arch№'>" . $row['arch№'] . "</td>
                                        <td id='pressDiamPipe'>" . $row['pressDiamPipe'] . "</td>
                                        <td id='number'>" . $row['number'] . "</td>
                                        <td id='instalSite'>" . $row['instalSite'] . "</td>
                                        <td id='instalDate'>" . $row['instalDate'] . "</td>
                                        <td id='dismantDate'>" . $row['dismantDate'] . "</td>
                                        <td id='nominalDiam'>" . $row['nominalDiam'] . "</td>
                                        <td id='connGasPipe'>" . $row['connGasPipe'] . "</td>
                                        <td id='material'>" . $row['material'] . "</td>
                                        <td id='instalMethod'>" . $row['instalMethod'] . "</td>
                                        <td id='compensator'>" . $row['compensator'] . "</td>
                                        <td id='yearManuf'>" . $row['yearManuf'] . "</td>
                                        <td id='funcPurpose'>" . $row['funcPurpose'] . "</td>
                                        <td id='balanceOwnership'>" . $row['balanceOwnership'] . "</td>
                                        <td id='mainWizard'>" . $row['mainWizard'] . "</td>
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

                            $query ="SELECT * FROM listzu";

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
                                <span><b>Арх №</b></span>
                                <div class="input-group" >
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Арх №" name="arch№add"
                                    required="required">
                                </div><br>
                                <span><b>Давление/диаметр трубы</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Давление/диаметр трубы" name="pressDiamPipeadd"
                                        required="required">
                                </div><br>
                                <span><b>Номер</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Номер" name="numberadd"
                                        required="required">
                                </div><br>
                                <span><b>Место установки</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Место установки" name="instalSiteadd"
                                        required="required">
                                </div><br>
                                <span><b>Дата установки</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="date" class="form-control" placeholder="Дата установки" name="instalDateadd"
                                        required="required">
                                </div><br>
                                <span><b>Дата демонтажа</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="date" class="form-control" placeholder="Дата демонтажа" name="dismantDateadd">
                                </div><br>
                                <span><b>Диаметр условный</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="number" class="form-control" placeholder="Диаметр условный" name="nominalDiamadd"
                                        required="required">
                                </div><br>
                                <span><b>Присоединение к газопроводу</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Присоединение к газопроводу" name="connGasPipeadd"
                                        required="required">
                                </div><br>
                                <span><b>Материал</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Материал" name="materialadd"
                                        required="required">
                                </div><br>
                                <span><b>Способ установки</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Способ установки" name="instalMethodadd"
                                        required="required">
                                </div><br>
                                <span><b>Компенсатор</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Компенсатор," name="compensatoradd"
                                        required="required">
                                </div><br>
                                <span><b>Год выпуска</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="number" class="form-control" placeholder="Год выпуска" name="yearManufadd">
                                </div><br>
                                <span><b>Функцианальное назначение</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Функцианальное назначение" name="funcPurposeadd"
                                        required="required">
                                </div><br>
                                <span><b>Балансовая принадлежность</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Балансовая принадлежность" name="balanceOwnershipadd">
                                </div><br>
                                <span><b>Мастер по обслуживанию</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Мастер по обслуживанию" name="mainWizardadd">
                                </div><br>
                                </div>
                                <center><button id="add" class="btn btn-info btn-lg" name="add" style="width: 300px; margin-top: 15px;">Добавить запись</button></center>
                                
                                <?php include("includes/listZUActions/insertListZU.php");?>
                            </form>
                        </div>
                    </div>

                    

                    <div id="editBtn" class="modalDialog">
                        <div class="editRecord" >
                            <form action="" method="POST">
                            <a href="#close" title="Закрыть" class="close">X</a>
                            <h2>Редактирование записи</h2>
                            <div style="height: 250px; overflow-y: scroll; overflow-x: hidden;">
                            <span><b>Арх №</b></span>
                                <div class="input-group" >
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Арх №" name="arch№Edit"
                                    required="required">
                                </div><br>
                                <span><b>Давление/диаметр трубы</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Давление/диаметр трубы" name="pressDiamPipeEdit"
                                        required="required">
                                </div><br>
                                <span><b>Номер</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Номер" name="numberEdit"
                                        required="required">
                                </div><br>
                                <span><b>Место установки</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Место установки" name="instalSiteEdit"
                                        required="required">
                                </div><br>
                                <span><b>Дата установки</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="date" class="form-control" placeholder="Дата установки" name="instalDateEdit"
                                        required="required">
                                </div><br>
                                <span><b>Дата демонтажа</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="date" class="form-control" placeholder="Дата демонтажа" name="dismantDateEdit">
                                </div><br>
                                <span><b>Диаметр условный</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="number" class="form-control" placeholder="Диаметр условный" name="nominalDiamEdit"
                                        required="required">
                                </div><br>
                                <span><b>Присоединение к газопроводу</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Присоединение к газопроводу" name="connGasPipeEdit"
                                        required="required">
                                </div><br>
                                <span><b>Материал</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Материал" name="materialEdit"
                                        required="required">
                                </div><br>
                                <span><b>Способ установки</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Способ установки" name="instalMethodEdit"
                                        required="required">
                                </div><br>
                                <span><b>Компенсатор</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Компенсатор," name="compensatorEdit"
                                        required="required">
                                </div><br>
                                <span><b>Год выпуска</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="number" class="form-control" placeholder="Год выпуска" name="yearManufEdit">
                                </div><br>
                                <span><b>Функцианальное назначение</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Функцианальное назначение" name="funcPurposeEdit"
                                        required="required">
                                </div><br>
                                <span><b>Балансовая принадлежность</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Балансовая принадлежность" name="balanceOwnershipEdit">
                                </div><br>
                                <span><b>Мастер по обслуживанию</b></span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" class="form-control" placeholder="Мастер по обслуживанию" name="mainWizardEdit">
                                </div><br>
                                </div>
                                <center><button id="edit" class="btn btn-info btn-lg" name="edit" style="width: 300px; margin-top: 15px;">Сохранить изменения</button></center>

                                <?php include("includes/listZUActions/editListZU.php");?>
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