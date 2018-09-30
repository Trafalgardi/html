<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../user/profile"> Кадровая безопасность</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['user_fio']; ?> <i class="fa fa-caret-down"></i>
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
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input name="education_1_8" type="text" class="form-control" placeholder="Search...">
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
                    <li class="active">
                        <a href="#"><i class="fa fa-table fa-fw"></i> Анкетирование<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                            <li>
                                <a href="questionnaire"> Базовая информация</a>
                            </li>
                            <li>
                                <a class="active" href="education"> Информация об образовании</a>
                            </li>
                            <li>
                                <a href="contactinfo"> Контактная информация</a>
                            </li>
                            <li>
                                <a href="drivinglicense"> Водительское удостоверения</a>
                            </li>
                            <li>
                                <a href="military"> Отношение к воинской обязанности</a>
                            </li>
                            <li>
                                <a href="languages"> Знание иностранных языков</a>
                            </li>
                            <li>
                                <a href="academicdegree"> Учёная степень</a>
                            </li>
                            <li>
                                <a href="experience"> Стаж работы</a>
                            </li>
                            <li>
                                <a href="anexperience"> Опыт работы</a>
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

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Информация об образовании</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Уровень образования 
                    </div>
                    <div class="panel-body">
                        <?php if(isset($_SESSION['success'])) {?>

                        <div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

                        <?php }?>
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>');?>
                        <form method="POST">
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_1" name="checkbox_1" type="checkbox" value="Без образования" >Без образования</label>
                                
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_2" name="checkbox_2" type="checkbox" value="Полное среднее образование">Полное среднее образование</label>
                                <div id="checkbox_at_2">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" id="check_2" name="check_2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_3" name="checkbox_3" type="checkbox" value="Магистратура">Магистратура</label>
                                <div id="checkbox_at_3">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" id="check_3" name="check_3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_4" name="checkbox_4" type="checkbox" value="Специалитет">Специалитет</label>
                                <div id="checkbox_at_4">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" id="check_4" name="check_4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_5" name="checkbox_5" type="checkbox" value="Кандидат наук">Кандидат наук</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_6" name="checkbox_6" type="checkbox" value="Доктор наук">Доктор наук</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_7" name="checkbox_7" type="checkbox" value="PhD">PhD</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_8" name="checkbox_8" type="checkbox" value="Профессиональная переподготовка">Профессиональная переподготовка</label>
                                <div id="checkbox_at_8">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" id="check_8" name="check_8">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_9" name="checkbox_9" type="checkbox" value="Профессиональная переподготовка в области управления">Профессиональная переподготовка в области управления</label>
                                <div id="checkbox_at_9">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" id="check_9" name="check_9">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_10" name="checkbox_10" type="checkbox" value="Высшее образования + учёная степень">Высшее образования + учёная степень</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_11" name="checkbox_11" type="checkbox" value="Высшее образование + профессиональная переподготовка">Высшее образование + профессиональная переподготовка</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_12" name="checkbox_12" type="checkbox" value="Высшее образование + учёная степень + профессиональная переподготовка в области управления">Высшее образование + учёная степень + профессиональная переподготовка в области управления</label>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-4">
                                        <input type="submit" id="submit_1" name="submit_1" class="btn btn-outline btn-success" value="Отправить данные">
                                    </div>
                                </div>
                            </div>

                            <script>

                            $( "input" ).change(function() {
                            for( var $i = 2; $i < 10; $i++){
                                if($i != 5 && $i != 6){
                                    var $input = $("#checkbox_" + $i);
                                    if($input.is( ":checked" ))
                                    {
                                        $("#checkbox_at_" + $i).show()
                                    }else {

                                        $("#checkbox_at_" + $i).hide()

                                    } 
                                }
                            }
                            

                            }).change();
                            
                            

                            </script>

                        </form>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Высшее образование
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Базовое образование
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                    <label>Период обучения</label>
                                    <div class="row" id="new_ed_1">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_2" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_3" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Факультет</p>
                                                <input name="education_4" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_5" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_6" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_2" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_7" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_9" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Факультет</p>
                                                <input name="education_10" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_11" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_12" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_3" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_13" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_14" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_15" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Факультет</p>
                                                <input name="education_16" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_17" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_18" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_4" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_19" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_20" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_21" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Факультет</p>
                                                <input name="education_22" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_23" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_24" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_5" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_25" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_26" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_27" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Факультет</p>
                                                <input name="education_28" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_29" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_30" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="button" class="btn btn-primary">Добавить учебное заведение</button>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <input type="submit" id="submit_2" name="submit_2" class="btn btn-outline btn-success"></input>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <script type="text/javascript">

                                    $("button").click(function(){
                                        var $new_ed_2 = $("#new_ed_2");
                                        var $new_ed_3 = $("#new_ed_3");
                                        var $new_ed_4 = $("#new_ed_4");
                                        if($new_ed_4.is(':visible')){
                                            $("#new_ed_5").show();
                                        }
                                        if($new_ed_3.is(':visible')){
                                            $("#new_ed_4").show();
                                        }
                                        if($new_ed_2.is(':visible')){
                                            $("#new_ed_3").show();
                                        }
                                        $new_ed_2.show();

                                        

                                    }); 
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Профессиональная переподготовка без присвоения квалификации
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                    <label>Период обучения</label>
                                    <div class="row" id="new_ed_6">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_1" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_2" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_3" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_1_4" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_1_5" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_6" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_7" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_7" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_9" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_1_10" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_1_11" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_12" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_8" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_13" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_14" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_15" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_1_16" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_1_17" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_18" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_9" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_19" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_20" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_21" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_1_22" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_1_23" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_24" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_10" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_25" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_26" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_27" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_1_28" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_1_29" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_30" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="button" id="button_1" class="btn btn-primary">Добавить учебное заведение</button>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <input type="submit" id="submit_3" name="submit_3" class="btn btn-outline btn-success"></input>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <script type="text/javascript">

                                    $("#button_1").click(function(){
                                        var $new_ed_7 = $("#new_ed_7");
                                        var $new_ed_8 = $("#new_ed_8");
                                        var $new_ed_9 = $("#new_ed_9");
                                        if($new_ed_9.is(':visible')){
                                            $("#new_ed_10").show();
                                        }
                                        if($new_ed_8.is(':visible')){
                                            $("#new_ed_9").show();
                                        }
                                        if($new_ed_7.is(':visible')){
                                            $("#new_ed_8").show();
                                        }
                                        $new_ed_7.show();

                                        

                                    }); 
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Профессиональная переподготовка с присвоения квалификации
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                    <label>Период обучения</label>
                                    <div class="row" id="new_ed_11">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_2_1" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_2_2" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_2_3" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_2_4" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_2_5" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_2_6" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_2_7" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_12" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_2_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_2_9" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_2_10" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_2_11" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_2_12" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_2_13" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_2_14" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_13" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_2_15" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_2_16" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_2_17" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_2_18" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_2_19" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_2_20" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_2_21" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_14" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_2_22" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_2_23" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_2_24" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_2_25" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_2_26" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_2_27" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_2_28" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_15" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_2_29" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_2_30" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_2_31" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Наименование программы</p>
                                                <input name="education_2_32" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Специальность</p>
                                                <input name="education_2_33" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_2_34" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_2_35" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="button" id="button_2" class="btn btn-primary">Добавить учебное заведение</button>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <input type="submit" id="submit_4" name="submit_4" class="btn btn-outline btn-success">Отправить данные</input>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <script type="text/javascript">

                                    $("#button_2").click(function(){
                                        var $new_ed_12 = $("#new_ed_12");
                                        var $new_ed_13 = $("#new_ed_13");
                                        var $new_ed_14 = $("#new_ed_14");
                                        if($new_ed_14.is(':visible')){
                                            $("#new_ed_15").show();
                                        }
                                        if($new_ed_13.is(':visible')){
                                            $("#new_ed_14").show();
                                        }
                                        if($new_ed_12.is(':visible')){
                                            $("#new_ed_13").show();
                                        }
                                        $new_ed_12.show();

                                        

                                    }); 
                                </script>
                            </div>
                        </div>
                    </div>



                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Дополнительное образование
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Профессиональная подготовка
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                    <label>Период обучения</label>
                                    <div class="row" id="new_ed_16">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_3_1" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_3_2" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_3_3" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_3_4" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_3_5" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_3_6" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_17" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_3_7" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_3_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_3_9" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_3_10" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_3_11" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Квалификация</p>
                                                <input name="education_3_12" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_18" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_3_13" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_3_14" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_3_15" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_3_16" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_3_17" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_3_18" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_19" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_3_19" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_3_20" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_3_21" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_3_22" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_3_21" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_3_22" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_20" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_3_23" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_3_24" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_3_25" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_3_26" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_3_27" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_3_28" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="button" id="button_3"  class="btn btn-primary">Добавить учебное заведение</button>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <input type="submit" id="submit_5" name="submit_5" class="btn btn-outline btn-success"></input>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <script type="text/javascript">

                                    $("#button_3").click(function(){
                                        var $new_ed_17 = $("#new_ed_17");
                                        var $new_ed_18 = $("#new_ed_18");
                                        var $new_ed_19 = $("#new_ed_19");
                                        if($new_ed_19.is(':visible')){
                                            $("#new_ed_20").show();
                                        }
                                        if($new_ed_18.is(':visible')){
                                            $("#new_ed_19").show();
                                        }
                                        if($new_ed_17.is(':visible')){
                                            $("#new_ed_18").show();
                                        }
                                        $new_ed_17.show();

                                        

                                    }); 
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Повышение квалификации
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                    <label>Период обучения</label>
                                    <div class="row" id="new_ed_21">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_22" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_23" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_24" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_25" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения (город)</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="button" id="button_4" class="btn btn-primary">Добавить учебное заведение</button>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="submit" id="submit_3" name="submit_3" class="btn btn-outline btn-success">Отправить данные</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <script type="text/javascript">

                                    $("#button_4").click(function(){
                                        var $new_ed_22 = $("#new_ed_22");
                                        var $new_ed_23 = $("#new_ed_23");
                                        var $new_ed_24 = $("#new_ed_24");
                                        if($new_ed_24.is(':visible')){
                                            $("#new_ed_25").show();
                                        }
                                        if($new_ed_23.is(':visible')){
                                            $("#new_ed_24").show();
                                        }
                                        if($new_ed_22.is(':visible')){
                                            $("#new_ed_23").show();
                                        }
                                        $new_ed_22.show();

                                        

                                    }); 
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Семинары
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                    <label>Период обучения</label>
                                    <div class="row" id="new_ed_26">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_27" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_28" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_29" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_30" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="button" id="button_5" class="btn btn-primary">Добавить учебное заведение</button>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="submit" class="btn btn-outline btn-success">Отправить данные</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <script type="text/javascript">

                                    $("#button_5").click(function(){
                                        var $new_ed_27 = $("#new_ed_27");
                                        var $new_ed_28 = $("#new_ed_28");
                                        var $new_ed_29 = $("#new_ed_29");
                                        if($new_ed_29.is(':visible')){
                                            $("#new_ed_30").show();
                                        }
                                        if($new_ed_28.is(':visible')){
                                            $("#new_ed_29").show();
                                        }
                                        if($new_ed_27.is(':visible')){
                                            $("#new_ed_28").show();
                                        }
                                        $new_ed_27.show();

                                        

                                    }); 
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Тренинги
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                    <label>Период обучения</label>
                                    <div class="row" id="new_ed_31">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_32" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_33" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_34" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="new_ed_35" style="padding-top: 20px; display: none;">
                                        <div class="col-xs-2" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Дата начала</p>
                                                <input name="education_1_8" type="date" class="form-control" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="input-group">
                                                <p>Дата окончания</p>
                                                <input name="education_1_8" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-3" style="width: auto;">
                                            <div class="input-group">
                                                <p>Место учебного заведения</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: auto;">
                                            <div class="input-group">
                                                <p>Название программы</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-1" style="width: 10%;">
                                            <div class="input-group">
                                                <p>Кол-во часов</p>
                                                <input name="education_1_8" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="button" id="button_6" class="btn btn-primary">Добавить учебное заведение</button>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                                <button type="submit" class="btn btn-outline btn-success">Отправить данные</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <script type="text/javascript">

                                    $("#button_6").click(function(){
                                        var $new_ed_32 = $("#new_ed_32");
                                        var $new_ed_33 = $("#new_ed_33");
                                        var $new_ed_34 = $("#new_ed_34");
                                        if($new_ed_34.is(':visible')){
                                            $("#new_ed_35").show();
                                        }
                                        if($new_ed_33.is(':visible')){
                                            $("#new_ed_34").show();
                                        }
                                        if($new_ed_32.is(':visible')){
                                            $("#new_ed_33").show();
                                        }
                                        $new_ed_32.show();

                                        

                                    }); 
                                </script>
                            </div>
                        </div>
                    </div>



                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->
        
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->