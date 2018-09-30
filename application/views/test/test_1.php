<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="../user/profile"> Кадровая безопасность</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"> </i><?php echo $_SESSION['user_fio']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Профиль</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Настройки</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="../user/profile"><i class="fa fa-home fa-fw"></i> Главная страница</a>
                        </li>
                        <li>
                            <a href="../user/result"><i class="fa fa-bookmark fa-fw"></i> Результаты </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Анкетирование<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../user/questionnaire"> Базовая информация</a>
                                </li>
                                <li>
                                    <a href="../user/education"> Информация об образовании</a>
                                </li>
                                <li>
                                    <a href="../user/contactinfo"> Контактная информация</a>
                                </li>
                                <li>
                                    <a href="../user/drivinglicense"> Водительское удостоверения</a>
                                </li>
                                <li>
                                    <a href="../user/military"> Отношение к воинской обязанности</a>
                                </li>
                                <li>
                                    <a href="../user/languages"> Знание иностранных языков</a>
                                </li>
                                <li>
                                    <a href="../user/academicdegree"> Учёная степень</a>
                                </li>
                                <li>
                                    <a href="../user/experience"> Стаж работы</a>
                                </li>
                                <li>
                                    <a href="../user/anexperience"> Опыт работы</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../test/test_1"><i class="fa fa-edit fa-fw"></i> Доступные тесты</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Доступные тесты</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <?php if(isset($_SESSION['success'])) {?>

            <div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

            <?php }?>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i> Информация о доступных тестах</i>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-4">
                                    <a href=
                                    "<?php 

                                    if($coef["Методика оценки уровня общительности Ряховского"] != null) { 
                                        echo '../user/result'; 
                                    } else if($ready["Методика оценки уровня общительности Ряховского"] != null) { 
                                        echo ''; 
                                    } else {
                                        echo 'test_number_1';
                                    }

                                    ?>" 
                                    style="text-decoration: none;">
                                        <div class=
                                        "<?php 
                                        if($coef["Методика оценки уровня общительности Ряховского"] != null) { 
                                            echo 'panel panel-primary'; 
                                        } else if($ready["Методика оценки уровня общительности Ряховского"] != null) { 
                                            echo 'panel panel-yellow'; 
                                        }
                                        else { 
                                            echo 'panel panel-green'; 
                                        } 

                                        ?>">
                                            <div class="panel-heading">
                                                <?php 
                                                if($coef["Методика оценки уровня общительности Ряховского"] != null) { 
                                                    echo 'Тест пройден'; 
                                                } 
                                                else if($ready["Методика оценки уровня общительности Ряховского"] != null) { 
                                                    echo 'Тест проверяеться'; 
                                                }
                                                else { 
                                                    echo 'Тест доступен'; 
                                                } 
                                                ?>
                                            </div>
                                        
                                            <div class="panel-body">
                                                <p>Уровней общительности</p>

                                            </div>
                                    
                                            <div class="panel-footer" style="color: black">
                                                <?php
                                                if($coef["Методика оценки уровня общительности Ряховского"] != null) { 
                                                    echo 'Пройден. Коэффициент данного теста: '. $coef["Методика оценки уровня общительности Ряховского"]; 
                                                } 
                                                else if($ready["Методика оценки уровня общительности Ряховского"] != null) { 
                                                    echo 'Вы прошли данный тест'; 
                                                } 
                                                else { 
                                                    echo 'Можно пройти один раз'; 
                                                } 

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href=
                                    "<?php 

                                    if($coef["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                        echo '../user/result'; 
                                    } else if($ready["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                        echo ''; 
                                    } else {
                                        echo 'test_number_2';
                                    }

                                    ?>" 
                                    style="text-decoration: none;">
                                        <div class=
                                        "<?php 
                                        if($coef["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                            echo 'panel panel-primary'; 
                                        } else if($ready["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                            echo 'panel panel-yellow'; 
                                        }
                                        else { 
                                            echo 'panel panel-green'; 
                                        } 

                                        ?>">
                                            <div class="panel-heading">
                                                <?php 
                                                if($coef["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                                    echo 'Тест пройден'; 
                                                } 
                                                else if($ready["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                                    echo 'Тест проверяеться'; 
                                                }
                                                else { 
                                                    echo 'Тест доступен'; 
                                                } 
                                                ?>
                                            </div>
                                        
                                            <div class="panel-body">
                                                <p> Готовность к риску </p>

                                            </div>
                                    
                                            <div class="panel-footer" style="color: black">
                                                <?php
                                                if($coef["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                                    echo 'Пройден. Коэффициент данного теста: '. $coef["Методика диагностики степени готовности к риску А. М. Шуберта"]; 
                                                } 
                                                else if($ready["Методика диагностики степени готовности к риску А. М. Шуберта"] != null) { 
                                                    echo 'Вы прошли данный тест'; 
                                                } 
                                                else { 
                                                    echo 'Можно пройти один раз'; 
                                                } 

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href=
                                    "<?php 

                                    if($coef["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                        echo '../user/result'; 
                                    } else if($ready["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                        echo ''; 
                                    } else {
                                        echo 'test_number_3';
                                    }

                                    ?>" 
                                    style="text-decoration: none;">
                                        <div class=
                                        "<?php 
                                        if($coef["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                            echo 'panel panel-primary'; 
                                        } else if($ready["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                            echo 'panel panel-yellow'; 
                                        }
                                        else { 
                                            echo 'panel panel-green'; 
                                        } 

                                        ?>">
                                            <div class="panel-heading">
                                                <?php 
                                                if($coef["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                                    echo 'Тест пройден'; 
                                                } 
                                                else if($ready["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                                    echo 'Тест проверяеться'; 
                                                }
                                                else { 
                                                    echo 'Тест доступен'; 
                                                } 
                                                ?>
                                            </div>
                                        
                                            <div class="panel-body">
                                                <p> Какой Вы руководитель? </p>

                                            </div>
                                    
                                            <div class="panel-footer" style="color: black">
                                                <?php
                                                if($coef["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                                    echo 'Пройден. Коэффициент данного теста: '. $coef["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"]; 
                                                } 
                                                else if($ready["Тест на управленческую ответственность «Какой Вы руководитель?» А. Гороховской"] != null) { 
                                                    echo 'Вы прошли данный тест'; 
                                                } 
                                                else { 
                                                    echo 'Можно пройти один раз'; 
                                                } 

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href=
                                    "<?php 

                                    if($coef["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                        echo '../user/result'; 
                                    } else if($ready["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                        echo ''; 
                                    } else {
                                        echo 'test_number_4';
                                    }

                                    ?>" 
                                    style="text-decoration: none;">
                                        <div class=
                                        "<?php 
                                        if($coef["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                            echo 'panel panel-primary'; 
                                        } else if($ready["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                            echo 'panel panel-yellow'; 
                                        }
                                        else { 
                                            echo 'panel panel-green'; 
                                        } 

                                        ?>">
                                            <div class="panel-heading">
                                                <?php 
                                                if($coef["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                                    echo 'Тест пройден'; 
                                                } 
                                                else if($ready["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                                    echo 'Тест проверяеться'; 
                                                }
                                                else { 
                                                    echo 'Тест доступен'; 
                                                } 
                                                ?>
                                            </div>
                                        
                                            <div class="panel-body">
                                                <p> Избегание неудач </p>

                                            </div>
                                    
                                            <div class="panel-footer" style="color: black">
                                                <?php
                                                if($coef["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                                    echo 'Пройден. Коэффициент данного теста: '. $coef["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"]; 
                                                } 
                                                else if($ready["Методика диагностики личности на мотивацию к избеганию неудач Т.Элерса"] != null) { 
                                                    echo 'Вы прошли данный тест'; 
                                                } 
                                                else { 
                                                    echo 'Можно пройти один раз'; 
                                                } 

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href=
                                    "<?php 

                                    if($coef["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                        echo '../user/result'; 
                                    } else if($ready["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                        echo ''; 
                                    } else {
                                        echo 'test_number_5';
                                    }

                                    ?>" 
                                    style="text-decoration: none;">
                                        <div class=
                                        "<?php 
                                        if($coef["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                            echo 'panel panel-primary'; 
                                        } else if($ready["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                            echo 'panel panel-yellow'; 
                                        }
                                        else { 
                                            echo 'panel panel-green'; 
                                        } 

                                        ?>">
                                            <div class="panel-heading">
                                                <?php 
                                                if($coef["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                                    echo 'Тест пройден'; 
                                                } 
                                                else if($ready["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                                    echo 'Тест проверяеться'; 
                                                }
                                                else { 
                                                    echo 'Тест доступен'; 
                                                } 
                                                ?>
                                            </div>
                                        
                                            <div class="panel-body">
                                                <p> Мотивация к успеху </p>

                                            </div>
                                    
                                            <div class="panel-footer" style="color: black">
                                                <?php
                                                if($coef["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                                    echo 'Пройден. Коэффициент данного теста: '. $coef["Методика диагностики личности на мотивацию к успеху Т. Элерса"]; 
                                                } 
                                                else if($ready["Методика диагностики личности на мотивацию к успеху Т. Элерса"] != null) { 
                                                    echo 'Вы прошли данный тест'; 
                                                } 
                                                else { 
                                                    echo 'Можно пройти один раз'; 
                                                } 

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href=
                                    "<?php 

                                    if($coef["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                        echo '../user/result'; 
                                    } else if($ready["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                        echo ''; 
                                    } else {
                                        echo 'test_number_6';
                                    }

                                    ?>" 
                                    style="text-decoration: none;">
                                        <div class=
                                        "<?php 
                                        if($coef["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                            echo 'panel panel-primary'; 
                                        } else if($ready["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                            echo 'panel panel-yellow'; 
                                        }
                                        else { 
                                            echo 'panel panel-green'; 
                                        } 

                                        ?>">
                                            <div class="panel-heading">
                                                <?php 
                                                if($coef["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                                    echo 'Тест пройден'; 
                                                } 
                                                else if($ready["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                                    echo 'Тест проверяеться'; 
                                                }
                                                else { 
                                                    echo 'Тест доступен'; 
                                                } 
                                                ?>
                                            </div>
                                        
                                            <div class="panel-body">
                                                <p> Эффективность лидерства </p>

                                            </div>
                                    
                                            <div class="panel-footer" style="color: black">
                                                <?php
                                                if($coef["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                                    echo 'Пройден. Коэффициент данного теста: '. $coef["Тест «Эффективность лидерства» Р.С. Немова"]; 
                                                } 
                                                else if($ready["Тест «Эффективность лидерства» Р.С. Немова"] != null) { 
                                                    echo 'Вы прошли данный тест'; 
                                                } 
                                                else { 
                                                    echo 'Можно пройти один раз'; 
                                                } 

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href=
                                    "<?php 

                                    if($coef["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                        echo '../user/result'; 
                                    } else if($ready["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                        echo ''; 
                                    } else {
                                        echo 'test_number_7';
                                    }

                                    ?>" 
                                    style="text-decoration: none;">
                                        <div class=
                                        "<?php 
                                        if($coef["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                            echo 'panel panel-primary'; 
                                        } else if($ready["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                            echo 'panel panel-yellow'; 
                                        }
                                        else { 
                                            echo 'panel panel-green'; 
                                        } 

                                        ?>">
                                            <div class="panel-heading">
                                                <?php 
                                                if($coef["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                                    echo 'Тест пройден'; 
                                                } 
                                                else if($ready["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                                    echo 'Тест проверяеться'; 
                                                }
                                                else { 
                                                    echo 'Тест доступен'; 
                                                } 
                                                ?>
                                            </div>
                                        
                                            <div class="panel-body">
                                                <p> Мотивация успеха и боязнь неудачи </p>

                                            </div>
                                    
                                            <div class="panel-footer" style="color: black">
                                                <?php
                                                if($coef["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                                    echo 'Пройден. Коэффициент данного теста: '. $coef["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"]; 
                                                } 
                                                else if($ready["Тест «Мотивация успеха и боязнь неудачи» А.А.Реан"] != null) { 
                                                    echo 'Вы прошли данный тест'; 
                                                } 
                                                else { 
                                                    echo 'Можно пройти один раз'; 
                                                } 

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                               <!-- <div class="col-lg-4">
                                    <a href="test_number_8" style="text-decoration: none;">
                                        <div class="panel panel-green">
                                            <div class="panel-heading">
                                                Доступный тест
                                            </div>
                                            <div class="panel-body">
                                                <p> Краткое описание </p>
                                            </div>
                                            <div class="panel-footer" style="color: black">
                                                Можно пройти один раз
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                -->
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

