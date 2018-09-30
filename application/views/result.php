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
                    <h1 class="page-header">Просмотр результатов</h1>
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
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Этап анкетирования</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Этап тестирования</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab" aria-expanded="false">Общий коэффициент</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Этап анкетирования</h4>
                                    <div <?php if($coef['coef_anketa'] == null) { echo 'style=""';} else { echo 'style="display: none;"'; } ?>>
                                    	<p>Как только вы получите коэффициент по данному этапу он будет отображаться тут</p>
                                    </div>
                                    <div <?php if($coef['coef_anketa'] != null) { echo 'style=""';} else { echo 'style="display: none;"'; } ?>>
                                    	<?php 

                                    		if($coef['coef_anketa'] >= 0 && $coef['coef_anketa'] <= 0.24) { 
                                    			echo '<p>Очень низкий уровень развития компетенций '. $coef['coef_anketa'] . '</p>';
                                    		} else if($coef['coef_anketa'] >= 0.25 && $coef['coef_anketa'] <= 0.49) { 
                                    			echo '<p>Низкий уровень развития компетенций '. $coef['coef_anketa'] . '</p>';
                                    		} else if($coef['coef_anketa'] >= 0.5 && $coef['coef_anketa'] <= 0.74) { 
                                    			echo '<p>Средний уровень развития компетенций '. $coef['coef_anketa'] . '</p>';
                                    		} else {
                                    			echo '<p>Высокий уровень развития компетенций '. $coef['coef_anketa'] . '</p>';
                                    		}

                                    	?>
									</div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Этап тестирования</h4>
                                    <div <?php if($coef['coef_test'] == null) { echo 'style=""';} else { echo 'style="display: none;"'; } ?>>
                                    	<p>Как только вы получите коэффициент по данному этапу он будет отображаться тут</p>
                                    </div>
                                    <div <?php if($coef['coef_test'] != null) { echo 'style=""';} else { echo 'style="display: none;"'; } ?>>
                                    	<?php 

                                    		if($coef['coef_test'] >= 0 && $coef['coef_test'] <= 0.24) { 
                                    			echo '<p>Очень низкий уровень развития компетенций '. $coef['coef_test'] . '</p>';
                                    		} else if($coef['coef_test'] >= 0.25 && $coef['coef_test'] <= 0.49) { 
                                    			echo '<p>Низкий уровень развития компетенций '. $coef['coef_test'] . '</p>';
                                    		} else if($coef['coef_test'] >= 0.5 && $coef['coef_test'] <= 0.74) { 
                                    			echo '<p>Средний уровень развития компетенций '. $coef['coef_test'] . '</p>';
                                    		} else {
                                    			echo '<p>Высокий уровень развития компетенций '. $coef['coef_test'] . '</p>';
                                    		}

                                    	?>
									</div>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Общий коэффициент</h4>
                                    <div <?php if($coef['coef_all'] == null) { echo 'style=""';} else { echo 'style="display: none;"'; } ?>>
                                    	<p>Как только вы получите коэффициент по данному этапу он будет отображаться тут</p>
                                    </div>
                                    <div <?php if($coef['coef_all'] != null) { echo 'style=""';} else { echo 'style="display: none;"'; } ?>>
                                    	<?php 

                                    		if($coef['coef_all'] >= 0 && $coef['coef_all'] <= 0.24) { 
                                    			echo '<p>Очень низкий уровень развития компетенций '. $coef['coef_all'] . '</p>';
                                    		} else if($coef['coef_all'] >= 0.25 && $coef['coef_all'] <= 0.49) { 
                                    			echo '<p>Низкий уровень развития компетенций '. $coef['coef_all'] . '</p>';
                                    		} else if($coef['coef_all'] >= 0.5 && $coef['coef_all'] <= 0.74) { 
                                    			echo '<p>Средний уровень развития компетенций '. $coef['coef_all'] . '</p>';
                                    		} else {
                                    			echo '<p>Высокий уровень развития компетенций '. $coef['coef_all'] . '</p>';
                                    		}

                                    	?>
									</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
            </div>
                
            </div>
        </div>
        <!-- /#page-wrapper -->

