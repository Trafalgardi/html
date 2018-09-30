<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="../user/profile">Кадровая безопасность</a>
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
                                    <a href="questionnaire"> Базовая информация</a>
                                </li>
                                <li>
                                    <a href="education"> Информация об образовании</a>
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
                    <h1 class="page-header">Главная страница</h1>
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
                            <i></i> Информация о сайте
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"> Авторизация </h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Вам стал доступен этап анкетирования. Всего на данный момент существует два этапа, анкетирование и тестирования после прохождения каждого этапа вы получаете определенный коэффициент на основе которого определяться ваш уровень развития компетенций.</p><hr>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-unlock"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Этап анкетирования</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>На данном этапе вам предстоит заполнить подробную информацию о себе.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Обработка результатов</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Ваши данные будут обработаны системой, которая определит ваш текущий коэффициент по данному этапу. На основе данного коэффициента будет определен уровень развития компетенций.
                                                <ul> Всего может быть четыре уровня: 
                                                    <li>Очень низкий уровень развития компетенций; </li>
                                                    <li>Средний уровень развития компетенций; </li>
                                                    <li>Высокий уровень развития компетенций; </li>
                                                    <li>Очень высокий уровень развития компетенций.</li>
                                                </ul>

                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger"><i class="fa fa-lock"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Этап тестирования</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Для получения доступа к данному этапу, уровень развития компетенций по этапу анкетирования должен быть выше среднего. В данном этапе вам предстоит пройти определенные тесты.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Обработка результатов</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Ваши данные будут обработаны системой, которая определит ваш текущий коэффициент по данному этапу.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Получение коэффициента благонадежности</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Система обработает все ваши данные, которые были занесены в базу данных и вычесляет ваш коэффициент благонадежности.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
        </div>
        <!-- /#page-wrapper -->

