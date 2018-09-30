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
                        <a href="../test/test_1" class="active"><i class="fa fa-edit fa-fw"></i> Доступные тесты</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-header"> Доступный тест №2</h1>
            </div>
            <div class="col-lg-4">
            	<ol class="breadcrumb page-header" style="float: right; ">
			        <li><a href="../user/index"><i class="fa fa-dashboard"></i> Главная страница</a></li>
			        <li>Доступные тесты</li>
			    </ol>
			</div>
            <!-- /.col-lg-12 -->
        </div>


        <?php if(isset($_SESSION['success'])) {?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

        <?php }?>


		<h4 style="text-indent: 25px;">
		    Тест состоит из 25 вопросов, на каждый из которых предлагается дать один из пяти
            предлагаемых вариантов ответов: от полного согласия до уверенного «нет». Результат
            анкетирования определяется согласно набранным баллам, на основании которых
            выносится заключение о склонности человека к рисковому поведению.
		</h4>
		<form method="post" style="padding-bottom: 25px;">
			<div class="box-body">  
				<div class="form-group">
					<label>1. Превысили бы Вы установленную скорость, чтобы быстрее оказать необходимую медицинскую помощь больному человеку?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>2. Согласились бы Вы ради хорошего заработка участвовать в опасной и длительной экспедиции?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>3. Стали бы Вы на пути убегающего опасного преступника?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>4. Могли бы Вы ехать на подножке товарного вагона при скорости более 100 км/ч?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>5. Можете ли Вы на другой день после бессонной ночи нормально работать?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>6. Стали бы Вы первым переходить холодную реку?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				  </div>
				
				<div class="form-group">
					<label>7. Одолжили бы Вы другу большую сумму денег, будучи не совсем уверенным, что он сможет Вам вернуть ее?</label>
				 <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>8. Вошли бы Вы вместе с укротителем в клетку со львами при его заверении, что это безопасно?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>9. Могли бы Вы под руководством опытного наставника залезть на высокую фабричную трубу?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>10. Могли бы Вы без тренировки взяться за управление парусной лодкой?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>11. Рискнули бы Вы схватить за уздечку бегущую лошадь?</label>
				 <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>12. Могли бы Вы, выпив пару литров пива, ехать на велосипеде?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>13. Могли бы Вы совершить прыжок с парашютом?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>14. Могли бы Вы при необходимости проехать без билета от Петербурга до Мурманска?</label>
				 <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>15. Могли бы Вы отправиться в далекую поездку на автомобиле, если бы за рулем должен был сидеть Ваш знакомый, совсем недавно побывавший в тяжелом дорожном происшествии?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>16. Могли бы Вы прыгнуть с 10-метровой высоты на тент пожарной команды?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>17. Могли бы Вы, чтобы избавиться от затяжной болезни с постельным режимом, пойти на опасную для жизни операцию?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>18. Могли бы Вы спрыгнуть с подножки вагона при скорости движения 60 км/ч?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>19. Могли бы Вы в виде исключения вместе с шестью другими людьми подняться на лифте, рассчитанном только на 5 человек?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>20. Могли бы Вы за большое денежное вознаграждение перейти с завязанными глазами оживленный уличный перекресток?</label>
				 <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>21. Взялись бы Вы за опасную для жизни работу, если бы за нее хорошо платили?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>22. Могли бы Вы после 10 рюмок водки вычислять проценты?</label>
				 <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios21" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios21" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios21" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios21" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios21" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>23. Могли бы Вы по указанию Вашего начальника взяться за высоковольтный провод, если бы он заверил Вас, что провод обесточен?</label>
				 <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios22" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios22" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios22" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios22" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios22" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>24. Могли бы Вы после некоторых предварительных объяснений управлять вертолетом?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios23" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios23" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios23" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios23" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios23" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>25. Могли бы Вы, имея билеты, но без денег и продуктов, доехать из Москвы до Хабаровска?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios24" value="Полностью согласен, полное «да»" required>
					  Полностью согласен, полное «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios24" value="Больше «да», чем «нет»" required>
					  Больше «да», чем «нет»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios24" value="Ни «да», ни «нет»,нечто среднее" required>
					  Ни «да», ни «нет»,нечто среднее
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios24" value="Больше «нет», чем «да»" required>
					  Больше «нет», чем «да»
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios24" value="Полное «нет»" required>
					  Полное «нет»
					</label>
				  </div>
				</div>
				<div class="box-footer">
					<input name="submit" type="submit" class="btn btn-primary"></input>
				</div>
			</div>
		</form>
	</div>
